<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    // $connect=new DatabaseConnection();
    // $sql="insert into student(name,email,password) values('$name','$email','$pass')";
    // $result=mysql_query($connect->getConnection,$sql);

    require_once 'CredentialDto.php';
    require_once 'CredentialDao.php';
    require_once 'CredentialDaoImpl.php';

    $cdto=new CredentialDto();
    $cdto->set_name($name);
    $cdto->set_email($email);
    $cdto->set_pass($pass);

    $cimpl=new CredentialDaoImpl();
    $cimpl->saveStudent($cdto);
}
?>