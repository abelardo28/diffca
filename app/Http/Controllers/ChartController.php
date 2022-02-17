<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilities\Util;

class ChartController extends Controller
{
    public function json_tipo_cambio(){
        $last_date = date("Y-m-d",strtotime(date("d-m-Y")."- 3 month"));
        $response = Util::getGuzzleClient('https://www.banxico.org.mx', 'GET', "/SieAPIRest/service/v1/series/SF63528/datos/{$last_date}/".date('Y-m-d'));
        return $response;
    }

    public static function json_inpc(){
        $last_date = date("Y-m-d",strtotime(date("d-m-Y")."- 32 month"));
        $response = Util::getGuzzleClient('https://www.banxico.org.mx', 'GET', "/SieAPIRest/service/v1/series/SP1/datos/{$last_date}/".date('Y-m-d'));
        return $response;
    }

    public function json_udis(){
        $response = Util::getGuzzleClient('https://www.banxico.org.mx', 'GET', '/SieAPIRest/service/v1/series/SP68257/datos/oportuno');
        return $response;
    }

    public function json_tiie(){
        $response = Util::getGuzzleClient('https://www.banxico.org.mx', 'GET', '/SieAPIRest/service/v1/series/SF43783/datos/oportuno');
        return $response;
    }

    public function json_mora(){
        $last_date = date("Y-m-d",strtotime(date("d-m-Y")."- 32 month"));
        $response = Util::getGuzzleClient('https://www.banxico.org.mx', 'GET', "/SieAPIRest/service/v1/series/SP1/datos/{$last_date}/".date('Y-m-d'));
        return $response;
    }

    public function json_plazo(){
        $last_date = date("Y-m-d",strtotime(date("d-m-Y")."- 32 month"));
        $response = Util::getGuzzleClient('https://www.banxico.org.mx', 'GET', "/SieAPIRest/service/v1/series/SP1/datos/{$last_date}/".date('Y-m-d'));
        return $response;
    }
}
