<?php
class Error extends Controller{
    var $errorMSG;
    var $title;

    function _construct($errorMSG){
        $this->errorMSG=$errorMSG;
        $this->index();
    }
    
    function basic(){
        ;
    }
    
    function getTitle(){
        $this->title="Error";
    }

}


?>