<?php

class Infografis_File_model extends CI_model
{
    public function http_request_get($data, $function)
    {
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_post($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }
    // ======================= Model Functions ========================

    public function data_file_infografis(
        $id_provinsi,
        $kategori
    ) {
        $data = [
            'id_provinsi' => $id_provinsi,
            'kategori' => $kategori
        ];

        return $this->http_request_get($data, "/file/");
    }

    public function add_data_file_infografis(
        $id_provinsi,
        $nama_uojk,
        $jumlah_uojk,
        $kategori,
        $token
    ) {
        $data = [
            'idprovinsi' => $id_provinsi,
            'nama' => $nama_uojk,
            'jumlah' => $jumlah_uojk,
            'kategori' => $kategori
        ];

        return $this->http_request_post($data, "/", $token);
    }

}