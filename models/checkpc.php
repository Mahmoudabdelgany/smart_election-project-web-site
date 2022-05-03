<?php
    session_start();
    include('../include/connect_db.php');
    $Nat_ID=$_SESSION['Nat_ID'];
    $pc=$_POST['pc'];
   // echo $pc;
    $sql=$conn->prepare("select * from users where  Nat_ID=? ");
    $sql->execute(array($Nat_ID));
    $row=$sql->fetch();
    $count=$sql->rowcount();
    $counts=1;
//echo $row['username'];
$name=$row['username'];
    
if ($counts>0)
     {
        if ($name==trim($pc)) {
           header("location:../choose.php");
          // echo "matched";
        }
        else
        {
           //echo $pc;
            //echo $row['username'];
            header('location:../pc.php');

        }
    }
else{
echo "in correct";

}
    
?>

 
