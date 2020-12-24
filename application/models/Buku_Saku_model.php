<?php

class Buku_Saku_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authentication: ' . $token];
        $curl = curl_init();
        $url = API_URL . "/buku-saku" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_post($data, $function, $token)
    {
        $dataHeader = ['Authentication: ' . $token];
        $curl = curl_init();
        $url = API_URL . "/buku-saku" . $function;
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
        $dataHeader = ['Authentication: ' . $token];
        $curl = curl_init();
        $url = API_URL . "/buku-saku" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_buku_saku(
        $judul_buku_saku,
        $deskripsi_buku_saku,
        $file_buku_saku,
        $token
    ) {
        $data = [
            'judul_buku_saku' => $judul_buku_saku,
            'deskripsi_buku_saku' => $deskripsi_buku_saku,
            'file_buku_saku' => $file_buku_saku
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_buku_saku(
        $judul_buku_saku,
        $deskripsi_buku_saku,
        $file_buku_saku,
        $id_buku_saku,
        $token
    ) {
        $data = [
            'judul_buku_saku' => $judul_buku_saku,
            'deskripsi_buku_saku' => $deskripsi_buku_saku,
            'file_buku_saku' => $file_buku_saku
        ];

        return $this->http_request_post($data, "/$id_buku_saku", $token);
    }

    public function delete_buku_saku($id_buku_saku, $token)
    {
        return $this->http_request_delete("/$id_buku_saku", $token);
    }

    public function view_buku_saku($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function view_buku_saku_detail($id_buku_saku, $token)
    {
        return $this->http_request_get("/$id_buku_saku", $token);
    }
}
