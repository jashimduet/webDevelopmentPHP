<?php
	session_start();

	
	 /*Data comes from the browser*/

	$sUserName = $_POST['txtUserName'];
	$sUserPassword 	= $_POST['txtUserPassword'];

	/*Data comes from the server*/

	 $sUsers=file_get_contents('data.txt');
	$jUsers=json_decode($sUsers);
	
	for($i=0; $i<count($jUsers); $i++){
		$sCorrectUserName=$jUsers[$i]->firstName;
		$sCorrectUserPassword=$jUsers[$i]->password;
		$sCorrectLastName=$jUsers[$i]->lastName;
		$admin=$jUsers[$i]->admin;
		$userId=$jUsers[$i]->id;
			
	if(( $sUserName == $sCorrectUserName) && 
			($sUserPassword == $sCorrectUserPassword )&&($admin==1))
	{
		$_SESSION['sUserName'] = $sCorrectUserName;
		$_SESSION['admin'] ='1';
		$_SESSION['sUserId'] = $userId;
		// send this to the client
		$sjResponse = '{"login":"admin","firstName":"'.$sCorrectUserName.'"}';
		echo $sjResponse;
		exit;
	}
	elseif(( $sUserName == $sCorrectUserName) && 
			($sUserPassword == $sCorrectUserPassword )&&($admin==0))
	{
		$_SESSION['sUserName'] = $sCorrectUserName;
		$_SESSION['admin'] ='0';
		$_SESSION['sUserId'] = $userId;

		$sjResponse = '{"login":"user","firstName":"'.$sCorrectUserName.'"}';
		echo $sjResponse;
		exit;
	}
}

	$sjResponse = '{"login":"LOGIN FAIL - TRY AGAIN"}';
	echo $sjResponse;
	exit;

?>