<?php

namespace App\Utilities;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Storage;

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

    public static function getGuzzleClientDof($url, $method, $action){
        $client = new Client([
            "base_uri" => $url
        ]);
        $response = $client->request(
            'GET',
            $action
        )->getBody()->getContents();
        $response = json_decode($response, true);
        return json_decode(json_encode($response), false);
    }

    public static function cleanString($str){
        $str = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä',
                    'é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë',
                    'í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î',
                    'ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô',
                    'ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü',
                    'ñ', 'Ñ', 'ç', 'Ç'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A',
                    'e', 'e', 'e', 'e', 'E', 'E', 'E', 'E',
                    'i', 'i', 'i', 'i', 'I', 'I', 'I', 'I',
                    'o', 'o', 'o', 'o', 'O', 'O', 'O', 'O',
                    'u', 'u', 'u', 'u', 'U', 'U', 'U', 'U',
                    'n', 'N', 'c', 'C'),
            $str
        );
        $str = utf8_encode($str);
    
        return $str;
    }

    public static function getDynamicUrl($str){
        $cleanTxt = strtolower(self::cleanString($str));
        $url = str_replace(" ", "-", $cleanTxt);
        return $url;
    }

    public static function getUploadFile($file, $disk){
        $file_route = time().'_'.$file->getClientOriginalName();
        Storage::disk($disk)->put($file_route, file_get_contents($file->getRealPath()));
        return $file_route;
    }
}
