<?php

// Get the file and save it with a unique id
$sFileExtension = pathinfo($_FILES['fileProductImage']['name'], PATHINFO_EXTENSION);
$sFolder = 'products/';
$sFileName = 'productimage-'.uniqid().'.'.$sFileExtension;
$sSaveFileTo = $sFolder.$sFileName;
move_uploaded_file( $_FILES['fileProductImage']['tmp_name'], $sSaveFileTo);

$jNewProduct = json_decode('{}');
$jNewProduct->id = uniqid();
$jNewProduct->productName = $_POST['txtProductName'];
$jNewProduct->price = $_POST['txtPrice'];
$jNewProduct->offer = $_POST['txtOfferPrice'];
$jNewProduct->offerStart=$_POST['txtOfferStart'];
$jNewProduct->offerEnd=$_POST['txtOfferEnd'];
$jNewProduct->quantity =$_POST['txtQuantity'];
$jNewProduct->image = $sFolder.$sFileName;


// Load all the products and decode them to an array
$sOldProducts = file_get_contents('product-data.txt');
$jOldProducts = json_decode($sOldProducts);

// Add the new product to the array
array_push( $jOldProducts, $jNewProduct );

// Encode all the products and save it to the file;
$sNewProducts = json_encode($jOldProducts);
file_put_contents('product-data.txt', $sNewProducts);

echo $sNewProducts;

echo "data saved successfully";

?>