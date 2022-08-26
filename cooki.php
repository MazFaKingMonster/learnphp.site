<?php
$str = '1234';
$user = [
    'name' => 'max',
    'login' => 'root',
    'password' => $str
];
echo serialize($user);
?>