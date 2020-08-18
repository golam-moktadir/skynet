<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Delete_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Individual_model');
    }
    public function branch_name()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'branch_name');
        echo json_encode("Deleted Successfully");
    }
    public function service_type()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'service_type');
        echo json_encode("Deleted Successfully");
    }
    public function package_info()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'package_info');
        echo json_encode("Deleted Successfully");
    }
    public function area_info()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'area_info');
        echo json_encode("Deleted Successfully");
    }
    public function expense_head()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'expense_head');
        echo json_encode("Deleted Successfully");
    }
    public function income_head()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'income_head');
        echo json_encode("Deleted Successfully");
    }
    public function client_info()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_by_array(array("client_id" => $id, 'head' => "Connection Charge"), 'bill_generate');
        $this->Common_model->delete_info('record_id', $id, 'client_info');
        echo json_encode("Deleted Successfully");
    }
    public function reseller_info()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'reseller_info');
        echo json_encode("Deleted Successfully");
    }
    public function staff_info()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'staff_info');
        echo json_encode("Deleted Successfully");
    }
    public function expense()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'expense');
        echo json_encode("Deleted Successfully");
    }
     public function bill_generate()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'bill_generate');
        echo json_encode("Deleted Successfully");
    }
    public function invoice_generate()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'invoice_generate');
        $this->Individual_model->update_bill_generate($id);
        echo json_encode("Deleted Successfully");
    }
    public function role_setting()
    {
        $id = $this->input->post('id');
        $this->Common_model->delete_info('record_id', $id, 'role_setting');
        echo json_encode("Deleted Successfully");
    }
}
