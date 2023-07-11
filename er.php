<?php
session_start();
include ('conn.php');
$username=$_SESSION['username'];
$query1="select * from user where username ='$username'";
$res1=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($res1);
$company=$row['compname'];
$phone=$row['Phone'];
?>
<!DOCTYPE html>
<html lang ="en" and dir="ltr" >
    <head>
        <meta charset="utf-8">
        <title>Employee Repairs</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}   
body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-size: cover;
    background-repeat: no-repeat;
} 
table, th,td,tr{
  border: 2px solid rgb(133, 121, 121);
  border-collapse: collapse;
  text-align:center;
  height:50px;
}
.grid-container {
  display: grid;
  grid-column-gap: 50px;
  grid-template-columns: 1fr 1fr;
}
/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0; 
  width: 200px;
  background-color: #212121;
  position: fixed;
  height: 110%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: #aaaaaa;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #3d3d3d;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  color: #ffffff;
  background-color: #18181802;
  margin-left: 200px;
  padding: 1px 16px;
  height: 100%;
}
.box input[type="text"] ,.box input[type="password"]
{
border:0;
background: none;
display: block;
margin:20px auto;
text-align:center;
border:3px solid rgba(8, 238, 161, 0.685);
padding:14px 10px; 
width:220px;
outline: none;
color:white;
border-radius: 24px;
transition: 0.25px;
}
.box input[type="text"]:focus ,.box input[type="password"]:focus
{
    width: 270px;
    border-color: rgb(241, 107, 17);
}
.box button[type="submit"]  
{
    border:0;
    background: none;
    display: block;
    margin:20px auto;
    text-align:center;
    border:3px solid rgba(10, 105, 15, 0.685);
    padding:14px 35px; 
    outline: none;
    color:white;
    border-radius: 24px;
    transition: 0.25px; 
    cursor: pointer;
}
.box input[type="submit"]:hover
{
    background:rgba(10, 105, 15, 0.685);
}
/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;  
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>
    <body>
      <body background="photo-1500632907344-a073709b2448.jpg">  
            <nav class="navbar navbar-light" style="background-color: #181818;color: #aaaaaa;">
                <a class="navbar-brand mr-sm-4" href="#" >
                  <img src="Screenshot (434).png" style="height: 90px; width: 150px;" alt="Site logo">
                    
              </a>  <center><h1 style="font-size: 50px;"><b><?php  echo $_SESSION['username'] ?>'s Dashboard</b></h1></center>
              <div class="d-flex justify-content-end">
                <a href="index.html" class="btn btn-outline-danger"  style="margin-right:40px; border:0px;color: aquamarine;">HOME</a>
                <a href="login.html" class="btn btn-outline-danger" style="margin-right:40px; border:0px;color: aquamarine;">LOG OUT </a>
                <a href="aboutus.html"class="btn btn-outline-danger" style="border:0px;color: aquamarine;">CONTACT US</a>
      
            </div>
              </nav>
              <!-- The sidebar -->
<div class="sidebar">
    <a href="Ehome.php">Home</a>
    <a  href="es.php">My schedules</a>
    <a class="active" href="er.php">Repairs</a>
  </div>
  <div class="content">
  <div class="card" style="background-color:#3d3d3d60;color:#ffffff;margin-bottom: 5px;border-radius: 15px;">
  <form class="box" action="hire.php" method="POST">
  <input type ="text" placeholder="Enter Mechanic name.." name="mname" >
  <input type ="text" placeholder="Enter Issue.." name="issue">
  <input type ="text" placeholder="Enter Vehicle.." name="veh">
  <input type ="text" placeholder="Enter Number Plate" name="num">
  <button type="submit">Hire</button>
</form>
</div>
  <div class="card" style="background-color:#3d3d3d60;color:#ffffff;margin-bottom: 5px;border-radius: 15px;">

<h2>Vehicles list :</h2>
<div class="grid-container">
      <div class="row">
      <?php

$query2="select * from repairs where Own ='$username' ";
$res2=mysqli_query($conn,$query2);
while( $row1=mysqli_fetch_assoc($res2)) {
          ?>

     <div class="col-lg-3 col-md-6">
          <form class="box" style="background-color:#3d3d3d;color:#ffffff;width:480px;" action="g_back.php">
              <div class="cardheader">               
               </div>
              <div class="card-body info">
                  <div class="title">
                      <h4 style="color:white"><font style="color:grey">Vehicle: </font><?php echo $row1['Vehicle'] ?></h4>
                      <h4 style="color:white"><font style="color:grey">Numberplate: </font><?php echo $row1['Nplate'] ?></h4>
                      <h4 style="color:white"><font style="color:grey"> Owner: </font><?php echo $row1['Own'] ?></h4>
                      <h4 style="color:white"><font style="color:grey">Progress: </font><?php echo $row1['Progress'] ?> </h4>
</div>
</div>


          </div>
          <?php }?>

</div>
</div>
</div>
<div class="card" style="background-color:#3d3d3d60;color:#ffffff;margin-bottom: 5px;border-radius: 15px;">
<h2>Mechanics list :</h2>
  <div class="grid-container">
        <div class="row">
        <?php

$query2="select * from user where Type like'Mechanic'";
$res2=mysqli_query($conn,$query2);
  while( $row1=mysqli_fetch_assoc($res2)) {
			?>

       <div class="col-lg-3 col-md-6">
            <div class="card" style="background-color:#3d3d3d;color:#ffffff;width:380px;">

                <div class="card-body info">
                    <div class="title">
                        <h4>Name: <?php echo $row1['Username']; ?></h4>
                        <h4>Address: <?php echo $row1['Address']; ?></h4>
            </div>
            </div>			
            </div>
            </div>
			<?php } ?>
</div>
  </div>
  </div>
</div>
  </div>    
</body>
</html>