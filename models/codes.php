 <?php
    session_start();
    include('../include/connect_db.php');

 $new=0;
     $q = "INSERT INTO codes(code_id,count)  VALUES ('','$new')";
     $conn->exec($q);
     header("location:../index.php");
    ?>