<?php
class Profiles extends Controller {

    private $tailorModel;

    public function __construct(){
       if(!loggedin()){
            header('location: ' . URL_ROOT . 'tailors/signin');
        }

        $this->tailorModel = $this->model('Tailor');
    }

    public function index($id){
        // Get tailor
        $tailor = $this->tailorModel->getTailorById($id);

        $data = [
            'tailor' => $tailor
        ];

        $this->view('tailors/index', $data);
    }


    public function edit($id) {

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
                    header('location: ' . URL_ROOT . 'profiles/index/'. $id);
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

    function upload($id) {
        if(isset($_POST['submit']))
        {
         $output_dir = "../Public/assets/uploads";//Path for file upload
        $fileCount = count($_FILES["image"]['name']);
        $RandomNum = time();
        $ImageName = $_FILES['image']['name'];
        $ImageType = $_FILES['image']['type']; //"image/png", image/jpeg etc.
        $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
        $ImageExt = str_replace('.','',$ImageExt);
        $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
        $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
        $ret[$NewImageName]= $output_dir.$NewImageName;
        move_uploaded_file($_FILES["image"]["tmp_name"],$output_dir."/".$NewImageName );
        $data = array(
        'image' =>$NewImageName
        );
            $this->model->file_details($data);
            echo "Image Uploaded Successfully";
        }
            $this->view('tailors/upload');
    }
    

    
}   