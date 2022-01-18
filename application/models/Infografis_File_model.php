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
    
    public function http_request_get_all($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis/file" . $function;
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
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_put($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL_LOCAL . "/infografis/file" . $function;
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


    public function add_data_file_infografis(
        $file_infografis,
        $idprovinsi,
        $kategori,
        $token
    ) {
        $data = [
            'file_infografis' => $file_infografis,
            'idprovinsi' => $idprovinsi,
            'kategori' => $kategori
        ];
        return $this->http_request_post($data, "/file/", $token);
    }

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

    public function data_table_file_infografis($token, $id_provinsi, $kategori) {
        $data = [
            'id_provinsi' => $id_provinsi,
            'kategori' => $kategori
        ];
      
        return $this->http_request_get_all($data, "/all/", $token);
    }

    public function edit_infografis_file(
        $file_infografis,
        $id,
        $token
    ) {
        $data = [
            'file_infografis' => $file_infografis,
            'id' => $id
        ];

        return $this->http_request_put($data, "/", $token);
    }

    public function delete_infografis_file(
        $id,
        $token
    ) {
        $data = [
            'id' => $id
        ];

        return $this->http_request_delete( "/file/", $data, $token);
    }

}