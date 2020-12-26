<?php

class Administrasi_Kegiatan_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/administrasi-kegiatan" . $function;
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
        $url = API_URL . "/administrasi-kegiatan" . $function;
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
        $url = API_URL . "/administrasi-kegiatan" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_administrasi_kegiatan(
        $judul_administrasi_kegiatan,
        $deskripsi_administrasi_kegiatan,
        $file_administrasi_kegiatan,
        $token
    ) {
        $data = [
            'judul_administrasi_kegiatan' => $judul_administrasi_kegiatan,
            'deskripsi_administrasi_kegiatan' => $deskripsi_administrasi_kegiatan,
            'deskripsi_administrasi_kegiatan' => $file_administrasi_kegiatan
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_administrasi_kegiatan(
        $judul_administrasi_kegiatan,
        $deskripsi_administrasi_kegiatan,
        $file_administrasi_kegiatan,
        $id_administrasi_kegiatan,
        $token
    ) {
        $data = [
            'judul_administrasi_kegiatan' => $judul_administrasi_kegiatan,
            'deskripsi_administrasi_kegiatan' => $deskripsi_administrasi_kegiatan,
            'deskripsi_administrasi_kegiatan' => $file_administrasi_kegiatan
        ];

        return $this->http_request_post($data, "/$file_administrasi_kegiatan", $token);
    }

    public function delete_administrasi_kegiatan($id_administrasi_kegiatan, $token)
    {
        return $this->http_request_delete("/$id_administrasi_kegiatan", $token);
    }

    public function view_administrasi_kegiatan($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function view_administrasi_kegiatan_detail($id_administrasi_kegiatan, $token)
    {
        return $this->http_request_get("/$id_administrasi_kegiatan", $token);
    }
}
