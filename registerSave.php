<?php
include_once('connect_db.php');

$email = $_POST("email");
$pass_word = $_POST("pass_word");
$address1 = $_POST("address1");
$address2 = $_POST("address2");
$city = $_POST("city");
$state = $_POST("state");
$zip = $_POST("zip");
$check_me = $_POST("check_me");


$sql = "INSERT INTO `register_php` (`id`, `email`, `pass_word`, `address1`, `address2`, `city`, 
`state`, `zip`, `check_me`, `date_time`) VALUES (NULL, '$email', 
'$pass_word', '$address1', '$address2', '$city', '$state', '$zip', '$check_me', current_timestamp());";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>