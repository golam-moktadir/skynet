<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Show_form extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Join_model');
    }
    public function branch_name() {
            $this->load->view('layout/header');
            $this->load->view('branch_name/insert_branch_name');
            $this->load->view('layout/footer');
    }
    public function service_type() {
        $this->load->view('layout/header');
        $this->load->view('service_type/insert_service_type');
        $this->load->view('layout/footer');
    }
    public function package_info() {
        $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $this->load->view('layout/header');
        $this->load->view('package_info/insert_package_info', $data);
        $this->load->view('layout/footer');
    }
    public function area_info() {
        $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $this->load->view('layout/header');
        $this->load->view('area_info/insert_area_info', $data);
        $this->load->view('layout/footer');
    }
    public function expense_head() {
        $this->load->view('layout/header');
        $this->load->view('expense_head/insert_expense_head');
        $this->load->view('layout/footer');
    }
    public function income_head() {
        $this->load->view('layout/header');
        $this->load->view('income_head/insert_income_head');
        $this->load->view('layout/footer');
    }
    public function client_info() {
        $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $data['all_area'] = $this->Common_model->get_all_info('area_info');
        $data['all_package'] = $this->Common_model->get_all_info('package_info');
        $this->load->view('layout/header');
        $this->load->view('client_info/insert_client_info', $data);
        $this->load->view('layout/footer');
    }
    public function reseller_info() {
        $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $data['all_area'] = $this->Common_model->get_all_info('area_info');
        $data['all_package'] = $this->Common_model->get_all_info('package_info');
        $this->load->view('layout/header');
        $this->load->view('reseller_info/insert_reseller_info', $data);
        $this->load->view('layout/footer');
    }
    public function staff_info() {
        $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $this->load->view('layout/header');
        $this->load->view('staff_info/insert_staff_info', $data);
        $this->load->view('layout/footer');
    }
    public function expense() {
        $data['all_expense'] = $this->Common_model->get_all_info('expense_head');
        $this->load->view('layout/header');
        $this->load->view('expense/insert_expense', $data);
        $this->load->view('layout/footer');
    }
    public function income() {
        $data['all_income'] = $this->Common_model->get_all_info('income_head');
        $this->load->view('layout/header');
        $this->load->view('income/insert_income', $data);
        $this->load->view('layout/footer');
    }
    public function bill_generate() {
        // $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        // $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $data['all_client'] = $this->Common_model->get_all_info('client_info');
        $data['all_reseller'] = $this->Common_model->get_all_info('reseller_info');
        $this->load->view('layout/header');
        $this->load->view('bill_generate/insert_bill_generate', $data);
        $this->load->view('layout/footer');
    }
    public function invoice_generate() {
        $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $data['all_client'] = $this->Common_model->get_all_info('client_info');
        $data['all_reseller'] = $this->Common_model->get_all_info('reseller_info');
        $data['all_area'] = $this->Common_model->get_all_info('area_info');
        $this->load->view('layout/header');
        $this->load->view('invoice_generate/insert_invoice_generate', $data);
        $this->load->view('layout/footer');
    }
    public function edit_invoice_generate($inv_id) {
        $data['all_branch'] = $this->Common_model->get_all_info('branch_name');
        $data['all_service'] = $this->Common_model->get_all_info('service_type');
        $data['all_client'] = $this->Common_model->get_all_info('client_info');
        $data['all_reseller'] = $this->Common_model->get_all_info('reseller_info');
        $data['all_area'] = $this->Common_model->get_all_info('area_info');
        $data['one_inv'] = $this->Join_model->get_invoice_generate_by_id($inv_id);
        $this->load->view('layout/header');
        $this->load->view('invoice_generate/edit_invoice_generate', $data);
        $this->load->view('layout/footer');
    }
    public function balance_sheet() {
        $data['all_role'] = $this->Common_model->get_all_info('role_setting');
        $this->load->view('layout/header');
        $this->load->view('balance_sheet/search_balance_sheet', $data);
        $this->load->view('layout/footer');
    }
    public function due_bill_info(){
        $data['areas'] = $this->Common_model->get_all_info('area_info');
        $this->load->view('layout/header');
        $this->load->view('bill_generate/due_bill_info',$data);
        $this->load->view('layout/footer');
    }
    public function role_setting() {
        $data['all_menu'] = $this->Common_model->get_all_info('menu_name');
        $data['all_role'] = $this->Common_model->get_all_info('role_setting');
        $this->load->view('layout/header');
        $this->load->view('role_setting/insert_role_setting', $data);
        $this->load->view('layout/footer');
    }
    // The following codes are for eview system
    public function product_info() {   
        $data['category'] = $this->Common_model->get_all_info('category');
        $data['brands'] = $this->Common_model->get_all_info('brands');
        $data['sub_category'] = array();
        $data["type"]="";
        $this->load->view('layout/header');
        $this->load->view('product_info/product_info', $data);
        $this->load->view('layout/footer');
    }
    public function brand() {
        $brands = $this->Common_model->get_all_info('brands'); 
        $this->load->view('layout/header');
        $this->load->view('brands/brand',['brands'=>$brands]);
        $this->load->view('layout/footer');
    }
    public function mer_reg(){
        $data['category'] = $this->Common_model->get_all_info('category');
        $data['brands'] = $this->Common_model->get_all_info('brands');
        $data['sub_category'] = array();
        $data["type"]="";
        $this->load->view('layout/header');
        $this->load->view('mer_reg/mer_reg', $data);
        $this->load->view('layout/footer');       
    }
}
