<?php
    $email = false;
    if(isset($_POST['email'])){
    $email = $_POST['email'];
}
    $psw = false;
    if(isset($_POST['psw'])){
	$psw = $_POST['psw'];
}
	
    
    //databse connection
    $conn = new mysqli('localhost','root','','voters_registration');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into login values(?, ?)");
		$stmt->bind_param("ss", $email, $psw);
		$stmt->execute();
		echo "LOGIN SUCCESSFUL";
		$stmt->close();
		$conn->close();
	}
?>