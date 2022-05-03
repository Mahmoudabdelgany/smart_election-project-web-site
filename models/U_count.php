
<?php
    session_start();
    include('../include/connect_db.php');
    $id=$_GET['id'];
    $sql=$conn->prepare("select count from codes WHERE code_id='$id' ");    
    $sql->execute();
    $row=$sql->fetch();
    $add=$row[0]+1;
    $sql="UPDATE codes SET count ='$add' WHERE code_id='$id' ";
    $conn->exec($sql);

	
    $Nat_ID=$_SESSION['Nat_ID'];
    $counts = 1;
    $sql=$conn->prepare("select * from users where Nat_ID=? ");
    $sql->execute(array($Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    $sql="UPDATE users SET role ='$counts' WHERE Nat_ID=' $Nat_ID' ";
    $conn->exec($sql);
    session_destroy();
    header("location:../signout.php");

   
   
     
   
?>
