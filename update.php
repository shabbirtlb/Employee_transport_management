<?php

session_start();
include ('conn.php');
if(isset($_POST['submit'])){
    $username=$_SESSION['username'];
    $query1="select * from user where username ='$username'";
    $res1=mysqli_query($conn,$query1);
    $row=mysqli_fetch_assoc($res1);
    $type=$row['Type'];
    $password=$_POST['password'];   
    $v=$_POST['vehicle'];
    $n=$_POST['nplat'];
    $addr=$_POST['addr'];
    $p=$_POST['phone'];
    $e=$_POST['email'];
    $sql = "UPDATE `user` SET `Password`='$password',`Vehicle`='$v',`Numplate`='$n',`Address`='$addr',`Phone`=$p,`email`='$e' WHERE Username = '$username';";
    $result=mysqli_query($conn,$sql);
    if($type=='Company Admin'){
        echo('<script>window.location="Ohome.php"</script>');
    }
    if($type=='Employee'){
        echo('<script>window.location="Ehome.php"</script>');
    }
    if($type=='Driver'){
        echo('<script>window.location="dhome.php"</script>');
    }
    if($type=='Mechanic'){
        echo('<script>window.location="Mhome.php"</script>');
    }

    }   
?>