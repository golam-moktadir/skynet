<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Edit_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Individual_model');
    }

    public function change_status() {
        $id = $this->input->post('id');
        $status_value = $this->input->post('status_value');
        $db_name = $this->input->post('db_name');
        $this->Individual_model->change_status($id, $status_value, $db_name);
        echo json_encode("Status Changed");
    }

    public function client_info() {
        $branch_id = $this->input->post('branch_name');
        $service_id = $this->input->post('service_type');
        $area_id = $this->input->post('area');
        $package_id = $this->input->post('package');
        $connection_date = $this->input->post('date');
        $connection_charge = $this->input->post('connection_charge');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $address = $this->input->post('address');
        $code_no = $this->input->post('code_no');
        $nid = $this->input->post('nid');
        $package_price = $this->input->post('package_price');
        $image = $code_no . ".jpg";

        $config['file_name'] = $image;
        $config['upload_path'] = './assets/img/client/';
        $config['allowed_types'] = '*';
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/img/client/' . $image;
//                $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 200;
        $config['height'] = 200;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $update_data1 = array(
            'record_id' => $code_no,
            'image' => $image,
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
            'nid' => $nid,
            'area_id' => $area_id,
            'package_id' => $package_id,
            'connection_date' => $connection_date,
            'connection_charge' => $connection_charge,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'address' => $address,
            'package_price' => $package_price
        );

        $update_data2 = array(
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
            'client_reseller' => "Client",
            'client_id' => $code_no,
            'reseller_id' => 0,
            'generate_month' => "",
            'generate_year' => "",
            'head' => "Connection Charge",
            'amount' => $connection_charge,
            'partial_amount' => $connection_charge
        );
        $this->Common_model->trans_start();
        $this->Common_model->update_data_onerow('client_info', $update_data1, 'record_id', $code_no);
        $this->Common_model->update_data_onerow_where_array('bill_generate', $update_data2,
                array('client_id' => $code_no, 'head' => "Connection Charge"));
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Edited Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function reseller_info() {
        $branch_id = $this->input->post('branch_name');
        $service_id = $this->input->post('service_type');
        $area_id = $this->input->post('area');
        $package_id = $this->input->post('package');
        $connection_date = $this->input->post('date');
        $connection_charge = $this->input->post('connection_charge');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $address = $this->input->post('address');
        $code_no = $this->input->post('code_no');
//        $nid = $this->input->post('nid');
        $package_price = $this->input->post('package_price');
        $issue_pin = $this->input->post('issue_pin');
//        $image = $code_no . ".jpg";
//
//        $config['file_name'] = $image;
//        $config['upload_path'] = './assets/img/reseller/';
//        $config['allowed_types'] = '*';
//        $config['max_width'] = 0;
//        $config['max_height'] = 0;
//        $config['overwrite'] = TRUE;
//
//        $this->load->library('upload', $config);
//        $this->upload->do_upload('image');
//
//        $config['image_library'] = 'gd2';
//        $config['source_image'] = './assets/img/reseller/' . $image;
////                $config['create_thumb'] = TRUE;
//        $config['maintain_ratio'] = TRUE;
//        $config['width'] = 200;
//        $config['height'] = 200;
//
//        $this->load->library('image_lib', $config);
//        $this->image_lib->resize();
        $card_no = $this->input->post('card_no');
        $validity_date = $this->input->post('validity_date');

        $update_data1 = array(
            'record_id' => $code_no,
//            'image' => $image,
            'card_no' => $card_no,
            'validity_date' => $validity_date,
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
//            'nid' => $nid,
            'area_id' => $area_id,
            'package_id' => $package_id,
            'connection_date' => $connection_date,
            'connection_charge' => $connection_charge,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'address' => $address,
            'package_price' => $package_price,
            'issue_pin' => $issue_pin
        );

//        $update_data2 = array(
//            'branch_id' => $branch_id,
//            'service_type_id' => $service_id,
//            'client_reseller' => "Reseller",
//            'client_id' => 0,
//            'reseller_id' => $code_no,
//            'generate_month' => "",
//            'generate_year' => "",
//            'head' => "Connection Charge",
//            'amount' => $connection_charge,
//            'partial_amount' => $connection_charge
//        );
        $this->Common_model->trans_start();
        $this->Common_model->update_data_onerow('reseller_info', $update_data1, 'record_id', $code_no);
//        $this->Common_model->update_data_onerow_where_array('bill_generate', $update_data2,
//                array('reseller_id' => $code_no,  'head' => "Connection Charge"));
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Edited Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

}
