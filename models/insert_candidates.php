<?php
    session_start();
    include('../include/connect_db.php');
   // $id=$_POST['id'];
    $name=$_POST['name'];
    $code=$_POST['code'];
    $Nat_ID=$_POST['Nat_ID'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $desc=$_POST['description'];
    $job_title=$_POST['job_title'];
	$image=$_POST['image'];
    // print_r($_POST);
    $sql=$conn->prepare("select Nat_ID from candidates where Nat_ID='$Nat_ID'  ");
    $sql->execute();
    $rows=$sql->fetchALL();
    $count=$sql->rowcount();
    

  //print_r($rows);
  if ($count>0) {
  header("location:../alert.php");
  }
  else {

 $q = "INSERT INTO candidates(id,name,code,Nat_ID,phone,gender,address,Desc_c,job_title,image)  VALUES ('','$name','$code','$Nat_ID','$phone','$gender','$address','$desc','$job_title','$image')";
     $conn->exec($q);
    
     
     //echo "done ";

	header("location:codes.php");
    
  	
  }


     ?>
       