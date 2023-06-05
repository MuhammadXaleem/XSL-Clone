<?php
include("config.php");
$json_data = file_get_contents("file.json");
$data = json_decode($json_data, true);

foreach ($data as $ele) {
    print_r($ele);
    echo "<br>";
}

?>