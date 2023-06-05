<?php
include("config.php");
$data = file_get_contents("php://input");
$input_data= json_decode($data, true);
$input=$input_data['input'];
// $input="Tablet";
$output=array();
$search_query=mysqli_query($con, "SELECT * FROM medicine_category WHERE name LIKE '%{$input}%'");
if(mysqli_num_rows($search_query) > 0){
  
while($output_result=mysqli_fetch_assoc($search_query)){
$output[] = $output_result;
}
}else{
   $output['output']="No";
}
echo json_encode($output);
?>