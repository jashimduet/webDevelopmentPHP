<?php 

$sProductId = $_GET['id'];

// Load all the users and decode them to an array
$sProducts = file_get_contents('product-data.txt');
$aProducts = json_decode($sProducts);
for ($i = 0; $i < count($aProducts); $i++) {
  if ($sProductId==$aProducts[$i]->id ) {
  	array_splice($aProducts, $i,1);
    $sProducts = json_encode($aProducts);
    file_put_contents('product-data.txt',$sProducts);
	exit;
  }
}

 ?>