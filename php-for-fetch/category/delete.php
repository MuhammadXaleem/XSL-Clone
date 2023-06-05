<?php
include("config.php");
$del_id= $_GET['delete_id'];

$del_query=mysqli_query($con, "DELETE FROM medicine_category where category_id='$del_id'");
if($del_query){
    echo json_encode(array("confirm"=>"yes"));
}
?>