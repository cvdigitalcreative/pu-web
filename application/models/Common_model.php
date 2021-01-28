<?php

class Common_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/common" . $function;
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
        $url = API_URL . "/common" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
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
        $url = API_URL . "/common" . $function;
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
        $url = API_URL . "/common" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function view_jenis_kelamin($token)
    {
        return $this->http_request_get("/jenis-kelamin", $token);
    }

    // ===================== status perkawinan =============================
    public function view_status_perkawinan($token)
    {
        return $this->http_request_get("/status-perkawinan", $token);
    }

    public function add_status_perkawinan($nama_status_perkawinan, $token)
    {
        $data = [
            'status_perkawinan' => $nama_status_perkawinan
        ];
        return $this->http_request_post($data, "/status-perkawinan", $token);
    }

    public function edit_status_perkawinan($nama_status_perkawinan, $id_status_perkawinan, $token)
    {
        $data = [
            'status_perkawinan' => $nama_status_perkawinan
        ];
        return $this->http_request_update($data, "/status-perkawinan/$id_status_perkawinan", $token);
    }

    public function delete_status_perkawinan($id_status_perkawinan, $token)
    {
        return $this->http_request_delete("/status-perkawinan/$id_status_perkawinan", $token);
    }

    // ================================== status rumah ====================================
    public function view_status_rumah($token)
    {
        return $this->http_request_get("/status-rumah", $token);
    }

    public function add_status_rumah($nama_status_rumah, $token)
    {
        $data = [
            'status_rumah' => $nama_status_rumah
        ];
        return $this->http_request_post($data, "/status-rumah", $token);
    }

    public function edit_status_rumah($nama_status_rumah, $id_status_rumah, $token)
    {
        $data = [
            'status_rumah' => $nama_status_rumah
        ];
        return $this->http_request_update($data, "/status-rumah/$id_status_rumah", $token);
    }

    public function delete_status_rumah($id_status_rumah, $token)
    {
        return $this->http_request_delete("/status-rumah/$id_status_rumah", $token);
    }

    // ================================ Pendidikan ================================
    public function view_pendidikan($token)
    {
        return $this->http_request_get("/pendidikan", $token);
    }

    public function add_pendidikan($nama_pendidikan, $token)
    {
        $data = [
            'pendidikan' => $nama_pendidikan
        ];
        return $this->http_request_post($data, "/pendidikan", $token);
    }

    public function edit_pendidikan($nama_pendidikan, $id_pendidikan, $token)
    {
        $data = [
            'pendidikan' => $nama_pendidikan
        ];
        return $this->http_request_update($data, "/pendidikan/$id_pendidikan", $token);
    }

    public function delete_pendidikan($id_pendidikan, $token)
    {
        return $this->http_request_delete("/pendidikan/$id_pendidikan", $token);
    }

    // ================================ jabker ================================
    public function view_jabker($token)
    {
        return $this->http_request_get("/jabker", $token);
    }

    public function add_jabker($nama_jabker, $token)
    {
        $data = [
            'jabker' => $nama_jabker
        ];
        return $this->http_request_post($data, "/jabker", $token);
    }

    public function edit_jabker($nama_jabker, $id_jabker, $token)
    {
        $data = [
            'jabker' => $nama_jabker
        ];
        return $this->http_request_update($data, "/jabker/$id_jabker", $token);
    }

    public function delete_jabker($id_jabker, $token)
    {
        return $this->http_request_delete("/jabker/$id_jabker", $token);
    }

    // ========================== provinsi ======================================
    public function view_provinsi($token)
    {
        return $this->http_request_get("/provinsi", $token);
    }

    public function add_provinsi($nama_provinsi, $token)
    {
        $data = [
            'provinsi' => $nama_provinsi
        ];
        return $this->http_request_post($data, "/provinsi", $token);
    }

    public function edit_provinsi($nama_provinsi, $id_provinsi, $token)
    {
        $data = [
            'provinsi' => $nama_provinsi
        ];
        return $this->http_request_update($data, "/provinsi/$id_provinsi", $token);
    }

    public function delete_provinsi($id_provinsi, $token)
    {
        return $this->http_request_delete("/provinsi/$id_provinsi", $token);
    }

    // =============================== Kabupaten Kota ================================
    public function view_kabupaten_kota($id_provinsi, $token)
    {
        return $this->http_request_get("/kabupaten-kota/$id_provinsi", $token);
    }

    public function view_kabupaten_kota_all($token)
    {
        return $this->http_request_get("/kabupaten-kota", $token);
    }

    public function add_kabupaten_kota($nama_kabupaten_kota, $id_provinsi, $token)
    {
        $data = [
            'kabupaten_kota' => $nama_kabupaten_kota
        ];
        return $this->http_request_post($data, "/kabupaten-kota/$id_provinsi", $token);
    }

    public function edit_kabupaten_kota($nama_kabupaten_kota, $id_kabupaten_kota, $token)
    {
        $data = [
            'kabupaten_kota' => $nama_kabupaten_kota
        ];
        return $this->http_request_update($data, "/kabupaten-kota/$id_kabupaten_kota", $token);
    }

    public function delete_kabupaten_kota($id_kabupaten_kota, $token)
    {
        return $this->http_request_delete("/kabupaten-kota/$id_kabupaten_kota", $token);
    }

    // ========================== Kecamatan =================================
    public function view_kecamatan($id_kabupaten_kota, $token)
    {
        return $this->http_request_get("/kecamatan/$id_kabupaten_kota", $token);
    }

    public function view_kecamatan_all($token)
    {
        return $this->http_request_get("/kecamatan", $token);
    }

    public function add_kecamatan($nama_kecamatan, $id_kabupaten_kota, $token)
    {
        $data = [
            'kecamatan' => $nama_kecamatan
        ];
        return $this->http_request_post($data, "/kecamatan/$id_kabupaten_kota", $token);
    }

    public function edit_kecamatan($nama_kecamatan, $id_kecamatan, $token)
    {
        $data = [
            'kecamatan' => $nama_kecamatan
        ];
        return $this->http_request_update($data, "/kecamatan/$id_kecamatan", $token);
    }

    public function delete_kecamatan($id_kecamatan, $token)
    {
        return $this->http_request_delete("/kecamatan/$id_kecamatan", $token);
    }

    // =============================== Kelurahan Desa ===================================
    public function view_kelurahan_desa($id_kecamatan, $token)
    {
        return $this->http_request_get("/kelurahan-desa/$id_kecamatan", $token);
    }
    
    public function view_kelurahan_desa_all($token)
    {
        return $this->http_request_get("/kelurahan-desa", $token);
    }

    public function add_kelurahan_desa($nama_kelurahan_desa, $id_kecamatan, $token)
    {
        $data = [
            'kelurahan' => $nama_kelurahan_desa
        ];
        return $this->http_request_post($data, "/kelurahan-desa/$id_kecamatan", $token);
    }

    public function edit_kelurahan_desa($nama_kelurahan_desa, $id_kelurahan_desa, $token)
    {
        $data = [
            'kelurahan' => $nama_kelurahan_desa
        ];
        return $this->http_request_update($data, "/kelurahan-desa/$id_kelurahan_desa", $token);
    }

    public function delete_kelurahan_desa($id_kelurahan_desa, $token)
    {
        return $this->http_request_delete("/kelurahan-desa/$id_kelurahan_desa", $token);
    }

    // ======================= SKKNI =================================
    public function view_skkni_ska($token)
    {
        return $this->http_request_get("/skkni-ska", $token);
    }

    public function add_skkni_ska($nama_skkni_ska, $token)
    {
        $data = [
            'ska' => $nama_skkni_ska
        ];
        return $this->http_request_post($data, "/skkni-ska", $token);
    }

    public function edit_skkni_ska($nama_skkni_ska, $id_skkni_ska, $token)
    {
        $data = [
            'ska' => $nama_skkni_ska
        ];
        return $this->http_request_update($data, "/skkni-ska/$id_skkni_ska", $token);
    }

    public function delete_skkni_ska($id_skkni_ska, $token)
    {
        return $this->http_request_delete("/skkni-ska/$id_skkni_ska", $token);
    }

    // ======================= Kategori Modul ===============================
    public function view_kategori_modul($token)
    {
        return $this->http_request_get("/modul", $token);
    }

    public function add_kategori_modul($nama_kategori_modul, $token)
    {
        $data = [
            'modul' => $nama_kategori_modul
        ];
        return $this->http_request_post($data, "/modul", $token);
    }

    public function edit_kategori_modul($nama_kategori_modul, $id_kategori_modul, $token)
    {
        $data = [
            'modul' => $nama_kategori_modul
        ];
        return $this->http_request_update($data, "/modul/$id_kategori_modul", $token);
    }

    public function delete_kategori_modul($id_kategori_modul, $token)
    {
        return $this->http_request_delete("/modul/$id_kategori_modul", $token);
    }

    //============================== Kategori Tenaga Ahli =================================
    public function view_kategori_tenaga_ahli($token)
    {
        return $this->http_request_get("/kategori-tenaga-ahli", $token);
    }

    public function add_kategori_tenaga_ahli($nama_kategori_tenaga_ahli, $token)
    {
        $data = [
            'kategori_tenaga_ahli' => $nama_kategori_tenaga_ahli
        ];
        return $this->http_request_post($data, "/kategori-tenaga-ahli", $token);
    }

    public function edit_kategori_tenaga_ahli($nama_kategori_tenaga_ahli, $id_kategori_tenaga_ahli, $token)
    {
        $data = [
            'kategori_tenaga_ahli' => $nama_kategori_tenaga_ahli
        ];
        return $this->http_request_update($data, "/kategori-tenaga-ahli/$id_kategori_tenaga_ahli", $token);
    }

    public function delete_kategori_tenaga_ahli($id_kategori_tenaga_ahli, $token)
    {
        return $this->http_request_delete("/kategori-tenaga-ahli/$id_kategori_tenaga_ahli", $token);
    }

    // ================================= Status Peserta ===============================
    public function view_status_peserta($token)
    {
        return $this->http_request_get("/status-peserta-kegiatan", $token);
    }

    public function add_status_peserta_kegiatan($nama_status_peserta_kegiatan, $token)
    {
        $data = [
            'status_peserta_kegiatan' => $nama_status_peserta_kegiatan
        ];
        return $this->http_request_post($data, "/status-peserta-kegiatan", $token);
    }

    public function edit_status_peserta_kegiatan($nama_status_peserta_kegiatan, $id_status_peserta_kegiatan, $token)
    {
        $data = [
            'status_peserta_kegiatan' => $nama_status_peserta_kegiatan
        ];
        return $this->http_request_update($data, "/status-peserta-kegiatan/$id_status_peserta_kegiatan", $token);
    }

    public function delete_status_peserta_kegiatan($id_status_peserta_kegiatan, $token)
    {
        return $this->http_request_delete("/status-peserta-kegiatan/$id_status_peserta_kegiatan", $token);
    }

    // =============================== Status Kegiatan ========================================
    public function view_status_kegiatan($token)
    {
        return $this->http_request_get("/status-kegiatan", $token);
    }

    public function add_status_kegiatan($nama_status_kegiatan, $token)
    {
        $data = [
            'status_kegiatan' => $nama_status_kegiatan
        ];
        return $this->http_request_post($data, "/status-kegiatan", $token);
    }

    public function edit_status_kegiatan($nama_status_kegiatan, $id_status_kegiatan, $token)
    {
        $data = [
            'status_kegiatan' => $nama_status_kegiatan
        ];
        return $this->http_request_update($data, "/status-kegiatan/$id_status_kegiatan", $token);
    }

    public function delete_status_kegiatan($id_status_kegiatan, $token)
    {
        return $this->http_request_delete("/status-kegiatan/$id_status_kegiatan", $token);
    }

    // ========================= Akun Kegiatan =============================
    public function view_akun_kegiatan($token)
    {
        return $this->http_request_get("/akun-kegiatan", $token);
    }

    public function add_akun_kegiatan($nama_akun_kegiatan, $token)
    {
        $data = [
            'akun_kegiatan' => $nama_akun_kegiatan
        ];
        return $this->http_request_post($data, "/akun-kegiatan", $token);
    }

    public function edit_akun_kegiatan($nama_akun_kegiatan, $id_akun_kegiatan, $token)
    {
        $data = [
            'akun_kegiatan' => $nama_akun_kegiatan
        ];
        return $this->http_request_update($data, "/akun-kegiatan/$id_akun_kegiatan", $token);
    }

    public function delete_akun_kegiatan($id_akun_kegiatan, $token)
    {
        return $this->http_request_delete("/akun-kegiatan/$id_akun_kegiatan", $token);
    }

    // =================================== Jenis Kegiatan ================================
    public function view_jenis_kegiatan($token)
    {
        return $this->http_request_get("/jenis-kegiatan", $token);
    }

    public function add_jenis_kegiatan($nama_jenis_kegiatan, $token)
    {
        $data = [
            'jenis_kegiatan' => $nama_jenis_kegiatan
        ];
        return $this->http_request_post($data, "/jenis-kegiatan", $token);
    }

    public function edit_jenis_kegiatan($nama_jenis_kegiatan, $id_jenis_kegiatan, $token)
    {
        $data = [
            'jenis_kegiatan' => $nama_jenis_kegiatan
        ];
        return $this->http_request_update($data, "/jenis-kegiatan/$id_jenis_kegiatan", $token);
    }

    public function delete_jenis_kegiatan($id_jenis_kegiatan, $token)
    {
        return $this->http_request_delete("/jenis-kegiatan/$id_jenis_kegiatan", $token);
    }

    // ================================ status PNS ================================
    public function view_status_pns($token)
    {
        return $this->http_request_get("/status-pns", $token);
    }

    public function add_status_pns($nama_status_pns, $token)
    {
        $data = [
            'status_pns' => $nama_status_pns
        ];
        return $this->http_request_post($data, "/status-pns", $token);
    }

    public function edit_status_pns($nama_status_pns, $id_status_pns, $token)
    {
        $data = [
            'status_pns' => $nama_status_pns
        ];
        return $this->http_request_update($data, "/status-pns/$id_status_pns", $token);
    }

    public function delete_status_pns($id_status_pns, $token)
    {
        return $this->http_request_delete("/status-pns/$id_status_pns", $token);
    }

    // ================================ Asesor =============================
    public function view_asesor($token)
    {
        return $this->http_request_get("/asesor", $token);
    }

    // ====================================== Instruktur ====================================
    public function view_instruktur($token)
    {
        return $this->http_request_get("/instruktur", $token);
    }
}
