<?php
header('Content-Type: application/json; charset=UTF-8');
//if(isset($_POST["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {

$raw = file_get_contents("php://input");
$post = json_decode($raw, true);
if (isset($post['id'])) {
    $arr['status'] = 'yes';
    $arr['url'] = 'https://is.example.edu/';
    $arr['name'] = '●●● Insurance\'s Receipt';
} else {
    $arr['status'] = 'no';
}
print json_encode($arr);