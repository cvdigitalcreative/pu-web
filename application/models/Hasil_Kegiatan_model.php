<?php

class Hasil_Kegiatan_model extends CI_Model
{

    public function http_request_post($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/hasil-kegiatan" . $function;
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
        $url = API_URL . "/hasil-kegiatan" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_hasil_kegiatan(
        $id_peserta,
        $id_jadwal_kegiatan,
        $nomor_sertifikat,
        $file_sertifikat,
        $id_jabker,
        $token
    ) {
        $data = [
            'id_peserta' => $id_peserta,
            'id_jadwal_kegiatan' => $id_jadwal_kegiatan,
            'nomor_sertifikat' => $nomor_sertifikat,
            'file_sertifikat' => $file_sertifikat,
            'id_jabker' => $id_jabker
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_hasil_kegiatan(
        $id_peserta,
        $id_jadwal_kegiatan,
        $nomor_sertifikat,
        $file_sertifikat,
        $id_jabker,
        $id_hasil_kegiatan,
        $token
    ) {
        $data = [
            'id_peserta' => $id_peserta,
            'id_jadwal_kegiatan' => $id_jadwal_kegiatan,
            'nomor_sertifikat' => $nomor_sertifikat,
            'file_sertifikat' => $file_sertifikat,
            'id_jabker' => $id_jabker
        ];

        return $this->http_request_post($data, "/$id_hasil_kegiatan", $token);
    }

    public function delete_hasil_kegiatan($id_hasil_kegiatan, $token)
    {
        return $this->http_request_delete("/$id_hasil_kegiatan", $token);
    }
}
