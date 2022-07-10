<?php
require_once('/var/simplesamlphp/lib/_autoload.php');
//use ;
$as = new \SimpleSAML\Auth\Simple('default-sp');
$as->requireAuth();
$name=$as->getAuthData("saml:sp:NameID");
$attributes = $as->getAttributes();
//print_r($attributes);
$session = \SimpleSAML\Session::getSessionFromRequest();
$session->cleanup();
?>

<html>
<body>
<h1>こんにちは <?php echo($attributes["uid"][0]); ?></h1>
<a href="https://fed.example.org/simplesaml/module.php/core/authenticate.php?as=default-sp&logout">logout</a>

<form action="result.php" method="post">
    <label for="idp2-select">Choose a IdP-2:</label>
    <select name="idp2-url" id="idp2-select">
        <option value="">--Please choose an option--</option>
        <option value="http://card">Credit Card</option>
        <option value="http://card">Driver License</option>
    </select>
    <label for="idp2-input">Input IdP-2's Number:</label>
    <input name="idp2-num" id="idp2-input">
    <input type="submit" />
</form>

<body>
</html>