<?php


namespace App\Services;

use GuzzleHttp\Client;

class GHNService
{
    protected $baseUrl = 'https://online-gateway.ghn.vn/shiip/public-api/v2/';

    protected $apiKey = 'bc38f4ab-8d37-11ee-96dc-de6f804954c9';

    public function getShippingFee($toDistrictCode, $toWardCode, $weight)
    {
        $client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Token' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);

        $body = [
            'shop_id' => 4727014, // Thay thế bằng shop_id của bạn
            'to_district_id' => $toDistrictCode,
            'to_ward_code' => $toWardCode,
            'weight' => $weight,
        ];

        $response = $client->post('calculate', [
            'json' => $body,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}


?>
