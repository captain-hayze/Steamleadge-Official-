<?php
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') {
        session_start();
    //linking the connector
    include 'connect.php';
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    
    foreach ($db->query ("select * FROM userdata")as $row) {
        if($row['username'] == $username && $row['password'] == $password)
        {
            
            echo "<script> location.href = 'navigate.html'</script>";
            die();
        }
        else 
        {
            echo "Failed to Login";
        }
    }
?>