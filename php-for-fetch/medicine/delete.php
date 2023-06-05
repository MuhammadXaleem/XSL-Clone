<?php
include("config.php");
$id =$_GET['id'];
$delete_query=mysqli_query($con, "DELETE FROM medicine where medicine_id= '$id'");
if($delete_query){
    echo json_encode(array("confirm" => "yes"));
}else{
    echo json_encode(array("confirm" => "no"));
}
?>