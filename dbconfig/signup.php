<?php

session_start();

include("dbconnect.php");

$database = mysqli_select_db($link,'space');

if (isset($_POST["login"]))
{
  If($_REQUEST['username']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['password_2']=='')
{
  Echo "please fill the empty field.";
}
Else
{
  $strsql="INSERT INTO yb_user (user_name, email, password) VALUES('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."')";
  
  mysqli_query($con,$strsql) or die(mysqli_error($con));

  $_SESSION['username'] = $_POST['username'];

 echo "You are successfully Registered";

  // header("location: http://localhost/MySpace/create_profile.php"); //Rredirect to edit profile page

  }
}

