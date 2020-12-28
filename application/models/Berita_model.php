<?php

class Berita_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/berita" . $function;
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
        $url = API_URL . "/berita" . $function;
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
        $url = API_URL . "/berita" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_berita(
        $judul_berita,
        $deskripsi_berita,
        $file_berita,
        $token
    ) {
        $data = [
            'judul_berita' => $judul_berita,
            'deskripsi_berita' => $deskripsi_berita,
            'file__gambar_berita' => $file_berita
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_berita(
        $judul_berita,
        $deskripsi_berita,
        $file_berita,
        $id_berita,
        $token
    ) {
        $data = [
            'judul_berita' => $judul_berita,
            'deskripsi_berita' => $deskripsi_berita,
            'file_gambar_berita' => $file_berita
        ];

        return $this->http_request_post($data, "/$id_berita", $token);
    }

    public function delete_berita($id_berita, $token)
    {
        return $this->http_request_delete("/$id_berita", $token);
    }

    public function view_berita($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function view_berita_detail($id_berita, $token)
    {
        return $this->http_request_get("/$id_berita", $token);
    }
}
