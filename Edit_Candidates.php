<!Doctype html>
<html>
 <head>
    <title> Smart Election  </title> 
    <meta http-equiv="This is a Wepsite About Smart Election Online" content="text/html; charset=utf-8" />
    
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
                <li><a href="models/Show_Result.php">Result</a></li>
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
    include('include/connect_db.php');
    $Nat_ID=$_GET['Nat_ID'];
    $sql=$conn->prepare("SELECT * FROM candidates WHERE Nat_ID='$Nat_ID'");
    $sql->execute();
    $row=$sql->fetch();
    //print_r($row);
?>
<div id="contents">
<h1 id="man_h1">Update Candidates</h1><br>
           
            <div id = "man_ins">

<form method="post" action="models/Update.php">

                  <div id="ins_man">    

                <p>  Name </p>
                <input  name="name" value="<?php echo $row['name']; ?>"required="required" class="input-lg" type="text" placeholder="Enter Your Name"> <br/>
                
                <p>  The Code   </p>
                <input  name="code" value="<?php echo $row['code']; ?>" required="required" class="input-lg" type="text"  placeholder="Enter the code Of candidates"><br/>
                <p>  Phone </p>
                <input  name="phone" value="<?php echo $row['phone']; ?>" required="required" class="input-lg" type="text" placeholder="Enter Phone Number"><br/>
                <p>  Nat_ID </p>
                <input name="Nat_ID" value="<?php echo $row['Nat_ID']; ?>" required="required" class="input-lg" type="text"placeholder="Enter E-mail"><br/>
                 <p>  Gendar </p>
                <select name="gender" value="<?php echo $row['gender']; ?>" style="width:300px">
                    <option selected>Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <p>  Adress </p>
                <input  name="address" value="<?php echo $row['address']; ?>" required="required" class="input-lg" type="text"  placeholder="city/street"><br/>
                 <p>  Description </p>
                <textarea name="Desc_c" value="<?php echo $row['Desc_c']; ?>" rows="3" style="width:400px"> </textarea>
                <p>  Jop Title </p>
                <input  name="job_title" value="<?php echo $row['job_title']; ?>" required="required" class="input-lg" type="text" placeholder="Enter The Jop Title"><br/>
                 <p>  Upload image </p>
		  <input type="file" name="image" value="" required="required" class="input-lg" />

    <br>
    <input type="submit" value=" Save ">
</div>
</form>
</div>
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