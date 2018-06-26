<?php 

$sProducts = file_get_contents('product-data.txt');
$aProducts = json_decode($sProducts);
for ($i = 0; $i < count($aProducts); $i++) {
  	
    
}
$sProducts=json_encode($aProducts);
    echo $sProducts;
?>