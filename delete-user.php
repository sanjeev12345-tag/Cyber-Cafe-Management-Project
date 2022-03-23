<?php
session_start();
include_once 'dbconnect.php';

if (isset($_POST['btn_delete']){
    $username = $_POST('username_delete');
    $sql = mysql_query("DELETE * FROM users WHERE user_id='$username'");

    if($sql){
        echo "Deleted";
    }
}
?>