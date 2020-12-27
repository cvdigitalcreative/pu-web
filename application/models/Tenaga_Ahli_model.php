<?php

class Tenaga_Ahli_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/tenaga-ahli" . $function;
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
        $url = API_URL . "/tenaga-ahli" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_POST, TRUE);
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
        $url = API_URL . "/tenaga-ahli" . $function;
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
        $url = API_URL . "/tenaga-ahli" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_tenaga_ahli(
        $nama_lengkap,
        $tempat_lahir,
        $tanggal_lahir,
        $id_jenis_kelamin,
        $nik,
        $email,
        $alamat_rumah,
        $id_provinsi,
        $id_kabupaten_kota,
        $no_telepon_rumah,
        $no_handphone,
        $id_jabker,
        $id_kategori_tenaga_ahli,
        $token
    ) {
        $data = [
            'nama_lengkap' => $nama_lengkap,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'id_jenis_kelamin' => $id_jenis_kelamin,
            'nik' => $nik,
            'email' => $email,
            'alamat_rumah' => $alamat_rumah,
            'id_provinsi' => $id_provinsi,
            'id_kabupaten_kota' => $id_kabupaten_kota,
            'no_telpon_rumah' => $no_telepon_rumah,
            'no_handphone' => $no_handphone,
            'id_jabker' => $id_jabker,
            'id_kategori_tenaga_ahli' => $id_kategori_tenaga_ahli,
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_tenaga_ahli(
        $nama_lengkap,
        $tempat_lahir,
        $tanggal_lahir,
        $id_jenis_kelamin,
        $nik,
        $email,
        $alamat_rumah,
        $id_provinsi,
        $id_kabupaten_kota,
        $no_telepon_rumah,
        $no_handphone,
        $id_jabker,
        $id_kategori_tenaga_ahli,
        $id_tenaga_ahli,
        $token
    ) {
        $data = [
            'nama_lengkap' => $nama_lengkap,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'id_jenis_kelamin' => $id_jenis_kelamin,
            'nik' => $nik,
            'email' => $email,
            'alamat_rumah' => $alamat_rumah,
            'id_provinsi' => $id_provinsi,
            'id_kabupaten_kota' => $id_kabupaten_kota,
            'no_telpon_rumah' => $no_telepon_rumah,
            'no_handphone' => $no_handphone,
            'id_jabker' => $id_jabker,
            'id_kategori_tenaga_ahli' => $id_kategori_tenaga_ahli,
        ];


        $data = http_build_query($data);

        return $this->http_request_update($data, "/$id_tenaga_ahli", $token);
    }

    public function delete_tenaga_ahli($id_tenaga_ahli, $token)
    {
        return $this->http_request_delete("/$id_tenaga_ahli", $token);
    }

    public function view_seluruh_tenaga_ahli($id_kategori_tenaga_ahli, $token)
    {
        return $this->http_request_get("/$id_kategori_tenaga_ahli", $token);
    }

    public function view_tenaga_ahli_by_provinsi($id_provinsi, $id_kategori_tenaga_ahli, $token)
    {
        return $this->http_request_get("/provinsi/$id_provinsi?id_kategori_tenaga_ahli=$id_kategori_tenaga_ahli", $token);
    }

    public function view_detail_tenaga_ahli($id_tenaga_ahli, $token)
    {
        return $this->http_request_get("/$id_tenaga_ahli", $token);
    }

    public function delete_jabatan_kerja($id_jabker, $token)
    {
        return $this->http_request_get("/jabatan-kerja-ahli/$id_jabker", $token);
    }
}
