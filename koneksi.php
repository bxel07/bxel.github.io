<?php
 function Createdb(){
   $dbhost = 'localhost';
   $username = 'root';
   $pass = '';
   $db = 'vote';
   $con = mysqli_connect($dbhost, $username, $pass);
   
   if(!$con){
      die("Tidak bisa connect: ".mysqli_connect_error());
   }
   
   $sql = "CREATE DATABASE IF NOT EXISTS $db"; 

   if(mysqli_query($con, $sql)){
       $con = mysqli_connect($dbhost,$username,$pass,$db);

       $sql = "
            CREATE TABLE IF NOT EXISTS voteses(
                id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(30),
                title VARCHAR(30),
                reason VARCHAR(200)
            );
       ";
       if(mysqli_query($con,$sql)){
          return $con;
       }else{
           echo "Drunken Pirates";
       }
   }else{
       echo"Error saat membuat database".mysqli_error($con);
   }
 }
