<?php
$arr = [4,5,6];
$arr2 = array($arr, 'hocsinh1' => 'Vinh');
print_r($arr2);

file_put_contents('sample.txt', json_encode($arr2) . "\n");

echo "Done!!!\n";