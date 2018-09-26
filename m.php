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
                      <li><a href="Home.php">Home</a></li>
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
        
<div class="body">
<div id="left">
<br />
<?php
	include ("connect.php");
	$query = "SELECT*from menu WHERE item_type='lunch' order by 1 DESC LIMIT 0,4";
	$run = mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($run)){
	
	 $id = $row['f_id'];
  $title = $row['f_title'];
  $image = $row['f_image'];
  $date = date('Y.m.d');
 
  $desc = substr($row['description'],0,300);
?>
<h2><a href="recipes.php?id=<?php echo $id;?>"><?php echo $title; ?></a></h2>
<br />
<center>
<img src="images/<?php echo $image;?>"/>
</center>
<br />
<p align="justify"><?php echo $desc; ?></p>
<p>Published On:&nbsp; &nbsp;<b><?php echo $date; ?></b></p>

<p align="right"><a href="recipes.php?id=<?php echo $id; ?>">Read More</a></p>
<?php } ?>
</div>
<div id="right">
<center>
					<h2>Recent Post</h2>
</center>
					<br />
<?php
	include ("connect.php");
	$query = "SELECT*from menu WHERE item_type='lunch' order by 1 DESC LIMIT 0,4";
	$run = mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($run)){
	
	 $id = $row['f_id'];
  $title = $row['f_title'];
  $image = $row['f_image'];
  
?>
<center>
						<a href="index.php?id=<?php echo $id; ?>"><div class="left"><img src="images/<?php echo $image; ?>"></div></a>
						<a href="index.php?id=<?php echo $id; ?>"><h3><?php echo $title;?></h3></a>
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
</body>
</html>