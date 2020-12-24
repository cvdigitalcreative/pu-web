<?php

class Peserta_model extends CI_Model
{

    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authentication: ' . $token];
        $curl = curl_init();
        $url = API_URL . "/peserta" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_post($data, $function)
    {
        $curl = curl_init();
        $url = API_URL . "/peserta" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
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
        $url = API_URL . "/peserta" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_peserta(
        $nama,
        $email,
        $no_telpon,
        $id_provinsi,
        $id_kota_kabupaten,
        $id_kecamatan,
        $id_kelurahan,
        $id_jenis_kelamin,
        $id_status_perkawinan,
        $nama_perusahaan,
        $jabatan,
        $utusan,
        $alamat_rumah,
        $nik,
        $rt,
        $rw,
        $kode_pos,
        $kode_area,
        $no_handphone,
        $id_status_rumah,
        $id_pendidikan,
        $id_kompetensi,
        $no_sertifikat,
        $file_foto_profil
    ) {

        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
            'id_provinsi' => $id_provinsi,
            'id_kota_kabupaten' => $id_kota_kabupaten,
            'id_kecamatan' => $id_kecamatan,
            'id_kelurahan' => $id_kelurahan,
            'id_kenis_kelamin' => $id_jenis_kelamin,
            'id_status_perkawinan' => $id_status_perkawinan,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'utusan' => $utusan,
            'alamat_rumah' => $alamat_rumah,
            'nik' => $nik,
            'rt' => $rt,
            'rw' => $rw,
            'kode_pos' => $kode_pos,
            'kode_area' => $kode_area,
            'no_handphone' => $no_handphone,
            'id_status_rumah' => $id_status_rumah,
            'id_pendidikan' => $id_pendidikan,
            'id_kompetensi' => $id_kompetensi,
            'no_sertifikat' => $no_sertifikat,
            'file_foto_profil' => $file_foto_profil
        ];

        return $this->http_request_post($data, "/");
    }

    public function edit_peserta(
        $nama,
        $email,
        $no_telpon,
        $id_provinsi,
        $id_kota_kabupaten,
        $id_kecamatan,
        $id_kelurahan,
        $id_jenis_kelamin,
        $id_status_perkawinan,
        $nama_perusahaan,
        $jabatan,
        $utusan,
        $alamat_rumah,
        $nik,
        $rt,
        $rw,
        $kode_pos,
        $kode_area,
        $no_handphone,
        $id_status_rumah,
        $id_pendidikan,
        $id_kompetensi,
        $no_sertifikat,
        $file_foto_profil,
        $id_user_peserta
    ) {

        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
            'id_provinsi' => $id_provinsi,
            'id_kota_kabupaten' => $id_kota_kabupaten,
            'id_kecamatan' => $id_kecamatan,
            'id_kelurahan' => $id_kelurahan,
            'id_kenis_kelamin' => $id_jenis_kelamin,
            'id_status_perkawinan' => $id_status_perkawinan,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'utusan' => $utusan,
            'alamat_rumah' => $alamat_rumah,
            'nik' => $nik,
            'rt' => $rt,
            'rw' => $rw,
            'kode_pos' => $kode_pos,
            'kode_area' => $kode_area,
            'no_handphone' => $no_handphone,
            'id_status_rumah' => $id_status_rumah,
            'id_pendidikan' => $id_pendidikan,
            'id_kompetensi' => $id_kompetensi,
            'no_sertifikat' => $no_sertifikat,
            'file_foto_profil' => $file_foto_profil
        ];

        return $this->http_request_post($data, "/$id_user_peserta");
    }

    public function delete_peserta($id_user_peserta, $token)
    {
        return $this->http_request_delete("/$id_user_peserta", $token);
    }

    public function view_seluruh_peserta($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function view_peserta_daerah($id_provinsi, $token)
    {
        return $this->http_request_get("/provinsi/$id_provinsi", $token);
    }

    public function view_detail_peserta($id_user_peserta, $token)
    {

        return $this->http_request_get("/$id_user_peserta", $token);
    }
}
