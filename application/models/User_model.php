<?php

class User_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/user" . $function;
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
        $url = API_URL . "/user" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_post_with_token($data, $function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/user" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    public function http_request_update($data, $function)
    {
        $curl = curl_init();
        $url = API_URL . "/user" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function login($email_no_telepon, $password)
    {
        $data = [
            'email_no_telepon' => $email_no_telepon,
            'password' => $password
        ];

        return $this->http_request_post($data, "/login");
    }

    public function register($nama, $email, $no_telpon, $password)
    {
        $data = [
            'nama' => $nama,
            'email' => $email,
            'no_telpon' => $no_telpon,
            'password' => $password
        ];

        return $this->http_request_post($data, "/register");
    }

    public function email_verification($id_user)
    {
        return $this->http_request_post(null, "/email-verification/$id_user");
    }

    public function view_user_detail($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function edit_user_detail(
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

        return $this->http_request_post_with_token($data, "/", $token);
    }

    public function forgot_password($email_no_telepon)
    {
        $data = [
            'email_no_telepon' => $email_no_telepon
        ];

        return $this->http_request_post($data, "/forgot-password");
    }

    public function change_password($id_forgot_password, $new_password)
    {
        $data = [
            'new_password' => $new_password
        ];

        $data = http_build_query($data);

        return $this->http_request_update($data, "/forgot-password/change-password/$id_forgot_password");
    }
}
