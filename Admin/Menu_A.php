<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CITY LIGHT CAFE</title>

<meta name="keywords" content="" />

<meta name="description" content="" />

<link href="n_a.css" rel="stylesheet" type="text/css" />
</head>


<div id="container_ad">  
            
            <div id="Nevigation">
                        <ul>
                      <li><a href="Home_A.php">Home</a></li>
                     <li class="dropdown">
                        <a href="" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                          <a href="Menu.php">Breakfast</a>
                          <a href="Menu.php">Lunch</a>
                          <a href="Menu.php">Dinner</a>
                          <a href="Menu.php">Others</a>
                        </div>
                      </li>

                      <li><a href="Menu_A.php">Add menu</a></li>
                       <li><a href="News.php">News</a></li>
                       <li><a href="News.php">Add News</a></li>
                      <li><a href="Contact.php">Contact</a></li>
                      <li><a href="About.php">About</a></li>
                                     
                           

                             <li class="dropdown">
                                        <a href="#" class="dropbtn">Location</a>
                                        <div class="dropdown-content">
                                          <a href="Map.php">Map</a>
                                          
                                        </div>
                                      </li>
                    </ul>>

                    </div>   
         

<div id="container_b_addMenu">
        <div id="menu">   
 <ul>
                      <li><a href="Home_A.php">Home</a></li>
                     <li class="dropdown">
                        <a href="" class="dropbtn">Menus</a>
                        <div class="dropdown-content">
                          <a href="Menu.php">Breakfast</a>
                          <a href="Menu">Lunch</a>
                          <a href="Menu">Dinner</a>
                          <a href="Menu">Others</a>
                        </div>
                      </li>

                      <li><a href="Menu_A.php">Add menu</a></li>
                       <li><a href="News.php">News</a></li>
                       <li><a href="News.php">Add News</a></li>
                          <li><a href="Contact.php">Contact</a></li>
                          <li><a href="About.php">About</a></li>
                                       
                           <li><a href="Map.php">Location</a></li>
                           <li><a href="Detail.php">Details</a></li>
                    </ul>
            </div>



  <div class="body">
        <form action="Menu_A.php" method="post" enctype="multipart/form-data" id="form_addMenu">

          <table>
            <tr>
             
              <td colspan="1" align="center">
              <h1> &nbsp &nbsp   &nbsp &nbsp &nbsp  !ADD MENU! </h1>
              </td>
            </tr>
            <tr>

           
              <td align="right">ID:</td>
              <td><input type="text" name="f_id" required></td>
              </tr>

               <tr>
              <td align="right">Title</td>
              <td><input type="text" name="f_title" placeholder="food item title here...!" required></td>
       
            </tr>
              
            <tr>
            <tr></tr><tr></tr>

              <td align="right">Image:</td>
              <td><input type="file" name="img_file" ></td>
              
            </tr>
            <tr>
              <td align="right">Description:</td>
              <td><textarea name="text" cols="40" rows="4" placeholder="About image....." required></textarea></td>
              
            </tr>
            <tr>
                    <td align="right">Date :</td>
              <td>
                <input type="text" name="date" placeholder="e.g.:DD/MM/YYYY" required></td>
              
            </tr>
            <tr>
              <td align="right">City</td>
              <td><input type="text" name="city" placeholder="City!" required></td>
              
            </tr>
            <tr>
              <td align="right">Item type:</td>
              <td id="type"><select name="item_type" id="select">
                
                <option name="breakfasr" required >Breakfast</option>
                <option name="lunch" required >Lunch</option>
                <option name="dinner" required >Dinner</option>
                <option name="others" required >Others</option>
                </select></td>
            </tr>
           
            <tr><tr></tr><tr></tr><tr></tr>
              <td align="center" colspan="6">
                <button type="submit" name="register" id="btn1">Add</button>
             
                <button type="submit" name="register" id="btn1">Edit!</button>
              </td>
            

            </tr>
          </table>
</form>

            </div>








</div>





    
        











</body>

</html>