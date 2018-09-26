<?php
  session_start();
 include("connect.php");
 
  if(isset($_POST['Register']))
  {
    $fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$uid=$_POST['u_id'];
$uname=$_POST['u_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$utype=$_POST['u_type'];
//$city=mysqli_real_escape_string($con,$_POST['city']);
$country=$_POST['country'];
$gender=$_POST['gender'];

 $d_o_b=$_POST['date_of_birth'];
      $p_o=$_POST['p_o'];
   
   $errormsg="Before Query";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";  
 
  $add=mysqli_query($con,"INSERT INTO users (f_name,l_name,email,password,u_id,user_name,address,city,u_type,country,gender,date_of_birth,p_o)VALUES('$fname','$lname','$email','$password','$uid','$uname','$address','$city','$utype','$country','$gender','$d_o_b','$p_o')") or die("problem in query");
  $errormsg="After Query";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";  
  
  if($add)
  {
      $msg_success="Successfully added!!";
      echo "<script type='text/javascript'>alert('$msg_success');</script>";
      header("refresh:.5;url=Home.php");
  }
  else
  {
     $errormsg="Something went wrong, Try again";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
  }
  
}
?>