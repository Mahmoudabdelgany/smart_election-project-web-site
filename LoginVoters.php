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

       
    <div id="contents">
       <center> <h1  id="log_h1">Login  </h1></center>
    	 
       <div class="login">
               <form action="models/Login.php" method="POST" >
           
                       <p> UserName </p> <input required="required" name="username" class="input-lg" type="text" placeholder="please enter a username"><br>
                        <br> <p> National id</p> <input required="required"   id="myInput" maxlength='14' name="Nat_ID" class="input-lg" type="password" placeholder="please enter nat_id" onkeypress="return onlyNumberKey(event)"  maxlength='14' minlength='10'> <br> <br>
                <input type="checkbox" name="vehicle1" onclick="myFunction()"  style="width: 13px; height: 13px; "> show password
 <br>  

                        <input id="lg_btn" class="btn-primary btn-lg" type="submit" name="submit" value="Login" onclick="models/U_voters.php" >
                    
        
   </form>
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
<script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> 


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
</script>

    
 </body>  
</html>
