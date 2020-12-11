<?php 

class App 
{
     protected $controller = 'home';

     protected $method = 'index';

     protected $params = [];

     public $HandleError = array(); 

    public function __construct()

    {
        //  Assign The Parse url TO url Vairable 

         $url = $this->parseUrl();
        // print_r($url);
        // check if the file page is Exist 

        if (file_exists('../app/controllers/' . $url[0] . '.php'))
         {
            $this->controller  = $url[0];

            unset($url[0]);
        }else{
            // go to 404 page for not found page 

            $HandleError[] =  "404 Not Found Page ";
        }
        // include the file page that mutched with 

        require_once '../app/controllers/' . $this->controller . '.php';
       // echo $this->controller;
        // make new instance with this->controller

        $this->controller = new $this->controller;

        // check if method is exist 
        if (isset($url[1])) 
        {
            if (method_exists($this->controller , $url[1]))
             {
                $this->method = $url[1];
                unset($url[1]);
            }else{
                $HandleError[] = "404 No Method with this name  Even Return Page With THe name";
            }
        }

        // Check If function Has a Parameter 

        $this->params = $url ? array_values($url) : [] ;

       // print_r($this->params);

        call_user_func_array([$this->controller , $this->method] , $this->params);


    if (!empty($HandleError)) {
        foreach ($HandleError as $Error) {
            echo $Error;
        }
    }
    }



    // the parse function the Get url & explode & Sanitize url 
    public function parseUrl(){

        if (isset($_GET['url'])) 
        {
            return $url = explode('/' ,filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }else {
            $HandleError[] = "505 But Request";
        } 
    }



}