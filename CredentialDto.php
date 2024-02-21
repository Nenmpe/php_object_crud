<?php

// Model Class
// DTO = data transfer object

class CredentialDto{
    private $name;
    private $email;
    private $pass;

    function set_name($name){
        $this->name=$name;
    }
    function set_email($email){
        $this->email=$email;
    }
    function set_pass($pass){
        $this->pass=$pass;
    }

    function get_name(){
        return $this->name;
    }
    function get_email(){
        return $this->email;
    }
    function get_pass(){
        return $this->pass;
    }
}
?>