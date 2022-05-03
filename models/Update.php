<?php
    session_start();
    include('../include/connect_db.php');
    $id=$_POST['id'];
    $name=$_POST['name'];
    $code=$_POST['code'];
    $phone=$_POST['phone'];
    $Nat_ID=$_POST['Nat_ID'];
    $gender=$_POST['gender'];    
    $address=$_POST['address'];
    $Desc_c=$_POST['Desc_c'];
    $job_title=$_POST['job_title'];
    $image=$_POST['image'];
    
    

    $sql="UPDATE candidates SET name ='$name',code='$code',Nat_ID='$Nat_ID',phone='$phone',gender='$gender',address='$address',Desc_c='$Desc_c',job_title='$job_title',image='$image' WHERE Nat_ID='$Nat_ID' ";
    $conn->exec($sql);
    
    header("Location:../index.php");
?>