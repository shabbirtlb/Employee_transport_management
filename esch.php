<?php
session_start();
include ('conn.php');
$username=$_SESSION['username'];
$query1="select * from user where username ='$username'";
$res1=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($res1);

?>
<!DOCTYPE html>
<html lang ="en" and dir="ltr" >
    <head>
        <meta charset="utf-8">
        <title>Employee Scheduling</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style>
body{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-size: cover;
    background-repeat: no-repeat;
}
.box{
        
        width:380px;
        padding: 20px;
        position: absolute;   
        top: 95%;
        left:50%;
        transform:translate(-50%,-50%);
        background: rgba(0, 0, 0, 0.8);
        text-align: center;
    }

.box input[type="text"] ,.box input[type="password"]
{
border:0;
background: none;
display: block;
margin:5px auto;
text-align:center;
border:3px solid rgba(8, 238, 161, 0.685);
padding:14px 5px; 
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
    margin:5px auto;
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
select{
    border:0;
    background-color: rgba(0, 0, 0, 0.5);
    color:antiquewhite;
    height:32px;
    border:1px solid #d8d8d8;
    width:150px;
}
</style>
    <body>
        <body background="photo-1465447142348-e9952c393450.jpg">
            <nav class="navbar navbar-light" style="background-color: rgb(0, 0, 0,0.5);">
                <a class="navbar-brand mr-sm-4" href="#">
                  <img src="Screenshot (434).png" style="height: 90px; width: 150px;" alt="Site logo">
                  
              </a>
                  <center><h1 style="color:rgb(25, 233, 222);font-size: 50px;"><b>Schedule Trip</b></h1></center>
                  <div class="d-flex justify-content-end">  
                    <a href="index.html" class="btn btn-outline-danger" style="margin-right:40px; border:0px;color: aquamarine;">HOME</a>
                    <a href="esin.html" class="btn btn-outline-danger" style="margin-right:40px; border:0px;color: aquamarine;">SIGN UP </a>
                    <a href="aboutus.html"class="btn btn-outline-danger" style="border:0px;color: aquamarine;">CONTACT US</a>
          
                </div>
                </nav>
                <div class="card" style="background-color:#3d3d3d60;color:#ffffff;margin-bottom: 5px;border-radius: 15px;">

  <h2>Drivers list :</h2>
  <div class="grid-container">
        <div class="row">
        <?php

$query2="select * from user where Type like'Driver'";
$res2=mysqli_query($conn,$query2);
  while( $row1=mysqli_fetch_assoc($res2)) {
			?>

       <div class="col-lg-3 col-md-6">
            <div class="card hovercard" style="background-color:#3d3d3d90;color:#ffffff;width:380px;">
                <div class="card-body info">
                    <div class="title">
                        <h4>Name: <?php echo $row1['Username']; ?></h4>
                        <h4>Address: <?php echo $row1['Address']; ?></h4>
                        <h4>Vehicle: <?php echo $row1['Vehicle']; ?></h4>
                        <h4>Number plate: <?php echo $row1['Numplate']; ?></h4>

              </div>			
              </div>
              </div>
              </div>
			<?php } ?>
</div>
  </div>
  </div>
  </div>
                <div class="container ">
                    <div class="row">    
          <center><form class="box" method="POST" action="esche.php">    
        <input type ="text"  placeholder="Enter Dname" name="dname" ?>
        <input type ="text"  placeholder="Enter Vehicle.." name="vehicle" >
        <input type ="text"  placeholder="Enter Numberplate.." name="nplat" >
        <input type ="text" placeholder="Enter Pickup Location" name="paddr">
        <input type ="text" placeholder="Enter Destination" name="dest">
        <h4 style="color:white">Day:</h4>
        <input type="Date" name="date"><br>
        <h4 style="color:white">Time:</h4>
        <input type="Time" name="time">
        <button type="submit" name="submit" >Schedule</button>

        </form> </center>
        </div>
        </div>
    </body>
</html>