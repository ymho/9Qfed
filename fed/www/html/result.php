<?php
require_once('/var/simplesamlphp/lib/_autoload.php');
//use ;
$as = new \SimpleSAML\Auth\Simple('default-sp');
$as->requireAuth();
$name=$as->getAuthData("saml:sp:NameID");
$attributes = $as->getAttributes();
$session = \SimpleSAML\Session::getSessionFromRequest();
$session->cleanup();

function post($url, $data){
    $header = [
        "Content-Type: application/json",
        "Accept: application/json"
    //    "Authorization: Bearer HogeHoge"
    ];
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_POST, TRUE);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    // 自己証明書利用時は下記2つをFALSEにする
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, FALSE);

    curl_setopt($curl,CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl,CURLOPT_FOLLOWLOCATION, TRUE);

    $result= curl_exec($curl);
    $errno = curl_errno($curl);
    $error = curl_error($curl);
    curl_close($curl);

    if ($errno !== CURLE_OK) {
        echo "Error".$errno;
        echo $error;
    }
    return json_decode($result,true);
}

if (!array_key_exists('idp2-url', $_POST)) {
    print ("idp-2を選択してください");
}
if (!array_key_exists('idp2-num', $_POST)) {
    print ("idp-2を入力してください");
}

$interest_idp2 = array(
        'num' => $_POST['idp2-num']
);
//print_r($interest_idp2);

// IdP-2に非保番を要求
$idp2_url = $_POST['idp2-url'].'/search/';
$result = post($idp2_url, $interest_idp2);

// DP
$dps = ['http://lg/search/', 'http://is/search/'];
$urls = [];

$interest_dp = array(
        'id' => $result['id']
);
//print_r($interest_dp);

foreach ($dps as $dp){
    $result_dp = post($dp, $interest_dp);
    $url[$result_dp['name']] = $result_dp['url'];
}

?>

<html>
<body>

<table>
    <h1>京大 太郎さんの検索結果</h1>
    <ul>
        <?php
            foreach($url as $key => $value) {
                echo '<li>';
                echo $key.": ";
                echo '<a href=' . $value . '>' . $value . '</a>';
                echo '</li>';
            }
        ?>
    </ul>

    <h2>Debug</h2>
    <thead>
    <tr>
        <th>項目</th>
        <th>内容</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>SAML Attributes</td>
        <td><?php print_r($attributes);?></td>
    </tr>
    <tr>
        <td>IdP-2's URL</td>
        <td><?php print_r($idp2_url);?></td>
    </tr>
    <tr>
        <td>IdP-2's POST Data</td>
        <td><?php print_r($interest_idp2)?></td>
    </tr>
    <tr>
        <td>IdP-2 Result<br></td>
        <td><?php print_r($result)?></td>
    </tr>
    <tr>
        <td>DP List</td>
        <td><?php print_r($dps)?></td>
    </tr>
    <tr>
        <td>DP's POST Data</td>
        <td><?php print_r($interest_dp)?></td>
    </tr>
    <tr>
        <td>DP Result</td>
        <td><?php print_r($url)?></td>
    </tr>
    </tbody>
</table>

</body>
</html>




