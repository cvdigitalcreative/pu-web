<?php

class Kegiatan_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/kegiatan" . $function;
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
        $url = API_URL . "/kegiatan" . $function;
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
        $url = API_URL . "/kegiatan" . $function;
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
        $url = API_URL . "/kegiatan" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_kegiatan(
        $judul_kegiatan,
        $deskripsi_kegiatan,
        $tanggal_kegiatan,
        $tanggal_kegiatan_selesai,
        $lokasi_kegiatan,
        $latitude_lokasi,
        $longitude_lokasi,
        $status_kegiatan,
        $foto_banner_kegiatan,
        $id_akun_kegiatan,
        $id_jenis_kegiatan,
        $id_provinsi,
        $id_kota_kabupaten,
        $id_asesor_kegiatan,
        $id_instruktur_kegiatan,
        $file_materi_kegiatan,
        $token
    ) {
        $data = [
            'judul_kegiatan' => $judul_kegiatan,
            'deskripsi_kegiatan' => $deskripsi_kegiatan,
            'tanggal_kegiatan' => $tanggal_kegiatan,
            'tanggal_kegiatan_selesai' => $tanggal_kegiatan_selesai,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'latitude_lokasi' => $latitude_lokasi,
            'longitude_lokasi' => $longitude_lokasi,
            'id_status_kegiatan' => $status_kegiatan,
            'foto_banner_kegiatan' => $foto_banner_kegiatan,
            'id_akun_kegiatan' => $id_akun_kegiatan,
            'id_jenis_kegiatan' => $id_jenis_kegiatan,
            'id_provinsi' => $id_provinsi,
            'id_kota_kabupaten' => $id_kota_kabupaten,
            'id_asesor_kegiatan' => $id_asesor_kegiatan,
            'id_instruktur_kegiatan' => $id_instruktur_kegiatan,
            'file_materi_kegiatan' => $file_materi_kegiatan
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_kegiatan(
        $judul_kegiatan,
        $deskripsi_kegiatan,
        $tanggal_kegiatan,
        $tanggal_kegiatan_selesai,
        $lokasi_kegiatan,
        $latitude_lokasi,
        $longitude_lokasi,
        $status_kegiatan,
        $foto_banner_kegiatan,
        $id_akun_kegiatan,
        $id_jenis_kegiatan,
        $id_provinsi,
        $id_kota_kabupaten,
        $id_asesor_kegiatan,
        $id_instruktur_kegiatan,
        $file_materi_kegiatan,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'judul_kegiatan' => $judul_kegiatan,
            'deskripsi_kegiatan' => $deskripsi_kegiatan,
            'tanggal_kegiatan' => $tanggal_kegiatan,
            'tanggal_kegiatan_selesai' => $tanggal_kegiatan_selesai,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'latitude_lokasi' => $latitude_lokasi,
            'longitude_lokasi' => $longitude_lokasi,
            'id_status_kegiatan' => $status_kegiatan,
            'foto_banner_kegiatan' => $foto_banner_kegiatan,
            'id_akun_kegiatan' => $id_akun_kegiatan,
            'id_jenis_kegiatan' => $id_jenis_kegiatan,
            'id_provinsi' => $id_provinsi,
            'id_kota_kabupaten' => $id_kota_kabupaten,
            'id_asesor_kegiatan' => $id_asesor_kegiatan,
            'id_instruktur_kegiatan' => $id_instruktur_kegiatan,
            'file_materi_kegiatan' => $file_materi_kegiatan
        ];

        return $this->http_request_post($data, "/$id_kegiatan", $token);
    }


    public function delete_kegiatan($id_kegiatan, $token)
    {
        return $this->http_request_delete("/$id_kegiatan", $token);
    }

    public function view_kegiatan($token)
    {
        return $this->http_request_get("/", $token);
    }

    public function view_kegiatan_filter($filter, $token)
    {
        return $this->http_request_get("/$filter", $token);
    }

    public function view_kegiatan_perbulan($bulan, $token)
    {
        return $this->http_request_get("/bulan/?bulan=$bulan", $token);
    }
    public function view_kegiatan_berdasarkan_tanggal($tanggal, $token)
    {
        return $this->http_request_get("/tanggal/?tanggal=$tanggal", $token);
    }

    public function view_detail_kegiatan($id_kegiatan, $token)
    {
        return $this->http_request_get("/$id_kegiatan", $token);
    }

    public function view_my_kegiatan($token)
    {
        return $this->http_request_get("/my/", $token);
    }

    public function view_kegiatan_selesai($token)
    {
        return $this->http_request_get("/finish/", $token);
    }


    public function daftar_kegiatan($id_kegiatan, $token)
    {
        $data = [
            'id_kegiatan' => $id_kegiatan
        ];

        return $this->http_request_post($data, "/daftar/", $token);
    }

    public function import_kegiatan_excel($file_excel, $token)
    {
        $data = [
            'file_excel' => $file_excel
        ];

        return $this->http_request_post($data, "/import/", $token);
    }
    public function import_peserta_kegiatan_excel($file_excel, $id_kegiatan, $token)
    {
        $data = [
            'file_excel' => $file_excel
        ];

        return $this->http_request_post($data, "/$id_kegiatan/peserta/", $token);
    }

    // ====================== Peserta Kegiatan ==================================

    public function view_peserta_by_status($id_kegiatan, $id_status, $token)
    {
        return $this->http_request_get("/$id_kegiatan/$id_status", $token);
    }

    public function tambah_peserta($file_excel, $id_jadwal_kegiatan,  $token)
    {
        $data = [
            'file_excel' => $file_excel
        ];
        return $this->http_request_post($data, "/$id_jadwal_kegiatan/peserta/", $token);
    }

    // ====================== Berita Acara ==================================

    public function add_berita_acara(
        $deskripsi_berita_acara,
        $file_berita_acara,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'deskripsi_berita_acara' => $deskripsi_berita_acara,
            'file_berita_acara' => $file_berita_acara
        ];

        return $this->http_request_post($data, "/$id_kegiatan/berita-acara/add/", $token);
    }

    public function edit_berita_acara(
        $deskripsi_berita_acara,
        $file_berita_acara,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'deskripsi_berita_acara' => $deskripsi_berita_acara,
            'file_berita_acara' => $file_berita_acara
        ];

        return $this->http_request_post($data, "/$id_kegiatan/berita-acara/edit/", $token);
    }

    public function view_berita_acara($id_kegiatan, $token)
    {
        return $this->http_request_get("/$id_kegiatan/berita-acara/", $token);
    }

    // ====================== invoice ==================================

    public function add_invoice(
        $deskripsi_invoice,
        $file_invoice,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'deskripsi_invoice' => $deskripsi_invoice,
            'file_invoice' => $file_invoice
        ];

        return $this->http_request_post($data, "/$id_kegiatan/invoice/add/", $token);
    }

    public function edit_invoice(
        $deskripsi_invoice,
        $file_invoice,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'deskripsi_invoice' => $deskripsi_invoice,
            'file_invoice' => $file_invoice
        ];

        return $this->http_request_post($data, "/$id_kegiatan/invoice/edit/", $token);
    }

    public function view_invoice($id_kegiatan, $token)
    {
        return $this->http_request_get("/$id_kegiatan/invoice/", $token);
    }

    // ====================== bukti_pembayaran ==================================

    public function add_bukti_pembayaran(
        $deskripsi_bukti_pembayaran,
        $file_bukti_pembayaran,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'deskripsi_bukti_pembayaran' => $deskripsi_bukti_pembayaran,
            'file_bukti_pembayaran' => $file_bukti_pembayaran
        ];

        return $this->http_request_post($data, "/$id_kegiatan/bukti-pembayaran/add/", $token);
    }

    public function edit_bukti_pembayaran(
        $deskripsi_bukti_pembayaran,
        $file_bukti_pembayaran,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'deskripsi_bukti_pembayaran' => $deskripsi_bukti_pembayaran,
            'file_bukti_pembayaran' => $file_bukti_pembayaran
        ];

        return $this->http_request_post($data, "/$id_kegiatan/bukti-pembayaran/edit/", $token);
    }

    public function view_bukti_pembayaran($id_kegiatan, $token)
    {
        return $this->http_request_get("/$id_kegiatan/bukti-pembayaran/", $token);
    }

    // ====================== pelatih kegiatan ==================================

    public function delete_pelatih_kegiatan($id_jadwal_kegiatan, $id_tenaga_ahli, $token)
    {
        return $this->http_request_delete("/$id_jadwal_kegiatan/pelatih/$id_tenaga_ahli", $token);
    }

    public function delete_asesor_kegiatan($id_jadwal_kegiatan, $id_tenaga_ahli, $token)
    {
        return $this->http_request_delete("/$id_jadwal_kegiatan/asesor/$id_tenaga_ahli", $token);
    }

    public function delete_instruktur_kegiatan($id_jadwal_kegiatan, $id_tenaga_ahli, $token)
    {
        return $this->http_request_delete("/$id_jadwal_kegiatan/instruktur/$id_tenaga_ahli", $token);
    }
}
