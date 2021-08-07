<?php
$firstname = false;
    if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
}
$middlename = false;
    if(isset($_POST['middlename'])){
    $middlename = $_POST['middlename'];
}
$lastname = false;
    if(isset($_POST['lastname'])){
	$lastname = $_POST['lastname'];
}
$fathername = false;
    if(isset($_POST['fathername'])){
	$fathername = $_POST['fathername'];
}
$birthday = false;
    if(isset($_POST['birthday'])){
    $birthday = $_POST['birthday'];
}
$gender = false;
    if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
}
$mobileno = false;
    if(isset($_POST['mobileno'])){
    $mobileno = $_POST['mobileno'];
}
$adharno = false;
    if(isset($_POST['adharno'])){
    $adharno = $_POST['adharno'];
}
$currentaddress = false;
    if(isset($_POST['currentaddress'])){
    $currentaddress = $_POST['currentaddress'];
}
    
    //databse connection
    $conn = new mysqli('localhost','root','','voters_registration');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into registration values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssiis", $firstname, $middlename, $lastname, $fathername, $birthday, $gender, $mobileno, $adharno, $currentaddress);
		$stmt->execute();
		echo "REGISTRATION SUCCESSFUL";
		$stmt->close();
		$conn->close();
	}
?>