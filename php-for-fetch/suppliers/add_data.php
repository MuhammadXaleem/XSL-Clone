<?php
include("config.php");
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$image_name = time()."_".$image;
$file = move_uploaded_file($tmp_name, "images/$image_name");
if($file){
    $insert_data = mysqli_query($con, "INSERT INTO suppliers(supplier_name, phone, email, address, image) value('$name', '$phone', '$email', '$address', '$image_name')");
    if($insert_data){
         echo json_encode(array("confirm" => "yes"));
    }
   
}



?>