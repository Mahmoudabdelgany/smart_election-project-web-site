<?php
    session_start();
    include('../include/connect_db.php');


    $username=$_POST['username'];
    $Nat_ID=$_POST['Nat_ID'];
    $_SESSION['Nat_ID']=$_POST['Nat_ID'];
       
    $counts = 1;
    $sql=$conn->prepare("select * from users where username=? AND Nat_ID=? ");
    $sql->execute(array($username,$Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    
    if ($count>0)
     {
        $_SESSION['user_id']=$row['id'];
        $_SESSION['user_name']=$row['username'];
       
        if ($row['role']==1) {
             header("location:../Forger.php");
           
        }elseif($row['age']<= 18){
	
	header("location:../age.php");

        }
        else
        {
             
             header("location:../qr.php");

        }
    }
    else
        {
    echo "incroct Nat_ID";

    }
    

    ?>