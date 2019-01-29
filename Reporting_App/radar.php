<?php
$state = $_POST['dch'];
 if($state == "Yes")
 {
    echo "<script> location.href = 'report.html'</script>";
            die();
 }
 elseif($state == "No")
 {
    echo "<script> location.href = 'report_null.html'</script>";
            die();
 }
?>