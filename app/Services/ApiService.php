<?php


namespace App\Services;


class ApiService
{
    protected $apiKey = 'mMA20PrcRiMxjqAZ7xP-qYPcQFYbX593m_JswzevDWwdSQYPdQxU4RqhCv_ki4g8k1Rjp4V0W6fBdx0dbI86teVmt68iTjZQoCmH3RuH0IlccnEknoDXK4-ywnT5YHYx';
    protected $url = 'https://api.yelp.com/v3/businesses/search?location=Melbourne&limit=20';

    public function getData()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '. $this->apiKey
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        if ($response){
            return json_decode($response);
        }else {
            return 'error';
        }
    }
}
