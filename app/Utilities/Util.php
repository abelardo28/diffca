<?php

namespace App\Utilities;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;

class Util {

    public static function getGuzzleClient($url, $method, $action){
        $client = new Client([
            "base_uri" => $url
        ]);
        $response = $client->request(
            'GET',
            $action.'?token='.env('API_BANXICO_TOKEN')
        )->getBody()->getContents();
        $datas = json_decode($response)->bmx->series[0]->datos;
        foreach ($datas as $value) {
            $date = $value->fecha;
            $value = (double)$value->dato;
            $info[] = [$date,$value];
        }
        return json_decode(json_encode($info), true);
    }
}
