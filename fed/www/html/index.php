<?php
require_once('/var/simplesamlphp1/lib/_autoload.php');

// Step1
$as = new \SimpleSAML\Auth\Simple('default-sp');
$as->requireAuth();
$attributes = $as->getAttributes();
print_r($attributes);
$session = \SimpleSAML\Session::getSessionFromRequest();
$session->cleanup();

// Step2
require_once('/var/simplesamlphp2/lib/_autoload.php');
//use ;
$as = new \SimpleSAML\Auth\Simple('default-sp');
$as->requireAuth();
$attributes = $as->getAttributes();
print_r($attributes);
$session = \SimpleSAML\Session::getSessionFromRequest();
$session->cleanup();
?>

<html>
<body>
<h1>こんにちは <?php echo ($attributes["uid"][0]); ?></h1>
<a href="https://fed.example.org/simplesaml/module.php/core/authenticate.php?as=default-sp&logout">logout</a>
<body>


</html>