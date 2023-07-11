<?php
if(isset($_POST['submit'])){
    include 'conn.php';
    $d=$_POST['dname'];
    $v=$_POST['vehicle'];
    $n=$_POST['nplat'];
    $p1='Kewin';
    $addr1=$_POST['paddr'];
    $des=$_POST['dest'];
    $da=$_POST['date'];
    $t=$_POST['time'];
    $query1="INSERT INTO `schedules` (`Dname`,`Vehicle`, `Numplate`,`Date`,`Time`,`Passenger`,`Paddr`,`Dest`) VALUES ('$d','$v','$n','$da','$t','$p1','$addr1','$des')";
    $result1=mysqli_query($conn,$query1);
        echo('<script>window.location="es.php"</script>');
    }
else{
    echo('Wrong Route Buddy');
}
?>