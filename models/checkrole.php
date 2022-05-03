<?php 
 session_start();
    
    include('../include/connect_db.php');
    $Nat_ID=$_SESSION['Nat_ID'];
    $sql=$conn->prepare("select * from admin where  Nat_ID=? ");
    $sql->execute(array($Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    $counts=1;
    if ($counts>0)
     {
       
        if ($row['roleC']== $counts) {
             header("location:../Admin_Choose.php");
           
        }
        else
        {
          
             
             header('location:../Admin_Choose.php');

        }
    }
?>
