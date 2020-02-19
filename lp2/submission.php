<?php


if( isset($_REQUEST['submit'])){
	$uname = $_REQUEST['name'];
	$uemail = $_REQUEST['email'];
	$gender = $_REQUEST['gender'];
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $uname = "Name is required";
  } else {
    $uname = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $uemail = "Email is required";
  } else {
    $uemail = test_input($_POST["email"]);
  }

 

 

  if (empty($_POST["gender"])) {
    $gender = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
}

?>