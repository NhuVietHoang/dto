<?php

use module\src\User;

include 'module/autoload.php';

$info = [
    ['name' => "Nhu Viet Hoang", 'age' => 22, 'address' => 'Ha Nam'],
    ['name' => "Nhu Hai Ngoc", 'age' => 28, 'address' => 'Ha Nam'],
    ['name' => 'Hoang Thi Thom', 'age' => 27, 'address' => 'Thanh Hoa'],
    ['name' => 'Nhu Hoang Minh Khoi', 'age' => 1, 'address' => "Ha Nam"]
];

$user = User::from(['Name' => 'Nhu Viet Hoang', 'email' => 'viethoangnhu@gmail.com']);
echo $user->name."<br>";
echo $user->email."<br>";
$user->name = "VNP Group";
$data = \module\src\TestData::collection($info);
var_dump($data);