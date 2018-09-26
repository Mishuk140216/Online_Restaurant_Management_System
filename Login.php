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

 <form action="Login.php" method="POST">

            
            <div id="Nevigation">
                          <ul>
                          <li><a class="active" href="Home.php">Home</a></li>
                          <li class="dropdown">
                        <a href="#" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                          <a href="B_Menu.php">Breakfast</a>
                          <a href="L_Menu.php">Lunch</a>
                          <a href="D_Menu.php">Dinner</a>
                          <a href="O_Menu.php">Others</a>
                        </div>
                      </li>
                          <li><a href="News">News</a></li>
                          <li><a href="Contact">Contact</a></li>
                          <li><a href="About.php">About</a></li>
                           <li class="dropdown">
                                        <a href="#" class="dropbtn">Login</a>
                                        <div class="dropdown-content">
                                          <a href="Login.php">Admin</a>
                                          <a href="Login.php">Chef</a>
                                          <a href="Login.php">Customer</a>
                                          <a href="Login.php">Others</a>
                                        </div>
                                      </li>
                           <li><a href="Map.php">Location</a></li>
                     </ul>

                    </div>   
         

<div id="container_b_login">
       

        <div id="menu">   
             <ul>
                      <li><a href="Home.php">Home</a></li>
                     <li class="dropdown">
                        <a href="" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                          <a href="B_Menu.php">Breakfast</a>
                          <a href="L_Menu">Lunch</a>
                          <a href="D_Menu">Dinner</a>
                          <a href="O_Menu">Others</a>
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
                    </ul>
              </div>



  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1> &nbsp &nbsp Login</h1>
      </div>

                      <form action="Login.php" method="POST">

                <h3 align="center">USER__ID  <input type="text" name="user_id" id ="user_id" size="40px*20px" placeholder="type userid" required /></h3><br>
                <h3 align="center">PASSWORD <input type="Password" name="password" id="password" size="40px"  placeholder="password" required/></h3><br><br>
                 
                <p align="center">

                <input type="submit" name="Login" value=" Login" align="center" ></font><br><br>

       
        <a class="login" href="#">Lost your password?</a>
      </div>
    </div>
  </div>


        </div>







</body>

</html>
<?php

$con=mysqli_connect("localhost","root",'');
mysqli_select_db($con,"restaurant");

$userid=$_POST['user_id'];
$password=$_POST['password'];

$userid=stripcslashes($userid);
$password=stripcslashes($password);
//$encrypted_password=password_hash($password,PASSWORD_DEFAULT);>

$userid=mysqli_real_escape_string($con,$userid);
$password=mysqli_real_escape_string($con,$password);



$query=mysqli_query($con, "SELECT * FROM users WHERE u_id = '" . $userid. "' and password = '" .  $password . "'");
  // 'SELECT * FROM users WHERE username = "'.$username.'" AND password = "'.$password.'" ');

 $row=mysqli_num_rows($query);
$data=mysqli_fetch_array($query);
$type=$data['u_type'];
$user=$data['u_id'];
//$hash_pass=$data['encrypted_password'];

    
if($data['u_id']==$userid && $data['password']==$password)
{
  $_SESSION['u_id']=$user_id;
if($type=='Admin')
{ //window.open("http://www.w3schools.com");
echo'<script language="javascript">';
echo'alert("sucessfully login as Admin ")';
echo '</script>';
echo"<script>window.open('Admin/Admin.php','_self')</script>";

}
else if($type=='Customer')
{
  echo'<script language="javascript">';
echo'alert("sucessfully login as Customer ")';
echo '</script>';
echo"<script>window.open('Customer/Customer.php','_self')</script>";


}
else if($type=='Others')
{
  echo'<script language="javascript">';
echo'alert("sucessfully login as Customer ")';
echo '</script>';
echo"<script>window.open('Home.php','_self')</script>";


}
}

else
{
echo'<script language="javascript">';
echo'alert(" Login Failed ")';
echo '</script>';
}

mysqli_close($con);


?>
