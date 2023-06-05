<?php
include("config.php");
$cat=array();
$get_category=mysqli_query($con, "SELECT category_id, name FROM medicine_category");
if(mysqli_num_rows($get_category) > 0){
while($cat_result=mysqli_fetch_assoc(($get_category))){
    $cat[]=$cat_result;
}
}
echo json_encode(($cat));

?>