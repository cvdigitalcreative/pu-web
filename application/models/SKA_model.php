<?php

class SKA_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/ska" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
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
        $url = API_URL . "/ska" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_update($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/ska" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_delete($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/ska" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_SKA(
        $judul_ska,
        $deskripsi_ska,
        $id_kategori_ska,
        $file_ska,
        $token
    ) {
        $data = [
            'judul_ska' => $judul_ska,
            'deskripsi_ska' => $deskripsi_ska,
            'id_kategori_ska' => $id_kategori_ska,
            'file_ska' => $file_ska,
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_SKA(
        $judul_ska,
        $deskripsi_ska,
        $id_kategori_ska,
        $file_ska,
        $id_ska,
        $token
    ) {
        $data = [
            'judul_ska' => $judul_ska,
            'deskripsi_ska' => $deskripsi_ska,
            'id_kategori_ska' => $id_kategori_ska,
            'file_ska' => $file_ska,
        ];

        return $this->http_request_update($data, "/$id_ska", $token);
    }

    public function delete_SKA($id_ska, $token)
    {
        return $this->http_request_delete("/$id_ska", $token);
    }

    public function view_SKA($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function view_SKA_detail($id_ska, $token)
    {
        return $this->http_request_get("/$id_ska", $token);
    }
}
