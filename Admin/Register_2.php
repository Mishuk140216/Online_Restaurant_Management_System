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
                          <li><a  href="Admin.php">LogOut</a></li>
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
                           
                           <li><a href="Admin\Map.php">Location</a></li>
                           <li><a href="Register.php">Register</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#Menu_Modal">Add Menu</a></li>
                           <li><a href="#" data-toggle="modal" data-target="#News_Modal">Add News</a></li>
                            <li class="dropdown">
                                        <a class="active" href="#" class="dropbtn">Detils</a>
                                        <div class="dropdown-content">
                                          <a href="details.php">Menu</a>
                                          <a href="stock.php">Stock</a>
                                         
                                        </div>
                                      </li>

                     </ul>

                    </div>   
         
         

<div id="container_b_regi">
        <div id="menu">   
 <ul>
                      <li><a href="Admin.php">Home</a></li>
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
        

         <form action="save_item.php" method="GET">
<article class="article">


<div id=article> 

<p align="center">


<label for="prodname"> Product_name:&nbsp</label>
<input name="product_name" type="text" /><br><br>

<label for="quantity"> Quantity:&nbsp &nbsp &nbsp  &nbsp&nbsp &nbsp</label>
<input name="quantity"  type="text" /><br><br>

<label for="price">  Price:   &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp</label>
<input name="price"  type="text" /><br><br>

<label for="purchase from"> Purchase From:  &nbsp</label>
<input name="purchase_from"  type="text" /><br><br><br>

<label for="purchase date"> Purchase Date: &nbsp </label>
<input name="purchase_date"  type="Date" /><br><br><br>


 
<input type="submit" name="save" value="Save" style="font-size:12pt;color:white;background-color: MediumSeaGreen;border:2px solid #336600;padding:2px 15px;cursor:pointer;<font color='"Red"'></font>

</div>
</div>

</article>
</form>

            
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