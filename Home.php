<?php  
  session_start();
  
  if(isset($_SESSION['uname'])){
    include("models/header.php");
    include("models/nav.php");
    include("GetMe.php");
  } 
	else{
    header('Location: index.php');
  }
?>

<!-- https://www.w3schools.com/howto/howto_js_slideshow_gallery.asp-->
<body>

  <div id="mySlides" class="white">
    <div class="numbertext" id="numbers"></div>
    <img src="images/Messi.jpg" id="image" />
          <?php
          if (isset($_GET['Message'])) {
			echo "<div class='center'>
					<h4 class='green-text'>$_GET[Message]</h4>
					<br />
					</div>";
		}
	?>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  <div class="caption-container white black-text">
    <p id="caption"></p>
  </div>
  <div class="row center">
    <form action="Delete.php" method="POST">
    			<input type="hidden" value="Messi" id="hiddenInput" name="id" >
    			<input type="submit" value="Delete" />
      		</form>
          </div>
  <!--Populated by AJAX-->
  <div class="row" id="images" class="white">
  </div>
<div class="right">
  <a href="reset.php" class="black btn">Reset</a>
</div>
  <script src="materialize/js/slideShow.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>