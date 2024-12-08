<?php

include_once 'system/db.php';
session_start();
    if(!$_SESSION['std_id']){
        header("location: login.php");
    }

?>