<?php
include("config.php");
$get_med_cat = mysqli_query($con, "SELECT * FROM medicine_category");
echo json_encode(mysqli_num_rows($get_med_cat));
?>