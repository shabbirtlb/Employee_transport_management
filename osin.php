<?php
if(isset($_POST['submit'])){
    include 'conn.php';
    $un=$_POST['uname'];
    $cn=$_POST['cname'];
    $pass=$_POST['password'];
    $addr=$_POST['addr'];
    $signup_query="INSERT INTO `user`(`Username`,`Password`, `Type`,`Address`,`compname`) VALUES ('$un','$pass','Company Admin','$addr','$cn')";
    $signup_result=mysqli_query($conn,$signup_query);
        echo('<script>alert("Signup success")</script>');
        echo('<script>window.location="login.html"</script>');
    }
else{
    echo('Wrong Route Buddy');
}
?>
