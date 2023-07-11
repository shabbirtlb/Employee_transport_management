<?php
include ('conn.php');
session_start();
if(isset($_POST['submit'])){
    $type=$_POST['users'];
    $username=$_POST['uname'];
    $password=$_POST['password'];
    $query1="select * from user where username ='$username' and password ='$password'";
    $res1=mysqli_query($conn,$query1);
    if (mysqli_num_rows($res1)!=0){
        $data=mysqli_fetch_assoc($res1);
        echo('<script>alert("login success")</script>');
        $_SESSION['username']=$username;
        if($type=='Company'){
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
    else{
        echo('<script>alert("Incorrect username or password")</script>');
        echo('<script>window.location="login.html"</script>');
    }
    }
?>