<?php
include("config.php");
$data=file_get_contents("php://input");
$final_data=json_decode($data, true);
$name=$final_data['name'];
$desc=$final_data['desc'];
$insert_Data=mysqli_query($con, "INSERT INTO medicine_category(name, description)value('$name', '$desc')");
if($insert_Data){
    echo json_encode(array("Confirm"=>"YES"));
}else{
    echo json_encode(array("Confirm"=>"No"));
}
?>