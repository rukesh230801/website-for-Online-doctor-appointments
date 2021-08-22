<?php
session_start();
$errors = array();

if (isset($_POST['reg'])) {
  // receive all input values from the form
  $username =  $_POST['username'];
  $emailid =  $_POST['emailid'];
  $password =  $_POST['password'];
  $confirmpassword =  $_POST['confirmpassword'];
  $phonenumber=$_POST['number'];
 
 if (!preg_match("/[a-z]/", $username) ||             
 !preg_match("/[A-Z]/", $username) ||             
 !preg_match("/[0-9]/", $username)){      
	  array_push($errors, "USERNAME require 1 each of a-z, A-Z and 0-9");
 }
  
    if (strlen($username) <5) { 
    array_push($errors, "USERNAME MUST CONTAIN MINIMUM 5 CHARACTERS");
	}
	  if (strlen($password) <6) { 
	  array_push($errors, "PASSWORD MUST CONTAIN MINIMUM 6 CHARACTERS.");
	  }


  if ($password != $confirmpassword) {
	array_push($errors, "THE TWO PASSWORDS DO NOT MATCH");
  }
  if (strlen($phonenumber) !=10) { 
    array_push($errors, "PHONE NUMBER NOT VALID.");
  }
	
	if (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) {
		 array_push($errors, "EMAIL_ID NOT VALID.");
  
}
	
  

 
  
}
  // LOGIN USER
if (isset($_POST['log'])) {
  $username =  $_POST['username'];
  $password =  $_POST['password'];

  if (empty($username)) {
	   array_push($errors, "USERNAME IS REQUIRED");
  	
  }
  if (empty($password)) {
	  array_push($errors, "PASSWORD IS REQUIRED");
  }

  }

?>