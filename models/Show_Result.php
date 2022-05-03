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
        
        if ($row['roleR']==1) {
		
             header("location:../Result.php");
           
        }
        else
        {
                header("location:../No_Result.php");

        }
    }
    else
        {
    echo "incroct Nat_ID";

    }
    


    ?>      
          
        