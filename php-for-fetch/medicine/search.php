<?php
include("config.php");
$data = file_get_contents("php://input");
$input_data = json_decode($data, true);
$input= $input_data['input'];
$select = mysqli_query($con, "SELECT * FROM medicine where name LIKE'%{$input}%' ");
$output=array();
if(mysqli_num_rows($select) > 0){
    while($result = mysqli_fetch_assoc($select)){
        $output[] = $result;
    }
}else{
    $output['no_output']= "No";
}
echo json_encode($output);
?>