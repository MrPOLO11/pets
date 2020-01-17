<?php
// Turn on error reporting -- this is critical!
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require autoload file
require("vendor/autoload.php");

//Instantiate F3
$f3 = Base::Instance();

//Define a default route
$f3->route("GET /", function (){
    //$view = new Template();
    //echo $view->render("Pet.html");
    echo "Pet Home";
});

//Run f3
$f3->run();