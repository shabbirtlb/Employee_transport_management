<?php

session_start();
include ('conn.php');
if(isset($_POST['submit'])){
    $username=$_SESSION['username'];
    $n=$_POST['Nplat'];
    echo $progress=$_POST['Prog'];   
    $sql = "UPDATE `repairs` SET `Progress`='$progress' WHERE Mechanic = '$username' AND Nplate ='$n';";
    $result=mysqli_query($conn,$sql);
    echo('<script>window.location="g.php"</script>');

    }   
?>