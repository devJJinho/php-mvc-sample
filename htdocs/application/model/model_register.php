<?php
class Model_register extends Model{

    function register(){
        ;
    }

    function action(){
        $post=$_POST;
        $sql="INSERT INTO user (userID,userPassword,userName,userEmail) VALUES(:id, :pw, :nickname, :email)";
        $values['id']=$post['id'];
        $values['pw']=$post['pw'];
        $values['nickname']=$post['nickname'];
        $values['email']=$post['email'];
        $this->insert($sql,$values);
    }
}

?>
