<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Log_in_out extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Dashboard_model');
    }

    public function index() {
        if ($this->session->userdata('ses_logged') == "YES") {
            $data['total_validity_over'] = $this->Dashboard_model->total_validity_over();
            $data['total_staff'] = $this->Dashboard_model->total_staff();
            $data['total_active_client'] = $this->Dashboard_model->total_active_client();
            $data['total_active_reseller'] = $this->Dashboard_model->total_active_reseller();
            $data['total_bill'] = $this->Dashboard_model->total_bill();
            $data['total_collection'] = $this->Dashboard_model->total_collection();
            $data['total_discount'] = $this->Dashboard_model->total_discount();
            $data['total_inactive_client'] = $this->Dashboard_model->total_inactive_client();
            $data['total_inactive_reseller'] = $this->Dashboard_model->total_inactive_reseller();
            $this->load->view('layout/header');
            $this->load->view('dashboard/dashboard', $data);
            $this->load->view('layout/footer');
        } else {
            $data['wrong_msg'] = "";
            $this->load->view('website/login_check', $data);
        }
    }

    public function block_msg() {
        $data['wrong_msg'] = "Sorry ! Your ID is inactive now";
        $this->load->view('website/login_check', $data);
    }

    public function login_check() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['wrong_msg'] = "";
            $this->load->view('website/login_check', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
        
            $checking_array = array("user_name" => $username, "password" => $password);
            $result = $this->Common_model->check_value_get_data('role_setting', $checking_array);
            if ($result) {
                foreach ($result as $result_info) {
                    $record_id = $result_info->record_id;
                    $username = $result_info->user_name;
                    $password = $result_info->password;
                    $mobile = $result_info->mobile;
                    $email = $result_info->email;
                    $full_name = $result_info->full_name;
                    $status=$result_info->status;
                    $view_menu_id=$result_info->view_menu_id;
                    $insert_menu_id=$result_info->insert_menu_id;
                    $edit_menu_id=$result_info->edit_menu_id;
                    $delete_menu_id=$result_info->delete_menu_id;
                }
                if ($status == 0) {
                    redirect('Log_in_out/block_msg', 'refresh');
                } else {
                    $sesdata = array(
                        'ses_record_id' => $record_id,
                        'ses_full_name' => $full_name,
                        'ses_user_name' => $username,
                        'ses_password' => $password,
                        'ses_email' => $email,
                        'ses_mobile' => $mobile,
                        'ses_view_menu_id' => $view_menu_id,
                        'ses_insert_menu_id' => $insert_menu_id,
                        'ses_edit_menu_id' => $edit_menu_id,
                        'ses_delete_menu_id' => $delete_menu_id,
                        'ses_logged' => "YES"
                    );
                    $this->session->set_userdata($sesdata);
                    redirect('/Log_in_out', 'refresh');
                }
            }else {
                $data['wrong_msg'] = "Wrong Name/Password";
                $this->load->view('website/login_check', $data);
            }
        }
    }

    public function logout() {
        $user_type = $this->session->ses_user_type;
        if ($this->session->userdata('ses_logged') == "YES") {
            $logout_array = array('ses_record_id', 'ses_full_name', 'ses_user_name', 'ses_password',
                'ses_email', 'ses_mobile', 'ses_view_menu_id', 'ses_insert_menu_id', 'ses_edit_menu_id',
                'ses_delete_menu_id', 'ses_logged');
            $this->session->unset_userdata($logout_array);
            redirect('/Log_in_out', 'refresh');
        }
    }

}
