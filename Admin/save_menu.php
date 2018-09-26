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
<center>

 <table>
                              <tr>
                               <td colspan="2" align="center">
                                 </td>
                              </tr>

                               <tr>
                              
                                <td align="right">ID:</td>
                                
                              </tr>


                              <tr>
                                 <td></td>
                                <td><input type="text" name="n_f_id" required></td>
                              </tr>


                               <tr>
                                 <td align="right">Title</td>  
                             </tr>

                             <tr>
                                   <td></td>
                                <td><input type="text" name="n_f_title" placeholder="food item title here...!" required></td>
                             </tr>
                                
                              <tr>
                                <td align="right">Image:</td>
                             </tr>

                              <tr>
                                <td></td>
                                <td><input type="file" name="n_f_image" ></td>
                             </tr>

                             <tr>
                                <td align="right">Description:</td>
                             </tr>

                              <tr>
                                <td></td>
                                <td><textarea name="text" cols="40" rows="4" placeholder="About image....." required></textarea></td>
                             </tr>


                               <tr>
                                 <td align="right">Date :</td>
                              </tr>

                              <tr>
                                 <td></td>
                                 <td>
                                  <input type="date" name="n_date" placeholder="e.g.:DD/MM/YYYY" required></td>
                              </tr>

                              <tr>
                                 <td align="right">Item type:</td>
                              </tr>

                              <tr>
                               <td></td>
                                <td id="type"><select name="n_item_type" id="select">
                                  
                                  <option name="breakfasr" required >Breakfast</option>
                                  <option name="lunch" required >Lunch</option>
                                  <option name="dinner" required >Dinner</option>
                                  <option name="others" required >Others</option>
                                  </select></td>
                              </tr>
                             
                              <tr><tr></tr><tr></tr><tr></tr>
                                <td align="center" colspan="6">
                                  <button type="submit" name="Insert" id="btn1">Add</button>
                               
                                  <button type="submit" name="Edit" id="btn1">Edit!</button>
                                </td>
                              

                              </tr>
                    </table>

 

</div>
</div>

</article>
</center>
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