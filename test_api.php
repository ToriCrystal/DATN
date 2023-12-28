<?php

$token_shop = '03a196a7-9195-11ee-8bfa-8a2dda8ec551';
$shop_id = '190366';
$data = '{
    "from_district_id":1454,
    "from_ward_code":"21207",
    "service_id":53320,
    "service_type_id":null,
    "to_district_id":1734,
    "to_ward_code":"160509",
    "height":50,
    "length":20,
    "weight":200,
    "width":20,
    "insurance_value":10000,
    "cod_failed_amount":2000,
    "coupon": null
}';

$url_rq = 'https://dev-online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee';

$Data = is_array($data) ? json_encode($data) : $data;
$curl = curl_init();
$header[] = 'Content-Type: application/json; charset=utf-8';
$header[] = 'ShopID: '.$shop_id;
$header[] = 'Token: '.$token_shop;
$opt = array(
    CURLOPT_URL => $url_rq,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_ENCODING => "",
    CURLOPT_POST => empty($data) ? FALSE : TRUE,
    CURLOPT_POSTFIELDS => $Data,
    CURLOPT_CUSTOMREQUEST => empty($data) ? 'GET' : 'POST',
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_HEADER => FALSE,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_TIMEOUT => 20,
);
curl_setopt_array($curl, $opt);
$body = curl_exec($curl);
if (is_object(json_decode($body))) {
    $json = json_decode($body, true);
}else {
    $json = json_decode($body, true);
}

print_r($json);



// $Data = is_array($data) ? json_encode($data) : $data;
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://dev-online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     'Content-Type: application/json; text/plain',
//     'Token: '.$token_shop,
//     'ShopId: '.$shop_id,
// ]);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $Data);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// $response = curl_exec($ch);
// $json = json_decode($response, true);
// print_r($json);
// curl_close($ch);


?>
