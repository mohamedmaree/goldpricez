<?php
namespace Maree\GoldPricez;

use Illuminate\Support\Facades\Http;

class GoldPricez {

    //to return both and gold send ['metal'=>'all']
    public static function getPrices(array $options = ['currency' => 'egp','measure'=>'gram','metal'=>'all']){
        $gold_and_silver = (isset($options['metal']))? "/metal/".$options['metal'] : '' ;
        $url = "http://goldpricez.com/api/rates/currency/".$options['currency']."/measure/".$options['measure'].$gold_and_silver;
        $response = Http::withHeaders([
            'Accept'        => 'application/json',
            'Content-Type'  => 'application/json',
            'X-API-KEY' => config('GoldPricez.API_KEY')
        ])->get($url);
        $responseResult = json_decode($response->getBody()->getContents(), true);
        if(isset($responseResult['status'])){
            return json_encode($responseResult);
        }
        $responseResult = json_decode($responseResult, true);
        return json_encode($responseResult);
    }

}