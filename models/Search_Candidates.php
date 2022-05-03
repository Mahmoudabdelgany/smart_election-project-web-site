<?php
    session_start();
    include('../include/connect_db.php');
    $Nat_ID=$_GET['Nat_ID'];
    $sql=$conn->prepare("select * from candidates );    
    $conn->exec($sql);
    $sql->execute();
    $rows=$sql->fetchALL();
    header("location:../Show_candidates.php");
    ?>
