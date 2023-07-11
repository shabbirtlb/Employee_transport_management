<?php
session_start();
include ('conn.php');
    $d=$_POST['d'];
    $sql = "UPDATE `user` SET `compname`='Microsoft' WHERE Username = '$d';";
    $result=mysqli_query($conn,$sql);
    echo('<script>window.location="m.php"</script>');
?>