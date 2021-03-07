<?php

/**
 *  App Core class
 * Creates URL and loads controller
 * URL FORMAT  /controller/method/params
 */

class Core
{
    protected $currentController = 'Pages';
    protected string $currentMethod = 'index';
    protected bool|array $params = [];

    public function __construct()
    {
        /*print_r($this->geturl());*/

        $url = $this->geturl();

        //Look for controllers
        if (file_exists('../Private/controllers/'. ucwords($url[0]) . '.php')) {
            // If Controller exists
            $this->currentController = ucwords($url[0]);
            //unset 0  index
            unset($url[0]);
        }

        //require the controller
        require_once("../Private/controllers/". $this->currentController . ".php");
        $this->currentController = new $this->currentController;

        //check
        if (isset($url[1])) {
            //check if method exists in controller
            if (method_exists($this->currentController, $url[1])) {
                /*echo "Method Exists";*/
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }
        /* echo $this->currentMethod;*/
        // Get Params
        $this->params = $url ? array_values($url) : [];
        // call a callback with array of params
        call_user_func_array([$this->currentController,
            $this->currentMethod], $this->params);
    }

    private function geturl(): array|bool
    {
        if (isset($_GET['url'])) {
            /*echo $_GET['url'];*/
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}