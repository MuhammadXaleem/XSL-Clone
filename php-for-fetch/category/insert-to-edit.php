<?php
include("config.php");
$id = $_GET['id'];
$data = file_get_contents("php://input");
$final_data=json_decode($data, true);
$name = $final_data['name'];
$desc = $final_data['desc'];
$update_record = mysqli_query($con, "UPDATE medicine_category SET name='$name', description='$desc' where category_id='{$id}'");
if($update_record){
    echo json_encode(array("confirm"=>"YES"));
}
?>