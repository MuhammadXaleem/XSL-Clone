<?php
include("config.php");
$get_sup = mysqli_query($con, "SELECT * FROM suppliers");
echo json_encode(mysqli_num_rows($get_sup));
?>