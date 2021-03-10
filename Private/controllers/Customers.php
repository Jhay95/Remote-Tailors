<?php


class Customers extends Controller
{

    private $custModel;

    public function __construct()
    {
        $this->custModel = $this->model('Customer');

    }

    public function index($id) {
        if(loggedin() && $_SESSION['user'] == 'customer'){
            $customer = $this->custModel->getCustomerById($id);
            $data = [
                'customer' => $customer
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
}