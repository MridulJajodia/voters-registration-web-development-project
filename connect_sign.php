<?php
$Name = false;
    if(isset($_POST['Name'])){
    $Name = $_POST['Name'];
}
$EMailAddress = false;
    if(isset($_POST['EMailAddress'])){
    $EMailAddress = $_POST['EMailAddress'];
}
$Password = false;
    if(isset($_POST['Password'])){
	$Password = $_POST['Password'];
}
$MobileNumber = false;
    if(isset($_POST['MobileNumber'])){
	$MobileNumber = $_POST['MobileNumber'];
}
$AdharNumber = false;
    if(isset($_POST['AdharNumber'])){
    $AdharNumber = $_POST['AdharNumber'];
}
    
    //databse connection
    $conn = new mysqli('localhost','root','','voters_registration');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into sign_in values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssii", $Name, $EMailAddress, $Password, $MobileNumber, $AdharNumber);
		$stmt->execute();
		echo "SIGN IN SUCCESSFUL";
		$stmt->close();
		$conn->close();
	}
?>