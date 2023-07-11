<?php
if(isset($_POST['submit'])){
    include 'conn.php';
    $un=$_POST['name'];
    $pass=$_POST['pass'];
    $addr=$_POST['addr'];
    $signup_query="INSERT INTO `user`(`Username`,`Password`, `Type`,`Address`) VALUES ('$un','$pass','Mechanic','$addr')";
    $signup_result=mysqli_query($conn,$signup_query);
        echo('<script>alert("Signup success")</script>');
        echo('<script>window.location="login.html"</script>');
    }
else{
    echo('Wrong Route Buddy');
}
?>
