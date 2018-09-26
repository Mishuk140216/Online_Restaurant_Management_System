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
                          <li><a  href="Admin.php">Home</a></li>
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
         
<div id="container_b_detail">
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
                                        <a href="#" class="dropbtn">Login</a>
                                        <div class="dropdown-content">
                                          <a href="Login.php">Admin</a>
                                          <a href="">Chef</a>
                                          <a href="">Customer</a>
                                          <a href="">Others</a>
                                        </div>
                                      </li>
                           

                             <li class="dropdown">
                                        <a href="" class="dropbtn">Location</a>
                                        <div class="dropdown-content">
                                          <a href="Map.php">Map</a>
                                          
                                        </div>
                                      </li>
                                      <li><a href="Register.php">Register</a></li>
                    </ul>
            </div>
            </div>


 <form action="Admin\detail.php" method="post" enctype="multipart/form-data" id="show detail">
<article class="article">
<div style="display: inline-block;padding:20px;margin-top:30px;background-color:#FFFbbb;margin-left:125px; height:394px; width: 800px;">


<?php
include("connect.php");
$con=new mysqli('localhost','root','');//default 
 mysqli_select_db($con,"restaurant");
if ($con->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT product_name, quantity,purchase_date,price FROM stock";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

            echo "<table><tr><th>Product_Name</th><th>Quantity</th><th>purchase_date</th><th>Price</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["product_name"]. "</td><td>" . $row["quantity"]. "</td><td> " . $row["purchase_date"]. "</td><td> " . $row["price"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$con->close();
?> 

</article>
</div>


</form>




<div id="content_bg">
      <div id="content_2">
        <h2> CITY LIGHT CAFE RESTAURANT</h2>

      </div>
        </div>
    <div id="container_end">
  </div>
</div>


</div>



    
        











</body>

</html>