
<?php
    session_start();
    include('../include/connect_db.php');
    
    $Nat_ID=trim($_SESSION['Nat_ID']);
    $counts = 0;
    
 $Results=$_POST['Results']; 
 $Election=$_POST['Election'];

echo  $Results;
echo  $Election;
// echo $Nat_ID;

    $sql=$conn->prepare("select * from admin where Nat_ID=? ");
    $sql->execute(array($Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    $sql="UPDATE admin SET   roleR ='$Results' , roleC ='$Election'  WHERE Nat_ID=' $Nat_ID' ";
    
$conn->exec($sql);
    header("location:../index.php"); 	


    
     
   
?>
