<?php  
  if(!isset($_SESSION)) {
     session_start();
  }
  
  if(!isset($_SESSION['uname'])){
    header('Location: index.php');
  }
?>
<script>
  window.onload = loadM();

  	function loadM(){
        var xmlHttp 
        if(window.XMLHttpRequest){
          xmlHttp = new XMLHttpRequest();
        } else{
          xmlHttp = new ActiveXObject("Microsof.XMLHTTP");
        }
        xmlHttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
              processXMLM(this);
          }
        };
      
        xmlHttp.open("GET", "xml/Images.xml", true);
        xmlHttp.send();
      }
      
      function processXMLM(xml){
        var XMLDocument = xml.responseXML;
        var column = "<div class='column'>";
        var endDiv = "</div>";
        var carouselItem = column + "<img class='demo cursor' src='"
        var slides = carouselItem;
        var headerType = XMLDocument.getElementsByTagName("image");
        for(var i = 0; i < headerType.length; i++){
          slides += headerType[i].getElementsByTagName("imageTitle")[0].childNodes[0].nodeValue + "' style='width:100%; height:100px;' onclick='currentSlide(" + (i+1) + ")' alt='" + headerType[i].getElementsByTagName("alt")[0].childNodes[0].nodeValue + "'>" + endDiv;
          if(i < headerType.length-1) slides += carouselItem;
        }
        document.getElementById("images").innerHTML = slides;
    }
</script>