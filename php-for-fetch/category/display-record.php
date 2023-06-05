<?php
include("config.php");

$get_record = mysqli_query($con, "SELECT * FROM medicine_category");
if(mysqli_num_rows($get_record) > 0){
    $data=array();
    while($result=mysqli_fetch_assoc($get_record)){
    $data[] = $result; 
    }
    echo json_encode($data);
}

?>