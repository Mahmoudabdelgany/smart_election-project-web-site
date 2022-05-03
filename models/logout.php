<?php
    session_start();
    include('../include/connect_db.php');
    session_destroy();
    header("location:../signout.php");