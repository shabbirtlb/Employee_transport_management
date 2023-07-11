<?php
session_start();
include ('conn.php');
            $username=$_SESSION['username'];
            $query1="select * from user where username ='$username'";
            $res1=mysqli_query($conn,$query1);
            $row=mysqli_fetch_assoc($res1);
            $company=$row['uid'];
            echo $company;
            $query2="select * from user where uid ='$company'";
            $res2=mysqli_query($conn,$query2);
            $rows=mysqli_fetch_assoc($res2);
?>