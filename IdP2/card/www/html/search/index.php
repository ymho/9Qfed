<?php
header('Content-Type: application/json; charset=UTF-8');
//if(isset($_POST["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {
$raw = file_get_contents("php://input");
$post = json_decode($raw, true);
if (isset($post['num'])) {
    $arr['status'] = 'yes';
// ここでnumを使って被保番(id)を引っ張る
    $arr['id'] = '1234-123456-1';
    $arr['request'] = $post;
} else {
    $arr['status'] = 'no';
    $arr['request'] = $post;
}
print json_encode($arr);