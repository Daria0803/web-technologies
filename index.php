<?php
$data = json_decode(file_get_contents('php://input'));
$filtered_name = filter_var($data->name, FILTER_SANITIZE_STRING);
$filtered_age = filter_var($data->age, FILTER_SANITIZE_NUMBER_INT);

echo "My name is {$filtered_name} and I'm {$filtered_age}";
?>
