<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=5.0">

<title>CITY LIGHT CAFE</title>

<meta name="keywords" content="" />

<meta name="description" content="" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  


<link href="n.css" rel="stylesheet" type="text/css" />
</head>


































<body bgcolor="111">

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
         

<div id="container_b">

<div id="imshow">
        <div id="menu">   

                          <ul>
                      <li><a href="Home.php">LogOUt</a></li>
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
                         

                             <li class="dropdown">
                                        <a href="" class="dropbtn">Location</a>
                                        <div class="dropdown-content">
                                          <a href="Admin\Map.php">Map</a>
                                          
                                        </div>
                                      </li>
                                      <li><a href="Register.php">Register</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#News_Modal">Add News</a></li>
                    </ul>
            </div>


 <img class="mySlides " src="images/a1.jpg" style="width:100%">
  <img class="mySlides" src="images/a2.jpg" style="width:100%">
  <img class="mySlides " src="images/a1.jpg" style="width:100%">

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel,2800);    
}
</script>
            

            </div>
            </div>


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

