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

    public function http_request_get_tanggal($function, $tanggal, $token)
    {
        $dataHeader = [
            'Authorization: Bearer ' . $token,
            'tanggal: ' . $tanggal
        ];
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
        $lokasi_kegiatan,
        $latitude_lokasi,
        $longitude_lokasi,
        $status_kegiatan,
        $id_pelatih_kegiatan,
        $foto_banner_kegiatan,
        $token
    ) {
        $data = [
            'judul_kegiatan' => $judul_kegiatan,
            'deskripsi_kegiatan' => $deskripsi_kegiatan,
            'tanggal_kegiatan' => $tanggal_kegiatan,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'latitude_lokasi' => $latitude_lokasi,
            'longitude_lokasi' => $longitude_lokasi,
            'status_kegiatan' => $status_kegiatan,
            'id_pelatih_kegiatan' => $id_pelatih_kegiatan,
            'foto_banner_kegiatan' => $foto_banner_kegiatan
        ];

        return $this->http_request_post($data, "/", $token);
    }

    public function edit_kegiatan(
        $judul_kegiatan,
        $deskripsi_kegiatan,
        $tanggal_kegiatan,
        $lokasi_kegiatan,
        $latitude_lokasi,
        $longitude_lokasi,
        $status_kegiatan,
        $id_pelatih_kegiatan,
        $foto_banner_kegiatan,
        $id_kegiatan,
        $token
    ) {
        $data = [
            'judul_kegiatan' => $judul_kegiatan,
            'deskripsi_kegiatan' => $deskripsi_kegiatan,
            'tanggal_kegiatan' => $tanggal_kegiatan,
            'lokasi_kegiatan' => $lokasi_kegiatan,
            'latitude_lokasi' => $latitude_lokasi,
            'longitude_lokasi' => $longitude_lokasi,
            'status_kegiatan' => $status_kegiatan,
            'id_pelatih_kegiatan' => $id_pelatih_kegiatan,
            'foto_banner_kegiatan' => $foto_banner_kegiatan
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

    public function view_kegiatan_perbulan($tanggal, $token)
    {
        return $this->http_request_get_tanggal("/tanggal/", $tanggal, $token);
    }

    public function view_detail_kegiatan($id_kegiatan, $token)
    {
        return $this->http_request_get("/$id_kegiatan", $token);
    }

    public function daftar_kegiatan($id_kegiatan, $token)
    {
        $data = [
            'id_kegiatan' => $id_kegiatan
        ];

        return $this->http_request_post($data, "/daftar/", $token);
    }

    // ====================== Peserta Kegiatan ==================================

    public function view_peserta_by_status($id_kegiatan, $id_status, $token)
    {
        return $this->http_request_get("/$id_kegiatan/$id_status", $token);
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

        return $this->http_request_post($data, "/$id_kegiatan/berita-acara/", $token);
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

        return $this->http_request_update($data, "/$id_kegiatan/berita-acara/", $token);
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

        return $this->http_request_post($data, "/$id_kegiatan/invoice/", $token);
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

        return $this->http_request_update($data, "/$id_kegiatan/invoice/", $token);
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

        return $this->http_request_post($data, "/$id_kegiatan/bukti-pembayaran/", $token);
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

        return $this->http_request_update($data, "/$id_kegiatan/bukti-pembayaran/", $token);
    }

    public function view_bukti_pembayaran($id_kegiatan, $token)
    {
        return $this->http_request_get("/$id_kegiatan/bukti-pembayaran/", $token);
    }
}
