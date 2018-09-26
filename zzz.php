<!DOCTYPE html>
<html>
<head>
<link href="d.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h2>Animated Modal with Header and Footer</h2>



 <form action="zzz.php" method="POST" enctype="multipart/form-data" id="form_addMenu">


<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->


<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">

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

      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
<?php
ob_start();
 include("connect.php");
$con=new mysqli('localhost','root','');//default 
 mysqli_select_db($con,"register");
  if(isset($_POST['Insert'])!='')
  {
  $id=$_POST['id'];
  $title=$_POST['title'];

  $date=$_POST['item_date'];
  $type=$_POST['type'];
    
  //$type=$_POST['type'];
 // if($id==''||$title==''||$image==''||$date==''||$type=='')
   //{ echo'<script language="javascript">';
//echo'alert("wrong entry ")';
//echo '</script>';
//header("refresh:.5;url=EmployeeInfo.php");

 //}
 //else {
  $errormsg="beforequery";
      echo"<script type='text/javascript'>alter('errormsg');</script>";
  $add=mysqli_query($con,"INSERT INTO menu (f_id,f_title,date(format),item_type)VALUES('$id','$title','$type','$date','$type')");

   
      $errormsg="Afterquery";
      echo"<script type='text/javascript'>alter('errormsg');</script>";
  if($add)
  {
      $msg_success="Successfully added!!";
      echo "<script type='text/javascript'>alert('$msg_success');</script>";
      header("refresh:.5;url=EmployeeInfo.php");
  }
  else
  {
     $errormsg="Something went wrong, Try again";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
  //}
  }
}
?>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
