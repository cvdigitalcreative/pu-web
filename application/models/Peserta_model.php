<?php

class Peserta_model extends CI_Model
{

    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/peserta" . $function;
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
        $url = API_URL . "/peserta" . $function;
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
        $id_jabker,
        $id_kompetensi,
        // $no_sertifikat,
        $file_foto_profil,
        $token
    ) {

        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
            'id_provinsi' => $id_provinsi,
            'id_kota_kabupaten' => $id_kota_kabupaten,
            'id_kecamatan' => $id_kecamatan,
            'id_kelurahan' => $id_kelurahan,
            'id_jenis_kelamin' => $id_jenis_kelamin,
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
            'id_jabker' => $id_jabker,
            'id_kompetensi' => $id_kompetensi,
            // 'no_sertifikat' => 0,
            'file_foto_profile' => $file_foto_profil
        ];

        return $this->http_request_post($data, "/", $token);
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
        $tempat_lahir,
        $tanggal_lahir,
        $nik,
        $rt,
        $rw,
        $kode_pos,
        $kode_area,
        $no_handphone,
        $id_status_rumah,
        $id_pendidikan,
        $id_jabker,
        $id_kompetensi,
        $nama_universitas,
        $jurusan,
        $tahun_lulus,
        // $no_sertifikat,
        $file_foto_profil,
        $npwp,
        $id_user_peserta,
        $token
    ) {

        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
            'id_provinsi' => $id_provinsi,
            'id_kota_kabupaten' => $id_kota_kabupaten,
            'id_kecamatan' => $id_kecamatan,
            'id_kelurahan' => $id_kelurahan,
            'id_jenis_kelamin' => $id_jenis_kelamin,
            'id_status_perkawinan' => $id_status_perkawinan,
            'nama_perusahaan' => $nama_perusahaan,
            'jabatan' => $jabatan,
            'utusan' => $utusan,
            'alamat_rumah' => $alamat_rumah,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'nik' => $nik,
            'rt' => $rt,
            'rw' => $rw,
            'kode_pos' => $kode_pos,
            'kode_area' => $kode_area,
            'no_handphone' => $no_handphone,
            'id_status_rumah' => $id_status_rumah,
            'id_pendidikan' => $id_pendidikan,
            'id_jabker' => $id_jabker,
            'id_kompetensi' => $id_kompetensi,
            'nama_universitas' => $nama_universitas,
            'jurusan' => $jurusan,
            'tahun_lulus' => $tahun_lulus,
            'file_foto_profile' => $file_foto_profil,
            'npwp' => $npwp
        ];

        return $this->http_request_post($data, "/$id_user_peserta", $token);
    }

    public function delete_peserta($id_user_peserta, $token)
    {
        return $this->http_request_delete("/$id_user_peserta", $token);
    }

    public function view_seluruh_peserta($id_jadwal_kegiatan, $token)
    {
        return $this->http_request_get("/?id_jadwal_kegiatan=$id_jadwal_kegiatan", $token);
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
