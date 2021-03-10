<?php
class Profiles extends Controller {

    private $tailorModel;

    public function __construct(){
        if(loggedin()){
            $this->id = $_SESSION['id'];
        } else header('location: ' . URL_ROOT . 'tailors/signin');

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

    public function edit($id){
        // Get tailor
        $tailor = $this->tailorModel->getTailorById($id);

        $data = [
            'tailor' => $tailor
        ];

        $this->view('tailors/edit', $data);
    }

    public function update($id) {

        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Process form
            $data = [
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
            // Validate Password
            if (!is_numeric($data['phone_err'])) {
                $data['phone_err'] = 'Please enter a valid number';
            }

            if (!empty($data['email'])) {
                if ($tailors = $this->tailorModel->getTailorByEmail($data['email'])) {
                    $data['email_err'] = 'This email address in invalid';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['fname_err']) && empty($data['lname_err']) && empty($data['phone_err'])) {

                // Update User
                $updated = $this->tailorModel->update($id, $data);

                if ($updated) {
                    // Create Session
                    header('location: ' . URL_ROOT . 'profiles/index/'. $id);
                } else {
                    $this->view('tailors/edit', $data);
                }
            }


        } else {
            // Init data
            $data = [
                'fname' => '',
                'lname' => '',
                'email' => '',
                'phone' => '',
                'address' => '',
                'city' => '',
                'style' => '',
                'gender' => '',
                'pref' => '',
                'fname_err' => '',
                'lname_err' => '',
                'email_err' => '',
                'phone_err' => ''
            ];

            // Load view
            $this->view('tailors/edit', $data);
        }
    }

}