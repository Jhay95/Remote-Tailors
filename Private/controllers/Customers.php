<?php


class Customers extends Controller
{

    public function register()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Process form
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'username' => trim($_POST['uname']),
                'password' => trim($_POST['password']),
                'name_err' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err' => ''];

            // Validate Name
            if (empty($data['name'])) {
                $data['fname_err'] = 'Please enter name';
            }

            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter username';
            }

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['fname_err']) && empty($data['lname_err']) && empty($data['password_err']) && empty($data['username_err'])) {
                // Validated
                die('SUCCESS');
            } else {
                // Load view with errors
                $this->view('tailors/register', $data);
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // Validated
                die('SUCCESS');
            } else {
                // Load view with errors
                $this->view('tailors/register', $data);
            }

        } else {
            // Init data
            $data = [
                'name' => '',
                'email' => '',
                'username' => '',
                'password' => '',
                'name_err' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err' => ''
            ];

            // Load view
            $this->view('customer/register', $data);
        }
    }

    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-tailor'])) {
            // Process form
        } else {
            // Init data
            $data = [
                'email' => '',
                'username' => '',
                'password' => '',
                'email_err' => '',
                'username_err' => '',
                'password_err' => ''
            ];

            // Load view
            $this->view('customer/login', $data);
        }
    }
}