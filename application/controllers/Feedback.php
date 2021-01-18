<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model');
        $this->load->model('User_model');
    }

    public function seluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            //================= User detail for navbar =======================
            $data['header']['detail_user'] = $this->User_model->view_user_detail($this->session->userdata('token'));
            
            if ($data['header']['detail_user'] == null)
                $null = true;
            else {
                if ($data['header']['detail_user']['status'] == "Success") {
                    $data['header']['detail_user'] = $data['header']['detail_user']['data'];
                } else {
                    $data['header']['detail_user'] = null;
                    $this->session->set_flashdata('APImessage', $data['header']['detail_user']['message']);
                }
            }

            // $data['feedback'] = $this->Feedback_model->view_unanswered_feedback($this->session->userdata('token'));
            // if ($data['feedback'] == null)
            //     $null = true;
            // else {
            //     if ($data['feedback']['status'] == "Success") {
            //         $data['total_feedback'] = count($data['feedback']['data']);
            //     } else {
            //         $data['total_feedback'] = 0;
            //         $this->session->set_flashdata('APImessage', $data['feedback']['message']);
            //     }
            // }

            if ($null)
                $this->load->view('error_page');

            $this->load->view('administrator/feedback', $data);
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['feedback'] = $this->Feedback_model->view_unanswered_feedback($this->session->userdata('token'));
            if ($data['feedback'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['feedback']['status'] == "Success") {
                    if (count($data['feedback']['data']) > 0) {
                        $data['feedback'] = $data['feedback']['data'];

                        $indexFeedback = 0;
                        $noFeedback = 1;
                        foreach ($data['feedback'] as $val) {
                            $data['feedback'][$indexFeedback]['no_feedback'] = $noFeedback;

                            $indexFeedback++;
                            $noFeedback++;
                        }
                        $callback = array(
                            'data' => $data['feedback']
                        );
                    } else {
                        $callback = array(
                            'data' => []
                        );
                    }
                } else {
                    $callback = array(
                        'data' => []
                    );
                }

                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else {
            redirect('pupr/login');
        }
    }

    //blm done
    public function jawab_feedback($id_feedback)
    {
        if ($this->session->userdata('logged_in') == true) {
            $jawaban = $this->input->post('jawaban');

            $jawab_feedback = $this->Feedback_model->reply_feedback(
                $jawaban,
                $id_feedback,
                $this->session->userdata('token')
            );

            if ($jawab_feedback == null) {
                $this->load->view('error_page');
            }
            if ($jawab_feedback['status'] == "Success") {
                $this->session->set_flashdata('success', $jawab_feedback['message']);
                redirect("pupr/feedback");
            } else {
                $this->session->set_flashdata('APImessage', $jawab_feedback['message']);
                redirect("pupr/feedback");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_feedback($id_feedback)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_feedback = $this->Feedback_model->delete_feedback($id_feedback, $this->session->userdata('token'));
            if ($delete_feedback == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_feedback['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_feedback['message']);
                    redirect("pupr/feedback");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_feedback['message']);
                    redirect("pupr/feedback");
                }
            }
        } else
            redirect("pupr/login");
    }
}
