<?php

class Infografis_model extends CI_model
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

    public function http_request_get_all($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
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
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_edit($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_delete($function, $data, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }
    // ======================= Model Functions ========================

    public function data_chart_infografis(
        $id_provinsi,
        $kategori
    ) {
        $data = [
            'id_provinsi' => $id_provinsi,
            'kategori' => $kategori
        ];

        return $this->http_request_get($data, "/");
    }

    public function data_table_chart_infografis($token, $id_provinsi, $kategori) {
        $data = [
            'id_provinsi' => $id_provinsi,
            'kategori' => $kategori
        ];
      
        return $this->http_request_get_all($data, "/all/", $token);
    }

    public function add_data_chart_infografis(
        $id_provinsi,
        $nama_infografis,
        $jumlah,
        $kategori,
        $token
    ) {
        $data = [
            'nama' => $nama_infografis,
            'jumlah' => $jumlah,
            'idprovinsi' => $id_provinsi,
            'kategori' => $kategori
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_data_chart_infografis(
        $nama_infografis,
        $jumlah,
        $idprovinsi,
        $kategori,
        $id,
        $token
    ) {
        $data = [
            'nama' => $nama_infografis,
            'jumlah' => $jumlah,
            'idprovinsi' => $idprovinsi,
            'kategori' => $kategori,
            'id' => $id
        ];

        return $this->http_request_edit($data, "/", $token);
    }

    public function delete_data_chart_infografis(
        $id,
        $token
    ) {
        $data = [
            'id' => $id
        ];

        return $this->http_request_delete( "/", $data, $token);
    }

}