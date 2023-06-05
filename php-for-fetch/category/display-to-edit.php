<?php
include("config.php");
$id = $_GET['id'];
$get_record = mysqli_query($con, "SELECT * FROM medicine_category where category_id=$id");
if(mysqli_num_rows($get_record) > 0){
    $data = array();
    while($record_result=mysqli_fetch_assoc($get_record)){
$data[] = $record_result;
    }
    echo json_encode($data);
}

?>