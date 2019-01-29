<?php
$state = $_POST['nav'];
 if($state == "submit")
 {
    echo "<script> location.href = 'class.html'</script>";
            die();
 }
 elseif($state == "fetch")
 {
    echo "<script> location.href = 'dearch.html'</script>";
            die();
 }
?>