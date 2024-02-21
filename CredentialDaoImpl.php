<?php
require_once "DatabaseConnection.php";
class CredentialDaoImpl implements CredentialDao{

   // $credentialdao=$cdto (object from signupController.php)
   
    function saveStudent($credentialdao){
        $name=$credentialdao->get_name();
        $email=$credentialdao->get_email();
        $pass=$credentialdao->get_pass();

        $dbcon=new DatabaseConnection();

        $connection=$dbcon->getConnection();

        $sql="insert into student(name,email,password) values('$name','$email','$pass')";
        $result= mysqli_query($connection,$sql);
        if($result){
            echo "Success";
        }
        else{
            echo "error";
        }
    }
}
?>