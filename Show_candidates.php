<!Doctype html>
<html>
 <head>
    <title> Smart Election  </title> 
    <meta http-equiv="This is a Wepsite About Smart Election Online" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: red;
}
</style>


    
    <link href="res/css/reset-min.css" rel="stylesheet" type="text/css" />
    <link href="res/css/fonts-min.css" rel="stylesheet" type="text/css" />
    <link href="res/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="res/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="res/css/style.css" rel="stylesheet" type="text/css" />
     
     <script src="res/js/bootstrap.js"></script>
     <script src="res/js/bootstrap-min.js"></script>
     <script src="res/js/script.js"></script>

     
 </head>
 <body>
     <div id="wrapper">
    
    <div id="header">
        
        <div id="logo"><img src="res/img/log.png" width="285" height="118" /></div>
        
        <div id="menu">
                                            
            <ul>
                 <li><a href="index.php" >Home</a></li>
 		<li><a href="phpqrcode/index.php">generate QR</a></li>
                <li><a href="loginvoters.php">Voters</a></li>
                <li><a href="models/Check_Candidtes.php">candidates</a></li>
                <li><a href="models/Show_Result.php">Results</a></li>
                <li><a href="LoginAdmin.php">Admin</a></li>
              <li><a href="https://www.youm7.com/story/2018/1/9/%D9%85%D9%86-%D9%84%D9%87-%D8%AD%D9%82-%D8%A7%D9%84%D8%A7%D9%86%D8%AA%D8%AE%D8%A7%D8%A8-%D9%88%D8%A7%D9%84%D9%85%D8%B9%D9%81%D9%89-%D9%85%D9%86%D9%87-%D9%81%D9%89-%D9%82%D8%A7%D9%86%D9%88%D9%86-%D9%85%D8%A8%D8%A7%D8%B4%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D9%82%D9%88%D9%82/3591223">About Election</a></li>
                
            </ul>
            
            
            
          <div id="slinks">
            <h1>Follow us:</h1>
            <a href="https://www.facebook.com/" ><img src="res/img/fb.png" width="31" height="31" /> </a>
            <a href="https://www.twitter.com/"  ><img src="res/img/tw.png" width="31" height="31" /></a>
            <a href="https://www.youtube.com/"  ><img src="res/img/yt.png" width="31" height="31" /></a>
            <a href="https://www.skype.com/" ><img src="res/img/sk.png" width="35" height="35" /></a>
            </div>
        </div>
    </div>       
<?php
    session_start();
    include('include/connect_db.php');
    $Nat_ID=$_GET['Nat_ID'];
    $sql=$conn->prepare("select * from candidates where Nat_ID='$Nat_ID'" );    
    

    $sql->execute();
    $rows=$sql->fetchALL();
    
    ?>
    <div id="contents">
        <h1 id="ser_h1"> Candidates</h1>
               
               
                    <table class="table table-hover table-bordered sectionTable">
                                  <tr class="danger">
                                        <th>ID</th>
                                       <th>Name</th>
                                      <th>Phone</th>
				      <th>code</th>
                                      <th>Nat_ID</th>
                                      <th>Gender</th>
                                      <th>Address</th>
                                      <th>Desc_C</th>
                                      <th>job_title</th>
				      <th>Edit</th>
                                      <th>Delete</th>
                                       

                                    </tr>


                                    <?php

					foreach ($rows as $row ) {
					echo "<tr>";
					echo "<td>".$row['id']."</td>";		
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['phone']."</td>";
					echo "<td>".$row['code']."</td>";
					echo "<td>".$row['Nat_ID']."</td>";
					echo "<td>".$row['gender']."</td>";
					echo "<td>".$row['address']."</td>";
					echo "<td>".$row['Desc_c']."</td>";
					echo "<td>".$row['job_title']."</td>";
					
	
echo "<td><p data-placement='top' data-toggle='tooltip' title='Edit'><a href='Edit_Candidates.php?Nat_ID=$row[Nat_ID]' class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit'  >Edit<span class='glyphicon glyphicon-pencil'></span></a></p></td>";
echo "<td><p data-placement='top' data-toggle='tooltip' title='Delete'><a href='models/Delete_candidates.php?Nat_ID=$row[Nat_ID]' class='btn ' data-title='Edit' data-toggle='modal' data-target='#Delete'  >Delete<span class='glyphicon glyphicon-trash'></span></a></p></td>";
//echo '<td><a href="Edit_Candidates.php?Nat_ID=$row[Nat_ID]"><button  class="btn" ><i ></i class="far fa-edit"> Edit</button></a></td>';
//echo '<td><button class="btn"    onclick="window.location.href="models/Delete_candidates.php?Nat_ID=$row[Nat_ID]"><i class="fa fa-trash"></i> Delete</button></td>';
//<button   ><a href='Edit_Candidates.php?Nat_ID=$row[Nat_ID]'>edit</button>
//<button    ><a href='models/Delete_candidates.php?Nat_ID=$row[Nat_ID]'>delete</button>
}

    
?>


                    			</table>
					       
                    
		</div>                     
        <div id="footer">
    	    <div id ="news" >
                <ul>
                 <marquee>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    <li><a href="">This is paragraph news</a></li>
                    </marquee>
                </ul>
                
            </div>
   	    	
        </div>
    </div>
</div>
    
 </body>  
</html>
