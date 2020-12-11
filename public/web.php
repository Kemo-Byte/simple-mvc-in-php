
<?php
    // requre pages file include a whole name pages
    require_once '../app/models/Pages.php';

    // here include the initialization files 
        require_once '../app/init.php';

    /* ===== Simple MVC ====
        === It's Not Perfect but Underbuilding & Testing
        === remaind Many Thing Let's Do Together :)   
    */

    // Here You will put your links Or pages names in below array

    // And will go to contorllers folder set in home.php
    // And check if isset function with same name of link or page name 
    // if isset function  pass the name of linke in function view 
    // and redirect to page that you include the name
    // ......  Now Create Somethinge Great....! 

   
    // this is foreach for explode array of pages from pahes file  
    echo '<center>';
    foreach ($pages as $page) {
        echo "<a href='$page'> $page </a> &nbsp; | &nbsp;";
    }
    echo '</center>';
    

    // here will create object or instance of class App 
    // this class Contain  Core Of The MVC Routing 
    $app = new App;



?>

