<?php
header('Content-Type: application/json; charset=UTF-8');
//if(isset($_POST["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {

$raw = file_get_contents("php://input");
$post = json_decode($raw, true);
if (isset($post['id'])) {
    $arr['status'] = 'yes';
    $arr['url'] = 'https://lg.example.edu/';
    $arr['name'] = '●●● City\'s PHR';
} else {
    $arr['status'] = 'no';
}
print json_encode($arr);