<?php
if(isset($_POST['submit'])){
    include 'conn.php';
    $un=$_POST['uname'];
    $vc=$_POST['vehicle'];
    $pass=$_POST['password'];
    $nplat=$_POST['numplate'];
    $addr=$_POST['addr'];
    $signup_query="INSERT INTO `user`(`Username`,`Password`, `Type`,`Address`,`Vehicle`,`NumPlate`) VALUES ('$un','$pass','Driver','$addr','$vc','$nplat')";
    $signup_result=mysqli_query($conn,$signup_query);   
        echo('<script>alert("Signup success")</script>');
        echo('<script>window.location="login.html"</script>');
    }
else{   
    echo('Wrong Route Buddy');
}
?>