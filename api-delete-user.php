<?php 

$sUserId = $_GET['id'];

// Load all the users and decode them to an array
$sUsers = file_get_contents('data.txt');
$aUsers = json_decode($sUsers);
for ($i = 0; $i < count($aUsers); $i++) {
  if ($sUserId==$aUsers[$i]->id ) {
  	array_splice($aUsers, $i,1);
    $sUsers = json_encode($aUsers);
    file_put_contents('data.txt',$sUsers);
	exit;
  }
}

 ?>