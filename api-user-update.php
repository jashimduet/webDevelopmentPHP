<?php 
$sUserId = $_REQUEST['id'];


// Load all the users and decode them to an array
$sUsers = file_get_contents('data.txt');
$aUsers = json_decode($sUsers);

for ($i = 0; $i < count($aUsers); $i++) {
  if ($aUsers[$i]->id == $sUserId) {
    	$aUsers[$i]->firstName=$_REQUEST['txtFirst'];
    	$aUsers[$i]->email=$_REQUEST['txtEmail'];    	
    
  }
  }
  		$sUsers = json_encode($aUsers);
		file_put_contents('data.txt', $sUsers);
		echo $sUsers;

?>