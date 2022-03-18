<?php 

if(!isset($_SESSION)) {
     session_start();
  }
  
  if(!isset($_SESSION['uname'])){
    header('Location: index.php');
  }

$file = 'xml/Images.xml';
$xml = simplexml_load_file($file);


unset($xml->image);



foreach(glob("images/*.jpg") as $filename){
  
    $image = $xml->addChild('image');
    $image->addChild('imageTitle', $filename);
    $image->addChild('alt', basename($filename, ".jpg"));

}
foreach(glob("images/*.png") as $filename){
  
    $image = $xml->addChild('image');
    $image->addChild('imageTitle', $filename);
    $image->addChild('alt', basename($filename, ".png"));
}  

$xml->asXML($file);
header('Location: Home.php');
?>