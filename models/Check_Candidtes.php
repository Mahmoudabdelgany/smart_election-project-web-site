<?php
    session_start();
    include('../include/connect_db.php');
    
    $counts = 1;
    $sql=$conn->prepare("select * from admin where id='$counts'  ");
    $sql->execute();
    $row=$sql->fetch();
    $count=$sql->rowcount();
    

    if ($count>0)
     {
        
        if ($row['roleC']==1) {
		 header("location:../candidates.php");
             
           
        }
        else
        {
             
              header("location:../No_election.php");
         
        }
    }
    else
        {
    echo "incroct Nat_ID";

    }
    


    ?>