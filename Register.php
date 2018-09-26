<?php
  session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CITY LIGHT CAFE</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="n.css" rel="stylesheet" type="text/css" />
</head>


<div id="container_a">  
            
            <div id="Nevigation">
                        <ul>
                      <li><a href="Home.php">Home</a></li>
                     <li class="dropdown">
                        <a href="" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                         <a href="B_Menu.php">Breakfast</a>
                          <a href="L_Menu.php">Lunch</a>
                          <a href="D_Menu.php">Dinner</a>
                          <a href="O_Menu.php">Others</a>
                        </div>
                      </li>

                       <li><a href="News.php">News</a></li>
                          <li><a href="Contact.php">Contact</a></li>
                          <li><a href="About.php">About</a></li>
                                        <li class="dropdown">
                                        <a href="#" class="dropbtn">Login</a>
                                        <div class="dropdown-content">
                                          <a href="Login.php">Admin</a>
                                          <a href="">Chef</a>
                                          <a href="">Customer</a>
                                          <a href="">Others</a>
                                        </div>
                                      </li>
                           

                             <li class="dropdown">
                                        <a href="#" class="dropbtn">Location</a>
                                        <div class="dropdown-content">
                                          <a href="Map.php">Map</a>
                                          
                                        </div>
                                      </li>
                    </ul>>

                    </div>   
         

<div id="container_b_regi">
        <div id="menu">   
 <ul>
                      <li><a href="Home.php">Home</a></li>
                     <li class="dropdown">
                        <a href="" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                         <a href="B_Menu.php">Breakfast</a>
                          <a href="L_Menu.php">Lunch</a>
                          <a href="D_Menu.php">Dinner</a>
                          <a href="O_Menu.php">Others</a>
                        </div>
                      </li>

                       <li><a href="News.php">News</a></li>
                          <li><a href="Contact.php">Contact</a></li>
                          <li><a href="About.php">About</a></li>
                                        <li class="dropdown">
                                        <a href="" class="dropbtn">Login</a>
                                        <div class="dropdown-content">
                                          <a href="Login.php">Admin</a>
                                          <a href="">Chef</a>
                                          <a href="">Customer</a>
                                          <a href="">Others</a>
                                        </div>
                                      </li>
                           <li><a href="Map.php">Location</a></li>
                           <li><a href="Register.php">Register</a></li>
                    </ul>
            </div>



  <div class="body">
        <form action="process_registration.php" method="POST" enctype="multipart/form-data" id="form1">

          <table>
            <tr>
              <td colspan="1" align="center">
              <h1>  <br>   &nbsp  !Register Here! </h1>
               </td>
            </tr>
            <tr>
              <td align="right">First Name:</td>
              <td><input type="text" name="f_name" placeholder="First Name!" required></td>
              <td align="right">Last Name:</td>
              <td><input type="text" name="l_name" placeholder="Last Name!" required></td>
            </tr>
            <tr>
              <td align="right">E-Mail:</td>
              <td><input type="email" name="email" placeholder="E-Mail!" required></td>
              <td align="right">Re-Type E-Mail:</td>
              <td><input type="email" name="c_email" placeholder="Re-Type E-Mail!" required></td>
            </tr>
            <tr>
              <td align="right">Password:</td>
              <td><input type="password" name="password" placeholder="Password!" required></td>
              <td align="right">User ID:</td>
              <td><input type="text" name="u_id"  required></td>
            </tr>
            <tr>
              <td align="right">Username:</td>
              <td><input type="text" name="u_name" placeholder="Username!" required></td>
              <td align="right">Address:</td>
              <td><input type="text" name="address" placeholder="Address!" required></td>
            </tr>
            <tr>
              <td align="right">City</td>
              <td><input type="text" name="city" placeholder="City!" required></td>
               <td align="right">User Type:</td>
              <td id="u_type"><select name="u_type" id="select">
                <option>I am...</option>
                <option name="Admin" required >Admin</option>
                <option name="Chef" required >Chef</option>
                     <option name="Customer" required >Customer</option>
                </select></td>
             
            </tr>
            <tr>
              <td align="right">Country:</td>
              <td><input type="text" name="country" placeholder="Country!" required></td>
              <td align="right">Gender:</td>
              <td id="gen"><select name="gender" id="select">
                
                <option name="male" required >Male</option>
                <option name="female" required >Female</option>
                </select></td>
            </tr>
            <tr>
              <td align="right">Post Code:</td>
              <td><input type="text" name="p_o" placeholder="Post Code!" required></td>
              <td align="right">Date of Birth:</td>
              <td>
                <input type="Date" name="date_of_birth" placeholder="e.g.:DD/MM/YYYY" required></td>
            </tr>
            <tr>
              <td align="center" colspan="6">
                <button type="submit" name="Register" id="register" value="register">Register!</button>
              </td>
            </tr>
          </table>
</form>

            




</div>
</div>
</div>


</div>





</body>

</html>


<?php
  session_start();
 include("connect.php");
 
  if(isset($_POST['Regiter']))
  {
    $fname=mysqli_real_escape_string($con,$_POST['f_name']);
$lname=mysqli_real_escape_string($con,$_POST['l_name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$uid=mysqli_real_escape_string($con,$_POST['u_id']);
$uname=mysqli_real_escape_string($con,$_POST['u_name']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$utype=mysqli_real_escape_string($con,$_POST['u_type']);
//$city=mysqli_real_escape_string($con,$_POST['city']);
$country=mysqli_real_escape_string($con,$_POST['country']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);

 $d_o_b=mysqli_real_escape_string($con,$_POST['date_of_birth']);
      $p_o=mysqli_real_escape_string($con,$_POST['p_o']);
   
   $errormsg="Before Query";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";  
 
  $add=mysqli_query($con,"INSERT INTO users (f_name,l_name,email,password,u_id,user_name,address,city,u_type,country,gender,date_of_birth,p_o)VALUES($fname,$lname,$email,$password,$uid,$uname,$address,$city,$utype,$country,$gender,$d_o_b,$p_o)") or die("problem in query");
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