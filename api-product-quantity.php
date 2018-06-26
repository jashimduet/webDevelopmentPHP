<?php 
$sProductQuantityId=$_GET['id'];

$sProducts = file_get_contents('product-data.txt');
$aProducts = json_decode($sProducts);
for ($i = 0; $i < count($aProducts); $i++) {
  
  	if($aProducts[$i]->id==$sProductQuantityId)
  		{
  			$aProducts[$i]->quantity--;
  			$sProducts=json_encode($aProducts);
	file_put_contents('product-data.txt',$sProducts);
    echo json_encode($sProducts[$i]);

  		}
    
}

?>