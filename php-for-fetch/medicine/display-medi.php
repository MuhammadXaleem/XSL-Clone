<?php
include("config.php");
$data= array();
$get_med= mysqli_query($con, "SELECT m.medicine_id, m.name as nnn, m.description, m.category, m.purchase_price, m.Sale_price, m.quantity, m.image, mc.name FROM medicine m LEFT JOIN medicine_category mc ON m.category = mc.category_id ");
if(mysqli_num_rows($get_med) > 0){
while($display_result=mysqli_fetch_assoc($get_med)){
    $data[]= $display_result;
}
}else{
    $data['confirm'] ="No"; 
}
echo json_encode(($data));
?>