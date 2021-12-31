<?php
Class Register extends Controller{
    var $id;
    var $pw;
    var $nickname;
    var $email;
    function basic(){
        print_r($_POST);
    }

    function getTitle(){
        $this->title="회원가입";
    }
}

?>