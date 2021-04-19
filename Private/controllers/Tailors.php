<?php


class Tailors extends Controller
{

    private $tailorModel;
    private $customerModel;
    private $messageModel;

    public function __construct()
    {
        $this->tailorModel = $this->model('Tailor');
        $this->customerModel = $this->model('Customer');
        $this->messageModel = $this->model('Message');

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
                if ($this->tailorModel->getTailorByUser($data['username'])) {
                    $data['username_err'] = 'Please enter a unique username';
                }
            }

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                if ($this->tailorModel->getTailorByEmail($data['email'])) {
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
                $registered = $this->tailorModel->register($data);

                if ($registered) {
                    $tailor = $this->tailorModel->getTailorById($registered);
                    // Create Session
                    $this->createSession($tailor);
                } else {
                    $this->view('tailors/register', $data);
                }
            } else {
                $this->view('tailors/register', $data);
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
            $this->view('tailors/register', $data);
        }
    }

    public function signin()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
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
                if (!$this->tailorModel->getTailorByEmail($data['email'])) {
                    $data['email_err'] = 'User not found';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Check and set logged in user
                $loggedin = $this->tailorModel->login($data['email'], $data['password']);

                if ($loggedin) {
                    // Create Session
                    $this->createSession($loggedin);
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('tailors/login', $data);
                }
            } else {
                // Load view with errors
                $this->view('tailors/login', $data);
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
            $this->view('tailors/login', $data);
        }
    }

    public function createSession($tailor)
    {
        $_SESSION['id'] = $tailor['tailor_id'];
        $_SESSION['email'] = $tailor['tailor_email'];
        $_SESSION['user'] = 'tailor';
        header('location: ' . URL_ROOT . 'profiles/index/'. $tailor['tailor_id']);
    }

    public function signout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        session_destroy();
        header('location: ' . URL_ROOT . 'tailors/signin');
    }

    public function profile($id){
        // Get tailor
        $tailor = $this->tailorModel->getTailorById($id);
        $photo = $this->tailorModel->profile_photo($id);
        $works = $this->tailorModel->work_photo($id);

        $data = [
            'tailor' => $tailor,
            'photo' => $photo,
            'works' => $works
        ];

        $this->view('tailors/public_profile', $data);
    }

    public function search($keyword){

    }

    public function message($id)
    {
        if (!loggedin()) {
            header('location: ' . URL_ROOT . 'tailors/login');
        }

        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $customer = $this->customerModel->getCustomerById($id);

            // Check if customer has previous conversation with tailor
            $messages = $this->messageModel->getMessagesbyTailors($_SESSION['id'], $id);

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Process form
            $data = [
                'tailor_id' => $_SESSION['id'],
                'customer_id' => $id,
                'customer' => $customer,
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
                $sent = $this->messageModel->sendMessageFromTail($data);

                if ($sent) {
                    // redirect to my_tailor controller
                    header('location:' . URL_ROOT . 'tailors/message/' . $id);
                }
            } else {
                // Load view
                $this->view('tailors/contact', $data);
            }

        } else {
            //Get tailor
            $customer = $this->customerModel->getCustomerById($id);

            // Check if customer has previous conversation with tailor
            $messages = $this->messageModel->getMessagesbyTailors($_SESSION['id'], $id);

            // Init data
            $data = [
                'tailor_id' => $_SESSION['id'],
                'customer' => $customer,
                'messages' => $messages
            ];

            $this->view('tailors/contact', $data);
        }
    }

    public function customers($id)
    {
        // Get tailor
        $self = $this->tailorModel->getTailorById($id);

        // Get Customers
        $customers = $this->messageModel->getCustomersContacted($id);

        // Init data
        $data = [
            'customers' => $customers,
            'self' => $self
        ];

        // Load view
        $this->view('tailors/customers', $data);
    }

    


}

