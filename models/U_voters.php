<?php
    session_start();
    include('../include/connect_db.php');


    $username=$_POST['username'];
    $Nat_ID=$_POST['Nat_ID'];
    $counts = 1;
    $sql=$conn->prepare("select * from users where username=? AND Nat_ID=? ");
    $sql->execute(array($username,$Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    $sql="UPDATE users SET role ='$counts' WHERE Nat_ID='$Nat_ID' ";
    $conn->exec($sql);


    
             header("location:../index.php");
    

    ?>
