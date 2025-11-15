<?php

namespace Ak\Exchange\Request;

/**
 * Класс Nbrb
 *
 * Этот класс предназначен для взаимодействия с API
 * для получения информации о курсах валют.
 */
class Nbrb
{
    public mixed $currencies;
    public function __construct()
    {
        $this->currencies = $this->getCurrencies();
    }

    private function getCurrencies()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.nbrb.by/exrates/currencies',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }
}