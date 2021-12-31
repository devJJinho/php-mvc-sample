<?php
Class Board extends Controller{
    var $title;
    var $res;
    function basic(){
       
    }

    function view(){
        $sql="SELECT * from user where userID=:id";
        $values['id']="jhjeong710";
        $this->res=$this->db->fetchAll($sql,$values);
        setError("dberror");
    }
    
    function getTitle(){
        $this->title="Board";
    }
}

?>