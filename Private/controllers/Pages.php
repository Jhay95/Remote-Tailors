<?php
/**
 * Class Pages
 * This Controller displays the pages
 */

class Pages extends Controller
{
    private $tailorModel;

    public function __construct()
    {
        $this->tailorModel = $this->model('Tailor');
    }


    public function index(){
        $tailors = $this->tailorModel->getTailors();

        $data = [
            'title' => 'Remote Tailor',
            'tailors' => $tailors,
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About us'
        ];
        $this->view('pages/about_us', $data);
    }

    public function register(){
        $data = [
            'title' => 'Register'
        ];
        $this->view('pages/form_register', $data);
    }

    public function men(){
        $tailors = $this->tailorModel->getTailorsByPref('Male');
        $data = [
            'title' => 'For Men',
            'tailors' => $tailors
        ];
        $this->view('pages/men', $data);
    }

    public function women(){
        $tailors = $this->tailorModel->getTailorsByPref('Female');
        $data = [
            'title' => 'For Women',
            'tailors' => $tailors
        ];
        $this->view('pages/women', $data);
    }

}