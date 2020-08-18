<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Join_model');
        $this->load->model('Common_model');
    }

    public function total_validity_over() {
        $data['all_value'] = $this->Join_model->total_validity_over();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_validity_over', $data);
        $this->load->view('layout/footer');
    }
    public function total_staff() {
        $data['all_value'] = $this->Join_model->get_staff_info();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_staff', $data);
        $this->load->view('layout/footer');
    }

    public function total_active_client() {
        $data['all_value'] = $this->Join_model->get_active_client_info();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_active_client', $data);
        $this->load->view('layout/footer');
    }

    public function total_active_reseller() {
        $data['all_value'] = $this->Join_model->get_active_reseller_info();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_active_reseller', $data);
        $this->load->view('layout/footer');
    }

    public function total_bill() {
        $data['all_value'] = $this->Join_model->get_bill_generate();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_bill', $data);
        $this->load->view('layout/footer');
    }

    public function total_collection() {
        $data['all_value'] = $this->Join_model->get_invoice_generate();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_collection', $data);
        $this->load->view('layout/footer');
    }

    public function total_discount() {
        $data['all_value'] = $this->Join_model->get_invoice_generate();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_discount', $data);
        $this->load->view('layout/footer');
    }
    
    public function total_due() {
        $data['all_value'] = $this->Join_model->get_invoice_generate();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_due', $data);
        $this->load->view('layout/footer');
    }

    public function total_inactive_client() {
        $data['all_value'] = $this->Join_model->get_inactive_client_info();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_inactive_client', $data);
        $this->load->view('layout/footer');
    }

    public function total_inactive_reseller() {
        $data['all_value'] = $this->Join_model->get_inactive_reseller_info();
        $this->load->view('layout/header');
        $this->load->view('dashboard/total_inactive_reseller', $data);
        $this->load->view('layout/footer');
    }

}
