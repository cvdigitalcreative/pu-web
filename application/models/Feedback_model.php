<?php

class Feedback_model extends CI_Model
{
    public function http_request_get($function, $token)
    {
        $dataHeader = ['Authorization: Bearer ' . $token];
        $curl = curl_init();
        $url = API_URL . "/feedback" . $function;
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
        $url = API_URL . "/feedback" . $function;
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
        $url = API_URL . "/feedback" . $function;
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, TRUE);
    }

    // ======================= Model Functions ========================

    public function add_feedback($judul_feedback, $deskripsi_feedback, $id_user, $token)
    {
        $data = [
            'judul_feedback' => $judul_feedback,
            'deskripsi_feedback' => $deskripsi_feedback,
            'id_user' => $id_user
        ];
        return $this->http_request_post($data, "/", $token);
    }

    public function view_unanswered_feedback($token)
    {
        return $this->http_request_get("/unanswered/", $token);
    }

    public function view_answered_feedback($token)
    {
        return $this->http_request_get("/answered/", $token);
    }

    public function view_my_feedback($token)
    {
        return $this->http_request_get("/my/", $token);
    }

    public function view_detail_feedback($id_feedback, $token)
    {
        return $this->http_request_get("/$id_feedback", $token);
    }

    public function delete_feedback($id_feedback, $token)
    {
        return $this->http_request_delete("/$id_feedback", $token);
    }

    public function reply_feedback($jawaban, $id_feedback, $token)
    {
        $data = [
            'jawaban' => $jawaban
        ];
        return $this->http_request_post($data, "/$id_feedback/reply", $token);
    }
}
