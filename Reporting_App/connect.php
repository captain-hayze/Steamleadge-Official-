<?php
 //connecting the database
try
{
    $db = new PDO ('mysql:host=localhost;dbname=reportapp;charset=utf8','root','');

    var_dump($db);
}
catch(Exception $e)
{
    echo "there is a database connection error";
}
?>