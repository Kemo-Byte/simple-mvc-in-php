<?php

    class Controller {

        // create model function ..
        public function model($model) {

            require_once '../app/models/'. $model . '.php'; 
            return new $model();
        }

        // create view function 
        public function view($view , $data = []){

            require_once '../app/views/' . $view . '.php';
        }
        
    }