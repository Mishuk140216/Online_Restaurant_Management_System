<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CITY LIGHT CAFE</title>

<meta name="keywords" content="" />

<meta name="description" content="" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="n.css" rel="stylesheet" type="text/css" />

</head>


<div id="container_a">  
            
            <div id="Nevigation">
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
                                        <a href="#" class="dropbtn">Location</a>
                                        <div class="dropdown-content">
                                          <a href="Map.php">Map</a>
                                          
                                        </div>
                                      </li>
                    </ul>>

                    </div>   
         

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











<div class="body">
<div id="left">
<br />
<?php
  include ("connect.php");
  mysqli_select_db($con,"restaurant");

  $query = "select * from menu order by 1 DESC LIMIT 0,4";
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
  $query = "select * from menu order by 1 DESC LIMIT 0,5";
  $run = mysqli_query($con,$query);
  while($row=mysqli_fetch_array($run)){
  
  $id = $row['f_id'];
  $title = $row['f_title'];
  $image = $row['f_image'];
?>
<center>
            <a href="Menu.php?id=<?php echo $id; ?>"><div class="left"><img src="images/<?php echo $image; ?>"></div></a>
            <a href="menu.php?id=<?php echo $id; ?>"><h3><?php echo $title;?></h3></a>
</center>
<br />
<?php } ?>
</div>
</div>
<div class="footer">
    <div>
      <p>
        &copy; Copyright By Asad Khan 2016
      </p>
    </div>
</div>
</div>


    
      













</body>

</html>