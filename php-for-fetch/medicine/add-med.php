<?php

include("config.php");
$name = $_POST['name'];
$cat = $_POST['category'];
$p_price = $_POST['purchase-price'];
$s_price = $_POST['selling-price'];
$qnty = $_POST['qnty'];
$desc = $_POST['desc'];
$img = $_FILES['image']['name'];

$img= time()."-".$img;

$insert_data=mysqli_query($con, "INSERT INTO medicine (name, category, purchase_price, Sale_price, quantity, description, image) value( '$name', '$cat', '$p_price', '$s_price', '$qnty', '$desc', '$img')");
if($insert_data){
  
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "images/$img");
    echo json_encode(array("confirm"=> "yes"));
}else{
    echo json_encode(array("confirm"=> "no"));
}
?>