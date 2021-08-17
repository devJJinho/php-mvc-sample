<?php
Class Board extends Controller{
    var $title;
    var $res;
    function basic(){
       
    }

    function view(){
        $sql="select * from user";
        $values=array();
        $this->res=$this->db->fetchAll($sql,$values);
    }
    
    function getTitle(){
        $this->title="Board";
    }
}

?>