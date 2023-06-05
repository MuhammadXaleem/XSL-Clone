<?php
include("config.php");
$id = $_GET['id'];
$get_record= mysqli_query($con, "SELECT m.medicine_id, m.name as medi_name, m.description, m.category, m.purchase_price, m.Sale_price, m.quantity, m.image, mc.name FROM medicine m LEFT JOIN medicine_category mc ON m.category = mc.category_id where medicine_id='$id'");
if(mysqli_num_rows($get_record) > 0){
    $data = array();
    while($record_result=mysqli_fetch_assoc($get_record)){
$data[] = $record_result;
    }
    echo json_encode($data);
}

?>