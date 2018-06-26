<?php

// Get the file and save it with a unique id
$sFileExtension = pathinfo($_FILES['fileUserImage']['name'], PATHINFO_EXTENSION);
$sFolder = 'images/';
$sFileName = 'userimage-'.uniqid().'.'.$sFileExtension;
$sSaveFileTo = $sFolder.$sFileName;
move_uploaded_file( $_FILES['fileUserImage']['tmp_name'], $sSaveFileTo);

// The origina way i did it

// String template a new user
// $sjNewUser = '{
//   "id": "'.uniqid().'",
//   "name": "'.$_POST['txtUserName'].'",
//   "email": "'.$_POST['txtUserEmail'].'",
//   "image": "'.$sFolder.$sFileName.'"
// }'; 
// $jNewUser = json_decode($sjNewUser);

// Refactored version
$jNewUser = json_decode('{}');
$jNewUser->id = uniqid();
$jNewUser->firstName = $_POST['txtFirstName'];
$jNewUser->lastName = $_POST['txtLastName'];
$jNewUser->email = $_POST['txtUserEmail'];
$jNewUser->password =$_POST['password'];
$jNewUser->phoneNo = $_POST['txtMobileNo'];
$jNewUser->admin=0;
$jNewUser->image = $sFolder.$sFileName;


// Load all the users and decode them to an array
$sOldUsers = file_get_contents('data.txt');
$jOldUsers = json_decode($sOldUsers);

// Add the new user to the array
array_push( $jOldUsers, $jNewUser );

// Encode all the users and save it to the file;
$sNewUsers = json_encode($jOldUsers);
file_put_contents('data.txt', $sNewUsers);

// response -> succes
//echo '{"message": "Added user"}';
echo $sNewUsers;

echo "data saved successfully";

?>