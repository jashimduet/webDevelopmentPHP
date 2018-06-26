<?php 
$sProductId = $_REQUEST['id'];
//echo $sProductId;
//exit;

// Load all the users and decode them to an array
$sProducts = file_get_contents('product-data.txt');
$aProducts = json_decode($sProducts);

for ($i = 0; $i < count($aProducts); $i++) {
  if ($aProducts[$i]->id == $sProductId) {
    	$aProducts[$i]->productName=$_REQUEST['txtUpdateName'];
    	$aProducts[$i]->price=$_REQUEST['txtUpdatePrice'];
    	$aProducts[$i]->offer=$_REQUEST['txtUpdateOffer'];
    	$aProducts[$i]->offerStart=$_REQUEST['txtUpdateStart'];
    	$aProducts[$i]->offerEnd=$_REQUEST['txtUpdateEnd'];
    	$aProducts[$i]->quantity=$_REQUEST['txtUpdateQuantity'];
    
  }
  }
  		$sProducts = json_encode($aProducts);
		file_put_contents('product-data.txt', $sProducts);
		echo $sProducts;

?>