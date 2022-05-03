<?php
    session_start();
    include('../include/connect_db.php');
    $Nat_ID=$_SESSION['Nat_ID'];
    $qr=$_POST['q'];
    $sql=$conn->prepare("select * from users where  Nat_ID=? ");
    $sql->execute(array($Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    $counts=1;
    if ($counts>0)
     {
       
        if ($row['SSN']==$qr) {
           //  header("location:../Face-Recognition/pc.html");
           header("location:../camera/takepc.php");
        }
        else
        {
          
             
             header('location:../SSN.php');

        }
    }
else{
echo "in correct";

}
    
?>
