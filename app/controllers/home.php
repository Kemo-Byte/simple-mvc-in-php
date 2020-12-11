<?php

class Home extends Controller {

    public function  index($name = ''){
        
        // Assign The model function that has param to $user 
        // And Return $user As Instance form Database class

        $user = $this->model('Database'); 

        // Assign the variable  $name from index function to user name  
        $user->name = $name;

       // $this->view('home/index' , ['name' => $user->name]);
       // $view = $this->view('home/contact');
        
       

    }

    public function home_page() {
        // check if file exist or not 
        if (!file_exists('home')) {
            $this->view('home');
        }else{
            // Assign Error Or Handling Error 
            $HandleError[] =  "404  not found such page ";
        }
    }

    public function contact($name = ''){
        
        // check if file exist or not 
        if (!file_exists('contact')) {
            $this->view('contact');
         }else{
             // Assign Error Or Handling Error 
            $HandleError[] =  "404  not found such page ";
         }
     }
     public function about(){
        // check if file exist or not 
        if (!file_exists('about')) {
            $this->view('about');
         }else{
             // Assign Error Or not Handling 
            $HandleError[] =  "404  not found such page ";
         }
     }

     public function galary(){

        // check if file exist or not 
         if (!file_exists('galary')) {
            $this->view('galary');
         }else{
             // Assing Errro or Handling Error
            $HandleError[] =  "404  not found such page ";
         }
     }
}