<?php

	
	$sName = $_POST['subName'];
	$sEmail = $_POST['subEmail'];
	$sPassword=$_POST['subPassword'];
	$sLng = $_POST['lng'];
	$sLat = $_POST['lat'];

	//$sSubscriber = ('{}');
	$jSubscriber = json_decode( '{}' );
	$jSubscriber->id=uniqid();
	$jSubscriber->name = $sName;
	$jSubscriber->email=$sEmail;
	$jSubscriber->password = $sPassword;
	$jSubscriber->lng = $sLng;
	$jSubscriber->lat = $sLat;

	$sOldSubscribers=file_get_contents('data-map.txt');
	$jOldSubscribers=json_decode($sOldSubscribers);
	array_push($jOldSubscribers, $jSubscriber);

	$sSubscribers = json_encode( $jOldSubscribers);

	file_put_contents( 'data-map.txt' , $sSubscribers );
	echo $sSubscribers;


?>