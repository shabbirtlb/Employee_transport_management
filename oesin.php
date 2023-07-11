<?php
include ('conn.php');
session_start();
if(isset($_POST['submit'])){
    $username=$_SESSION['username'];
    $query1="select * from user where username ='$username'";
    $res1=mysqli_query($conn,$query1);
    $row=mysqli_fetch_assoc($res1); 
    $username=$_POST['emp'];
    $password=$_POST['pass'];
    $t='Employee';
    $c=$row['compname'];
    $query2="INSERT INTO `user`(`Username`, `Password`, `Type`,`compname`) VALUES ('$username','$password','$t','$c')";
    $res1=mysqli_query($conn,$query2);
    echo('<script>window.location="Oe.php"</script>');
}
?>