<?php
if(isset($_POST['submit'])){
    include 'conn.php';
    $d=$_POST['dname'];
    $v=$_POST['vehicle'];
    $n=$_POST['nplat'];
    $p1=$_POST['p1'];
    $addr1=$_POST['addr1'];
    $p2=$_POST['p2'];
    $addr2=$_POST['addr2'];
    $p3=$_POST['p3'];
    $addr3=$_POST['addr3'];
    $da=$_POST['date'];
    $t=$_POST['time'];
    $query1="INSERT INTO `schedules` (`Dname`,`Vehicle`, `Numplate`,`Date`,`Time`,`Passenger`,`Paddr`,`Dest`) VALUES ('$d','$v','$n','$da','$t','$p1','$addr1','PLOT NO.- 88, Kesar Solitaire 1, 5, Palm Beach Rd, Sector 19, Sanpada, Navi Mumbai, Maharashtra 400705')";
    $result1=mysqli_query($conn,$query1);
    $query2="INSERT INTO `schedules` (`Dname`,`Vehicle`, `Numplate`,`Date`,`Time`,`Passenger`,`Paddr`,`Dest`) VALUES ('$d','$v','$n','$da','$t','$p2','$addr2','PLOT NO.- 88, Kesar Solitaire 1, 5, Palm Beach Rd, Sector 19, Sanpada, Navi Mumbai, Maharashtra 400705')";
    $result1=mysqli_query($conn,$query2);
    $query3="INSERT INTO `schedules` (`Dname`,`Vehicle`, `Numplate`,`Date`,`Time`,`Passenger`,`Paddr`,`Dest`) VALUES ('$d','$v','$n','$da','$t','$p3','$addr3','PLOT NO.- 88, Kesar Solitaire 1, 5, Palm Beach Rd, Sector 19, Sanpada, Navi Mumbai, Maharashtra 400705')";
    $result1=mysqli_query($conn,$query3);
        echo('<script>window.location="r.php"</script>');
    }
else{
    echo('Wrong Route Buddy');
}
?>