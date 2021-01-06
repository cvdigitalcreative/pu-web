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

    // ======================= Model Functions ========================

    public function view_jenis_kelamin($token)
    {
        return $this->http_request_get("/jenis-kelamin", $token);
    }

    public function view_status_perkawinan($token)
    {
        return $this->http_request_get("/status-perkawinan", $token);
    }

    public function view_status_rumah($token)
    {
        return $this->http_request_get("/status-rumah", $token);
    }

    public function view_pendidikan($token)
    {
        return $this->http_request_get("/pendidikan", $token);
    }

    public function view_jabker($token)
    {
        return $this->http_request_get("/jabker", $token);
    }

    public function view_provinsi($token)
    {
        return $this->http_request_get("/provinsi", $token);
    }

    public function view_kabupaten_kota($id_provinsi, $token)
    {
        return $this->http_request_get("/kabupaten-kota/$id_provinsi", $token);
    }

    public function view_kecamatan($id_kabupaten_kota, $token)
    {
        return $this->http_request_get("/kecamatan/$id_kabupaten_kota", $token);
    }

    public function view_kelurahan_desa($id_kecamatan, $token)
    {
        return $this->http_request_get("/kelurahan-desa/$id_kecamatan", $token);
    }

    public function view_skkni_ska($token)
    {
        return $this->http_request_get("/skkni-ska", $token);
    }

    public function view_kategori_modul($token)
    {
        return $this->http_request_get("/modul", $token);
    }

    //blm done
    public function view_kategori_tenaga_ahli($token)
    {
        return $this->http_request_get("/kategori-tenaga-ahli", $token);
    }

    //blm done
    public function view_status_peserta($token)
    {
        return $this->http_request_get("/status-peserta-kegiatan", $token);
    }

    //blm done
    public function view_asesor($token)
    {
        return $this->http_request_get("/asesor", $token);
    }

    //blm done
    public function view_instruktur($token)
    {
        return $this->http_request_get("/instruktur", $token);
    }

    public function view_status_kegiatan($token)
    {
        return $this->http_request_get("/status-kegiatan", $token);
    }

    public function view_akun_kegiatan($token)
    {
        return $this->http_request_get("/akun-kegiatan", $token);
    }

    public function view_jenis_kegiatan($token)
    {
        return $this->http_request_get("/jenis-kegiatan", $token);
    }
}
