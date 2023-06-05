<?php
include("config.php");
$get_data = mysqli_query($con, "SELECT * FROM suppliers");
$data = array();
if(mysqli_num_rows($get_data) > 0){
    while($result = mysqli_fetch_assoc($get_data)){
        $data[] = $result;
    }
    echo json_encode($data);
}

?>