<?php
	$imageId = trim(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING));

	$doc = new DOMDocument; 
	$doc->load('xml/images.xml');

	$thedocument = $doc->documentElement;
	
	$allImages = $doc->getElementsByTagName("image");
	$length = $allImages->length;
	$images = $thedocument->getElementsByTagName('image');
	$nodeToRemove = 999;
	for($i=0; $i<$length; $i++)
	{
		$anImage = $allImages->item($i);
		$id = $anImage->getElementsByTagName("alt");
        $theId=$id->item(0)->nodeValue;
		if ($theId == $imageId) {
            $nodeToRemove = $anImage;
            $imageTitle = $id->item(0)->nodeValue;
            $imageTitle = $anImage->getElementsByTagName("imageTitle");
            $imagePath = $imageTitle->item(0)->nodeValue;
            unlink($imagePath);
	  	}
	}
	$nodeToRemove->parentNode->removeChild($nodeToRemove);
 
    file_put_contents("xml/images.xml", $doc->saveXML());
    

	$Message=urlencode("Delete Picture was Successful.");
	header("Location: Home.php?Message=".$Message);
?>