<?php
$json = file_get_contents('credential.json');

echo "json: $json";

$arr = json_decode($json, true);
echo "arr: \n";
print_r($arr);