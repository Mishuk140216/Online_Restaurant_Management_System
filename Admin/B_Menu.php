<!DOCTYPE>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="n.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
<div class="container">

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
       <form id="show_menu  " action="B_menu.php" method="POST">
       
        
<div class="body">
<div id="left">
<br />
<?php
  include ("connect.php");
  $query = "SELECT*from menu WHERE item_type='Breakfast' order by 1 DESC LIMIT 0,4";
  $run = mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($run)){
  
   $id = $row['f_id'];
  $title = $row['f_title'];
  $image = $row['f_image'];
  $date = date('Y.m.d');
 
  $desc = substr($row['description'],0,300);
?>
<h2><a href="recipes.php?id=<?php echo $id;?>"><?php echo $title; ?></a></h2>
 <input type="submit" name="order" value="Order"  >
  <input type="text" name="txt" placeholder="quantity" >
<br />
<center>
<img src="images/<?php echo $image;?>"/>
</center>
<br />
<p align="justify"><?php echo $desc; ?></p>
<p>Published On:&nbsp; &nbsp;<b><?php echo $date; ?></b></p>

<p align="right"><a href="Menu.php?id=<?php echo $id; ?>">Read More</a></p>
<?php } ?>
</div>



<div id="right">
<center>
					<h2>Recent Post</h2>
</center>
					<br />
<?php
	include ("connect.php");
	$query = "SELECT*from menu WHERE item_type='Breakfast' order by 1 DESC LIMIT 0,4";
	$run = mysqli_query($con,$query);
	 while($row=mysqli_fetch_assoc($run)){
  $item_type=$row['item_type'];
  if($item_type=='Breakfast'){
  $bid = $row['f_id'];
  $btitle = $row['f_title'];
  $bimage = $row['f_image'];
}
  
?>
<center>
						<a href="index.php?id=<?php echo $bid; ?>"><div class="left"><img src="images/<?php echo $bimage; ?>"></div></a>
						<a href="index.php?id=<?php echo $bid; ?>"><h3><?php echo $btitle;?></h3></a>
</center>
<br />
<?php } ?>
</div>
</div>
<div class="footer">
		<div>
			
		</div>
</div>
</div>
 </form>    
</body>
</html>
<?php
if(isset($_POST['order']))

{

session_start();
if(!isset($_SESSION['u_id'])){
  header("location:Login.php");
  
}
}
?>
