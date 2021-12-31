<?php
class Error extends Controller{
    var $errorMSG;
    var $title;

    function __construct($errorMSG){
        $this->errorMSG=$errorMSG;
        $this->index();
        echo "error";
    }
    
    function basic(){
        echo "basic";
        ;
    }
    function content(){
        echo "content";
        require_once(_VIEW."error.php");
    }
    function getTitle(){
        $this->title="Error";
    }

}


?>