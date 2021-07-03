<?php
// include database connection file
include_once("crudsiswa.php");
 
// Get id from URL to delete that user
$nis = $_GET['nis'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE nis=$nis");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:bacasiswa2.php");
?>