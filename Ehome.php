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
        <title>Employee Dashboard</title>
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
    background-size: 100%;
    background-repeat: no-repeat;
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
    <a class="active" href="Ehome.php">Home</a>
    <a href="es.php">My schedules</a>
    <a href="er.php">Repairs</a>
  </div>
  
  <!-- Page content -->
  <div class="content">
   <div class="card" style="background-color:#3d3d3d60;color:#ffffff;margin-bottom: 5px;border-radius: 15px;">
        <p><font size= 5>Welcome, <?php echo $_SESSION['username'] ?></font></p>
        <p><font size= 5>Email Id : <?php echo $row['email']?></p>
        <p><font size= 5>Phone :<?php echo $row['Phone']?></p>
        <p><font size= 5>Address: <?php echo $row['Address']?></p>
        <a href="updpro.php"> <button type="submit" class="btn btn-default" style="height: 50px;width: 250px;background-color: rgb(10, 165, 212);color:white;"><b>Update Profile.. </b></button> </a>     

</div>

  </div>    
</body>
</html>
