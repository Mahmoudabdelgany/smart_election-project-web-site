<?php 

    include('../include/connect_db.php');
    $Nat_ID=$_GET['Nat_ID'];
    //echo $Nat_ID;
    
    $sql=$conn->prepare("select id from candidates where  Nat_ID='$Nat_ID' ");
    $sql->execute(array());
    $row=$sql->fetch();
    $count=$sql->rowcount();
//echo $row['username'];
    $id=$row['id'];
    //echo $id;


    
    $sql="delete from codes where code_id='$id'";
    $conn->exec($sql);

    $sql="delete from candidates where Nat_ID='$Nat_ID'";
    $conn->exec($sql);
  
    
    
    header("location:../index.php");
    ?>