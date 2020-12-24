<?php

class Peserta_Kegiatan_model extends CI_Model
{

    public function http_request_update($data, $function, $token)
    {
        $dataHeader = ['Authentication: ' . $token];
        $curl = curl_init();
        $url = API_URL . "/peserta-kegiatan" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function update_peserta_kegiatan(
        $id_peserta,
        $id_status_peserta_kegiatan,
        $id_jadwal_kegiatan,
        $token
    ) {
        $data = [
            'id_peserta' => $id_peserta,
            'id_status_peserta_kegiatan' => $id_status_peserta_kegiatan
        ];

        $this->http_request_update($data, "/$id_jadwal_kegiatan", $token);
    }
}
