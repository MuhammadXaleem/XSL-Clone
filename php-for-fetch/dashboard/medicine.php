<?php
include("config.php");
$get_medicine = mysqli_query($con, "SELECT * FROM medicine");
echo json_encode(mysqli_num_rows($get_medicine));
?>