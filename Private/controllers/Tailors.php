<?php

class Tailors extends Controller
{
    /**
     * @var mixed
     */
    private $tailorModel;

    public function __construct()
    {
        $this->tailorModel = $this->model('Tailor');
        echo $this->tailorModel;
    }

    public function index()
    {
        $tailors = $this->tailorModel->getTailorsByEmail();
        $data = [
            'tailors' => $tailors
        ];

        $this->view('pages/tailors/index', $data);
    }
}