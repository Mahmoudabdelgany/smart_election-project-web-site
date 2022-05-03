<?php
    session_start();
    include('../include/connect_db.php');


    $username=$_POST['username'];
    $Nat_ID=$_POST['Nat_ID'];
    $_SESSION['Nat_ID']=$_POST['Nat_ID'];
    
    $counts = 1;
    $sql=$conn->prepare("select * from admin where username=? AND Nat_ID=? ");
    $sql->execute(array($username,$Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    
    if ($count>0)
     {
        $_SESSION['user_id']=$row['id'];
        $_SESSION['user_name']=$row['username'];
       
             
             header("location:checkrole.php");

        
    }
    else
        {
    echo "incroct Nat_ID";

    }
    

    ?>