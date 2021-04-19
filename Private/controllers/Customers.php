<?php


class Customers extends Controller
{

    private $custModel;
    private $tailorModel;
    private $messageModel;

    public function __construct()
    {
        $this->custModel = $this->model('Customer');
        $this->tailorModel = $this->model('Tailor');
        $this->messageModel = $this->model('Message');

    }

    public function index($id)
    {
        if (loggedin() && $_SESSION['user'] == 'customer') {
            $customer = $this->custModel->getCustomerById($id);
            $photo = $this->custModel->profile_photo($id);

            $data = [
                'customer' => $customer,
                'photo' => $photo
            ];

            $this->view('customers/index', $data);
        } else header('location: ' . URL_ROOT . 'customers/signin');

    }

    public function signup()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Process form
            $data = [
                'fname' => trim($_POST['fname']),
                'lname' => trim($_POST['lname']),
                'email' => trim($_POST['email']),
                'username' => trim($_POST['uname']),
                'password' => trim($_POST['password']),
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err' => ''];

            // Check if Names are empty
            if (empty($data['fname'])) {
                $data['fname_err'] = 'Please enter you First name';
            }
            if (empty($data['lname'])) {
                $data['lname_err'] = 'Please enter your Last name';
            }

            // Validate Username
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter a unique username';
            } else {
                if ($this->custModel->getCustByUser($data['username'])) {
                    $data['username_err'] = 'Please enter a unique username';
                }
            }

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                if ($this->custModel->getCustByEmail($data['email'])) {
                    $data['email_err'] = 'This email address in invalid';
                }
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['fname_err']) && empty($data['lname_err']) && empty($data['password_err']) && empty($data['username_err'])) {

                // Register User
                $registered = $this->custModel->register($data);

                if ($registered) {
                    $customer = $this->custModel->getCustomerById($registered);
                    // Create Session
                    $this->createSession($customer);
                } else {
                    $this->view('customers/register', $data);
                }
            } else {
                $this->view('customers/register', $data);
            }


        } else {
            // Init data
            $data = [
                'fname' => '',
                'lname' => '',
                'email' => '',
                'username' => '',
                'password' => '',
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err' => ''
            ];

            // Load view
            $this->view('customers/register', $data);
        }
    }

    public function signin()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Process form
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => ''];

            // Check if entries are empty
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            if (!empty($data['email'])) {
                if (!$this->custModel->getCustByEmail($data['email'])) {
                    $data['email_err'] = 'User not found';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Check and set logged in user
                $loggedin = $this->custModel->login($data['email'], $data['password']);

                if ($loggedin) {
                    // Create Session
                    $this->createSession($loggedin);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('customers/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('customers/login', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];

            // Load view
            $this->view('customers/login', $data);
        }
    }

    public function createSession($customer)
    {
        $_SESSION['id'] = $customer['customer_id'];
        $_SESSION['email'] = $customer['customer_email'];
        $_SESSION['user'] = 'customer';
        header('location: ' . URL_ROOT . 'customers/index/' . $customer['customer_id']);
    }

    public function signout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        session_destroy();
        header('location: ' . URL_ROOT . 'customers/signin');
    }

    public function edit($id)
    {

        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Process form
            $data = [
                'id' => $id,
                'fname' => ucwords(trim($_POST['fname'])),
                'lname' => ucwords(trim($_POST['lname'])),
                'email' => strtolower(trim($_POST['email'])),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'city' => ucwords(trim($_POST['city'])),
                'gender' => $_POST['gender'],
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'phone_err' => ''
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
                if ($customer = $this->custModel->findCustByEmail($data['email'])) {
                    $data['email_err'] = 'This email address in invalid';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['fname_err']) && empty($data['lname_err'])) {

                // Update User
                $updated = $this->custModel->update($data);

                if ($updated) {
                    // Create Session
                    header('location: ' . URL_ROOT . 'customers/index/' . $id);
                } else {
                    die('Something happened!!, Unable to update profile');
                }
            } else {
                $this->view('customers/edit', $data);
            }


        } else {
            // retrieve customer data
            $customer = $this->custModel->getCustomerById($id);

            if (!$customer['customer_id'] == $_SESSION['id']) {
                header('location' . URL_ROOT . 'pages');
            }
            // Init data
            $data = [
                'id' => $id,
                'fname' => $customer['customer_fname'],
                'lname' => $customer['customer_lname'],
                'email' => $customer['customer_email'],
                'phone' => $customer['customer_phone'],
                'address' => $customer['customer_address'],
                'city' => $customer['customer_city'],
                'gender' => $customer['customer_gender'],
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'phone_err' => ''
            ];

            // Load view
            $this->view('customers/edit', $data);
        }
    }

    public function upload($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'photo_user_id' => $id,
                'photo_name' => '',
                'photo_user_type' => 'customer',
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
                    $uploaded = $this->custModel->upload($data);

                    /*   if ($exists) {
                              $uploaded = $this->writerModel->editPhoto($data);
                          } else {
                              $uploaded = $this->writerModel->uploadPhoto($data);
                          }*/

                    if ($uploaded === True) {
                        header('location:' . URL_ROOT . 'customers/index/' . $id);
                    } else {
                        $data['file_error'] = "Failed to upload file.";
                    }
                    $this->view('customers/profile_upload', $data);
                }
                $this->view('customers/profile_upload', $data);
            } else {
                $this->view('customers/profile_upload', $data);
            }
        } else {
            $data = [
                'id' => $id,
            ];
            $this->view('customers/profile_upload', $data);
        }
    }

    public function message($id)
    {
        if (!loggedin() || $_SESSION['user'] !== 'customer') {
            header('location: ' . URL_ROOT . 'customers/login');
        }

        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $tailor = $this->tailorModel->getTailorById($id);

            // Check if customer has previous conversation with tailor
            $messages = $this->messageModel->getMessagesbyCustomers($_SESSION['id'], $id);

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Process form
            $data = [
                'customer_id' => $_SESSION['id'],
                'tailor_id' => $id,
                'tailor' => $tailor,
                'messages' => $messages,
                'message' => $_POST['message'],
                'message_err' => ''
            ];



            // Validate Password
            if (empty($data['message'])) {
                $data['message_err'] = 'Please type a message';
            }

            // Make sure errors are empty
            if (empty($data['message_err'])) {

                // Register User
                $sent = $this->messageModel->sendMessageFromCust($data);

                if ($sent) {
                    // redirect to my_tailor controller
                    header('location:' . URL_ROOT . 'customers/message/' . $id);
                }
            } else {
                // Load view
                $this->view('customers/contact', $data);
            }

        } else {
            //Get tailor
            $tailor = $this->tailorModel->getTailorById($id);

            // Check if customer has previous conversation with tailor
            $messages = $this->messageModel->getMessagesbyCustomers($_SESSION['id'], $id);

            // Init data
            $data = [
                'customer_id' => $_SESSION['id'],
                'tailor' => $tailor,
                'messages' => $messages
            ];

            $this->view('customers/contact', $data);
        }
    }

    public function tailors($id)
    {
        // get customer
        $self = $this->custModel->getCustomerById($id);

        // Get tailors
        $tailors = $this->messageModel->getTailorsContacted($id);

        // Init data
        $data = [
            'tailors' => $tailors,
            'self' => $self
        ];

        // Load view
        $this->view('customers/tailors', $data);
    }

}