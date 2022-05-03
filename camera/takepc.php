<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Web app that takes pictures</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
  
<div class="layout">
  <div id="newImages"></div>
  
  <div class="row">
    <div class="cell">
      <video id="player" autoplay></video>
    </div>
    <div class="cell"></div>
      <canvas id="canvas" width="320px" height="240px"></canvas>
    </div>
  </div>
<form>  
  <div class="center"  id="pre_take_buttons">
    <input type=button value="Capture"  id="capture-btn" onClick="preview_snapshot()" >
  </div>

  <div  class="center" id="post_take_buttons" style="display:none">
     <input type=button value="take another"  id="capture-btn" onClick="cancel_preview()" >
    <button   onclick="go()" ><a href="#" class="button" id="btn-download" download="my-file-name.png">Download</a></button>
  </div>
  <div class="center"  id='next'  style="display:none">
    <button  type=button value="next"><a href="../Face-Recognition/pc.html"> Next </a></button>
  
  </div>
    
    </form>

      
  <div id="pick-image">
    <label>Video is not supported. Pick an Image instead</label>
    <input type="file" accept="image/*" id="image-picker">
  </div>
</div>

<script type="text/javascript">
  
    var button = document.getElementById('btn-download');
    button.addEventListener('click', function (e) {
    var dataURL = canvas.toDataURL('image/png');
    button.href = dataURL;
    
});

</script>
<script src="script.js"></script>
<script language="JavaScript">
    function preview_snapshot() {
      // freeze camera so user can preview pic
    
      // swap button sets
      document.getElementById('pre_take_buttons').style.display = 'none';
      document.getElementById('post_take_buttons').style.display = '';
      document.getElementById('next').style.display = 'none';
    }
    
    function cancel_preview() {
      // cancel preview freeze and return to live camera feed
      
      
      // swap buttons back
      document.getElementById('pre_take_buttons').style.display = '';
      document.getElementById('post_take_buttons').style.display = 'none';
      document.getElementById('next').style.display = 'none';
    }
    function go() {
      // freeze camera so user can preview pic
    
      // swap button sets
      document.getElementById('pre_take_buttons').style.display = 'none';
      document.getElementById('post_take_buttons').style.display = 'none';
      document.getElementById('next').style.display = '';
      
    }
    
  </script>  

</body>
</html>