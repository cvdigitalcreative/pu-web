<?php

class Infografis_model extends CI_model
{
    public function http_request_get($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function data_chart_balai(
        $id_provinsi,
        $kategori,
        $token
    ) {
        $data = [
            'id_provinsi' => $id_provinsi,
            'kategori' => $kategori
        ];

        return $this->http_request_get($data, "/", $token);
    }
}