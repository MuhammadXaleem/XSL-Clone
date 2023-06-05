<?php
include("config.php");
$id= $_GET['id'];
$data=file_get_contents("php://input");
$final_data=json_decode($data, true);
$name=$final_data['name'];
$p_price=$final_data['p_price'];
$s_price=$final_data['s_price'];
$qnty=$final_data['qnty'];
$desc=$final_data['desc'];
$cat=$final_data['cat'];
$update=mysqli_query($con, "UPDATE medicine SET name='$name', category='$cat', purchase_price='$p_price', Sale_price='$s_price', quantity='$qnty', description='$desc'  where medicine_id='$id'");
if($update){
    echo json_encode(array("confirm"=>"yes"));
}else{
    echo json_encode(array("confirm"=>"no"));
}
?>