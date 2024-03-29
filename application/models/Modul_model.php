<?php

class Modul_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/modul" . $function;
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
        $url = API_URL . "/modul" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
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
        $url = API_URL . "/modul" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_modul(
        $judul_modul,
        $deskripsi_modul,
        $id_kategori_modul,
        $file_modul,
        $token
    ) {
        $data = [
            'judul_modul' => $judul_modul,
            'deskripsi_modul' => $deskripsi_modul,
            'id_kategori_modul' => $id_kategori_modul,
            'file_modul' => $file_modul
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_modul(
        $judul_modul,
        $deskripsi_modul,
        $id_kategori_modul,
        $file_modul,
        $id_modul,
        $token
    ) {
        $data = [
            'judul_modul' => $judul_modul,
            'deskripsi_modul' => $deskripsi_modul,
            'id_kategori_modul' => $id_kategori_modul,
            'file_modul' => $file_modul
        ];

        return $this->http_request_post($data, "/$id_modul", $token);
    }

    public function delete_modul($id_modul, $token)
    {
        return $this->http_request_delete("/$id_modul", $token);
    }

    public function view_modul($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function view_modul_detail($id_modul, $token)
    {
        return $this->http_request_get("/$id_modul", $token);
    }
}
