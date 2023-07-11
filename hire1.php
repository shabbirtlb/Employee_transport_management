<?php
    include 'conn.php';
    $o='Himesh';
    $vc=$_POST['veh'];
    $pass=$_POST['issue'];
    $nplat=$_POST['num'];
    $addr=$_POST['mname'];
    $signup_query="INSERT INTO `repairs`(`Vehicle`,`Nplate`, `Own`,`Mechanic`,`Issue`) VALUES ('$vc','$nplat','$o','$addr','$pass')";
    $signup_result=mysqli_query($conn,$signup_query);   
        echo('<script>window.location="er.php"</script>');
    ?>