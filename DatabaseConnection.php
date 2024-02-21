<?php
class DatabaseConnection{
    function getConnection(){
        return mysqli_connect('localhost','root','131119','student_db');
    }
}
?>