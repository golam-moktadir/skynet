<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class View_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Join_model');
    }

    public function branch_name() {
            $data['all_value'] = $this->Common_model->get_all_info('branch_name');
            $result = $this->load->view('branch_name/view_branch_name', $data, true);
            echo json_encode($result);
    }
    public function service_type() {
        $data['all_value'] = $this->Common_model->get_all_info('service_type');
        $result = $this->load->view('service_type/view_service_type', $data, true);
        echo json_encode($result);
    }
    public function package_info() {
        $data['all_value'] = $this->Join_model->get_package_info();
        $result = $this->load->view('package_info/view_package_info', $data, true);
        echo json_encode($result);
    }
    public function area_info() {
        $data['all_value'] = $this->Join_model->get_area_info();
        $result = $this->load->view('area_info/view_area_info', $data, true);
        echo json_encode($result);
    }
    public function expense_head() {
        $data['all_value'] = $this->Common_model->get_all_info('expense_head');
        $result = $this->load->view('expense_head/view_expense_head', $data, true);
        echo json_encode($result);
    }
    public function income_head() {
        $data['all_value'] = $this->Common_model->get_all_info('income_head');
        $result = $this->load->view('income_head/view_income_head', $data, true);
        echo json_encode($result);
    }
    public function client_info() {
        $data['all_value'] = $this->Join_model->get_client_info();
        $result = $this->load->view('client_info/view_client_info', $data, true);
        echo json_encode($result);
    }
    public function reseller_info() {
        $data['all_value'] = $this->Join_model->get_reseller_info();
        $result = $this->load->view('reseller_info/view_reseller_info', $data, true);
        echo json_encode($result);
    }
    public function staff_info() {
        $data['all_value'] = $this->Join_model->get_staff_info();
        $result = $this->load->view('staff_info/view_staff_info', $data, true);
        echo json_encode($result);
    }
     public function expense() {
        $data['all_value'] = $this->Join_model->get_expense();
        $result = $this->load->view('expense/view_expense', $data, true);
        echo json_encode($result);
    }
     public function income() {
        $data['all_value'] = $this->Join_model->get_income();
        $result = $this->load->view('income/view_income', $data, true);
        echo json_encode($result);
    }
    public function bill_generate() {
        $data['all_value'] = $this->Join_model->get_bill_generate();
        $result = $this->load->view('bill_generate/view_bill_generate', $data, true);
        echo json_encode($result);
    }
    public function invoice_generate() {
        $data['all_value'] = $this->Join_model->get_invoice_generate();
        $result = $this->load->view('invoice_generate/view_invoice_generate', $data, true);
        echo json_encode($result);
    }
     public function due_bill_info(){
       $data['area_id'] = $this->input->post('area_id');
       $data['generate_month'] = $this->input->post('generate_month');
       $data['generate_year'] = $this->input->post('generate_year');
       $data['paid_status'] = 0;
       $data['all_value'] = $this->Common_model->get_all_info_by_array('bill_generate',$data);
        $data['clients'] = $this->Common_model->get_all_info('client_info');

       $result = $this->load->view('bill_generate/view_due_bills', $data, true);
       echo json_encode($result);
    }
    public function role_setting() {
        $data['menu_list'] = $this->Common_model->get_all_info('menu_name');
        $data['all_value'] = $this->Common_model->get_all_info('role_setting');
        $result = $this->load->view('role_setting/view_role_setting', $data, true);
        echo json_encode($result);
    }
    public function balance_sheet() {
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        $client_reseller = $this->input->post('client_reseller');
        $user = $this->input->post('user');
        $data['income'] = $this->Join_model->get_balance_sheet_income($date_from, $date_to, $client_reseller, $user);
        $data['extra_income'] = $this->Join_model->get_balance_sheet_extra_income($date_from, $date_to, $client_reseller, $user);
        $data['expense'] = $this->Join_model->get_balance_sheet_expense($date_from, $date_to, $client_reseller, $user);
        $result = $this->load->view('balance_sheet/view_balance_sheet', $data, true);
        echo json_encode($result);
    }
    public function product() {       
        $data['all_value'] = $this->Join_model->get_all_product();
        $result = $this->load->view('product_info/view_product_info', $data, true);
        echo json_encode($result);
    }
}
