<?php
/**
 * Base Controller, loads models and views
 */

class Controller
{
    public function model($model)
    {
        //Requires Model Files
        require_once('../Private/models/' . $model . '.php');

        //Instantiate Model
        return new $model();
    }

    // load views
    public function view($view, $data=[])
    {
        # check for view file
        if(file_exists('../Private/views/' . $view . '.php')){
            require_once('../Private/views/' . $view . '.php');
        }else die('Page does not exist');
    }
}