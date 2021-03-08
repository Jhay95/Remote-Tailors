<?php
class Profile extends Controller {

    private $tailorModel;
    private $id;

    public function __construct(){
        if(loggedin()){
            $this->id = $_SESSION['id'];
        } else header('location: ' . URL_ROOT . 'tailors/signin');

        $this->tailorModel = $this->model('Tailor');
    }

    public function index(){
        // Get tailor
        $tailor = $this->tailorModel->getTailorById($this->id);

        $data = [
            'tailor' => $tailor
        ];

        $this->view('tailors/index', $data);
    }

/*    public function edit(){
        // Get tailor
        $tailor = $this->tailorModel->getTailorById($this->id);

        $data = [
            'tailor' => $tailor
        ];

        $this->view('tailors/edit', $data);
    }*/

}