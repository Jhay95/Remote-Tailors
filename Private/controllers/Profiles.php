<?php
class Profiles extends Controller
{

    private $tailorModel;

    public function __construct()
    {
        if (!loggedin()) {
            header('location: ' . URL_ROOT . 'tailors/signin');
        }

        $this->tailorModel = $this->model('Tailor');
    }

    // Function for accessing profile page
    public function index($id)
    {
        // Get tailor
        $tailor = $this->tailorModel->getTailorById($id);
        $photo = $this->tailorModel->profile_photo($id);
        $works = $this->tailorModel->work_photo($id);

        $data = [
            'tailor' => $tailor,
            'photo' => $photo,
            'works' => $works
        ];

        $this->view('tailors/index', $data);
    }

    // Function for editing profile
    public function edit($id)
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            var_dump($_POST);
            // Process form
            $data = [
                'id' => $_SESSION['id'],
                'fname' => ucwords(trim($_POST['fname'])),
                'lname' => ucwords(trim($_POST['lname'])),
                'email' => strtolower(trim($_POST['email'])),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'city' => ucwords(trim($_POST['city'])),
                'style' => $_POST['style'],
                'gender' => $_POST['gender'],
                'pref' => $_POST['pref'],
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
            ];


            // Check if entries are empty
            if (empty($data['fname'])) {
                $data['fname_err'] = 'Please enter you First name';
            }
            if (empty($data['lname'])) {
                $data['lname_err'] = 'Please enter your Last name';
            }

            if (empty($data['email'])) {
                $data['email_err'] = 'Email can not be empty';
            }

            if (!empty($data['email'])) {

                if ($this->tailorModel->findTailorByEmail($data['email'])) {
                    $data['email_err'] = 'This email address in invalid';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['fname_err']) && empty($data['lname_err'])) {

                // Update User
                $updated = $this->tailorModel->update($data);

                if ($updated) {
                    // Create Session
                    header('location: ' . URL_ROOT . 'profiles/index/' . $id);
                } else {
                    die('Something happened!!, Unable to update profile');
                }
            } else {
                // Load view
                $this->view('tailors/edit', $data);
            }

        } else {
            //Get existing tailor data
            $tailor = $this->tailorModel->getTailorById($id);

            if (!$tailor['tailor_id'] == $_SESSION['id']) {
                header('location' . URL_ROOT . 'pages');
            }
            // Init data
            $data = [
                'id' => $id,
                'fname' => $tailor['tailor_fname'],
                'lname' => $tailor['tailor_lname'],
                'email' => $tailor['tailor_email'],
                'phone' => $tailor['tailor_phone'],
                'address' => $tailor['tailor_address'],
                'city' => $tailor['tailor_city'],
                'style' => $tailor['tailor_style'],
                'gender' => $tailor['tailor_gender'],
                'pref' => $tailor['tailor_pref'],
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
            ];

            // Load view
            $this->view('tailors/edit', $data);
        }
    }

    // Function for uploading profile photos
    public function upload($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'photo_user_id' => $id,
                'photo_name' => '',
                'photo_user_type' => 'tailor',
                'file_error' => ''
            ];

            // get the file name
            $data['photo_name'] = $_FILES['file'] ['name'];

            // get the file temp name
            $fileTmpName = $_FILES['file'] ['tmp_name'];

            // get the file extension
            $fileActualExt = pathinfo($data['photo_name'], PATHINFO_EXTENSION);

            // destination of the file on the server
            $fileDestination = '../Public/assets/profile_uploads/' . $data['photo_name'];

            // Check if a file was selected
            if (empty($_FILES['file'])) {
                $data['file_error'] = "Please select a file to upload";
            }

            // Check if file extension matches required types
            if (!in_array($fileActualExt, ['png', 'jpeg', 'jpg', 'gif'])) {
                $data['file_error'] = "You file extension must be .png, .jpeg or .jpg";
            } elseif ($_FILES['file']['size'] > 5000000) { // file shouldn't be larger than 5Megabyte
                $data['file_error'] = "File too large!";
            }

            if (empty($data['file_error'])) {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($fileTmpName, $fileDestination)) {

                    //check if any profile pic for user exist
                    $uploaded = $this->tailorModel->upload($data);

                    /*   if ($exists) {
                              $uploaded = $this->writerModel->editPhoto($data);
                          } else {
                              $uploaded = $this->writerModel->uploadPhoto($data);
                          }*/

                    if ($uploaded === True) {
                        header('location:' . URL_ROOT . 'profiles/index/' . $id);
                    } else {
                        $data['file_error'] = "Failed to upload file.";
                    }
                    $this->view('tailors/profile_upload', $data);
                }
                $this->view('tailors/profile_upload', $data);
            } else {
                $this->view('tailors/profile_upload', $data);
            }
        } else {
            $data = [
                'id' => $id,

            ];
            $this->view('tailors/profile_upload', $data);
        }
    }

    // Function for uploading photos of work done
    public function works($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'photo_user_id' => $id,
                'photo_uploaded_by' => 'tailor',
                'photo_name' => '',
                'file_error' => ''
            ];

            // Check if a file was selected
            if (!empty($_FILES['file'])) {

                for ($x = 0; $x < count($_FILES['file']['name']); $x++) {

                    // get the file name
                    $data['photo_name'] = $_FILES['file']['name'][$x];

                    // get the file temp name
                    $fileTmpName = $_FILES['file']['tmp_name'][$x];

                    // get the file extension
                    $fileActualExt = pathinfo($data['photo_name'], PATHINFO_EXTENSION);

                    // destination of the file on the server
                    $fileDestination = '../Public/assets/work_uploads/' . $data['photo_name'];


                    // Check if file extension matches required types
                    if (!in_array($fileActualExt, ['png', 'jpeg', 'jpg', 'gif'])) {
                        $data['file_error'] = "You file extension must be .png, .jpeg or .jpg, .gif";
                    } elseif ($_FILES['file']['size'][$x] > 5000000) { // file shouldn't be larger than 5Megabyte
                        $data['file_error'] = "File too large!";
                    }

                    if (empty($data['file_error'])) {
                        // move the uploaded (temporary) file to the specified destination
                        if (move_uploaded_file($fileTmpName, $fileDestination)) {

                            //check if any profile pic for user exist
                            $upload = $this->tailorModel->work_upload($data);

                            if ($upload === True) {
                                continue;
                            } else {
                                $data['file_error'] = "Failed to upload file.";
                                break;
                            }
                        }
                    } else {
                        break;
                    }
                }

                header('location:' . URL_ROOT . 'profiles/index/' . $id);

            } else {
                $data['file_error'] = "Please select a file to upload";
                $this->view('tailors/work_upload', $data);
            }

        } else {
            $data = [
                'id' => $id
            ];
            $this->view('tailors/work_upload', $data);
        }
    }
}





