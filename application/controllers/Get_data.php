<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Get_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Join_model');
    }

    public function get_client_info_invoice() {
        $client_id = $this->input->post('client_id');
        $result1 = $this->Join_model->get_bill_total($client_id);
        $result2 = $this->Join_model->get_paid_invoice_total($client_id);
        foreach($result1 as $row){
            $mobile=$row->mobile;
            $address=$row->address;
            $bg_amount=$row->bg_amount;
        }
        foreach($result2 as $row){
            $ig_amount=$row->ig_amount;
            $ig_discount=$row->ig_discount;
        }
        if(empty($bg_amount)){
            $bg_amount=0;
        }
        if(empty($ig_amount)){
            $ig_amount=0;
        }
        if(empty($ig_discount)){
            $ig_discount=0;
        }
        echo json_encode(array($mobile, $address, $bg_amount, $ig_amount, $ig_discount));
    }
    public function get_reseller_info_invoice() {
        $reseller_id = $this->input->post('reseller_id');
        $result1 = $this->Join_model->get_re_bill_total($reseller_id);
        $result2 = $this->Join_model->get_re_paid_invoice_total($reseller_id);
        foreach($result1 as $row){
            $mobile=$row->mobile;
            $address=$row->address;
            $bg_amount=$row->bg_amount;
        }
        foreach($result2 as $row){
            $ig_amount=$row->ig_amount;
            $ig_discount=$row->ig_discount;
        }
        if(empty($bg_amount)){
            $bg_amount=0;
        }
        if(empty($ig_amount)){
            $ig_amount=0;
        }
        if(empty($ig_discount)){
            $ig_discount=0;
        }
        echo json_encode(array($mobile, $address, $bg_amount, $ig_amount, $ig_discount));
    }
    public function client_info()
    {
        $id = $this->input->post('id');
        $data= $this->Common_model->get_allinfo_byid('client_info', 'record_id', $id);
        echo json_encode($data);
    }

    public function reseller_info()
    {
        $id = $this->input->post('id');
        $data= $this->Common_model->get_allinfo_byid('reseller_info', 'record_id', $id);
        echo json_encode($data);
    }

}
