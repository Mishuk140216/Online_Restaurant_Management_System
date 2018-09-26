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
                          <li><a  href="logout.php">LogOut</a></li>
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
                                <li><a href="save_item.php">Add Stock</a></li>
                           
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
         








<div id="container_b_n1">
        <div id="menu">   
 <ul>
                      <li><a href="Admin.php">Home</a></li>
                     <li class="dropdown">
                        <a href="" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                          <a href="Menu.php">Breakfast</a>
                          <a href="Menu">Lunch</a>
                          <a href="Menu">Dinner</a>
                          <a href="Menu">Others</a>
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
                    </ul>
            </div>


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

            
            </div>





</div>













</body>

</html>

<?php

    if (isset($_GET['save'])){
    // Prepare variables for database connection
    $dbusername = "root";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "";  // enter database password, I used "arduinotest" in step 2.2
    $server = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"
    $My_db = "restaurant";
    // Connect to your database
    $dbconnect = mysqli_connect($server, $dbusername, $dbpassword,$My_db);
    // Prepare the SQL statement
    $sql = "INSERT INTO stock (product_name, quantity, price, purchase_from, purchase_date) VALUES ('".$_GET["product_name"]."','".$_GET["quantity"]."','".$_GET["price"]."','".$_GET["purchase_from"]."','".$_GET["purchase_date"]."')";    
    // Execute SQL statement
    mysqli_query($dbconnect,$sql) or die ("Error in sql query");
  
    $errormsg="Successful";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
   } 
?>