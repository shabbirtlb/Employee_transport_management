<?php
    include 'conn.php';
    $o='Kewin';
    $d=date("Y-m-d");
    $signup_query="DELETE FROM `schedules` WHERE Passenger like '$o' and Date like '$d';";
    $signup_result=mysqli_query($conn,$signup_query);   
        echo('<script>window.location="es.php"</script>');
    ?>      