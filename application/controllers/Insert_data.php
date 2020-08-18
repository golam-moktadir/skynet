<?php

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Dhaka');

class Insert_data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->model('Individual_model');
    }

    public function branch_name() {
        $branch_name = $this->input->post('branch_name');
        $address = $this->input->post('address');

        $insert_data = array(
            'branch_name' => $branch_name,
            'address' => $address
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('branch_name', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function service_type() {
        $service_type = $this->input->post('service_type');

        $insert_data = array(
            'service_type' => $service_type
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('service_type', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function package_info() {
        $branch_id = $this->input->post('branch_id');
        $service_id = $this->input->post('service_id');
        $package_code = $this->input->post('package_code');
        $package_name = $this->input->post('package_name');
        $bandwidth = $this->input->post('bandwidth');
        $price = $this->input->post('package_price');

        $insert_data = array(
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
            'package_code' => $package_code,
            'package_name' => $package_name,
            'bandwidth' => $bandwidth,
            'price' => $price
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('package_info', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function area_info() {
        $branch_id = $this->input->post('branch_id');
        $service_id = $this->input->post('service_id');
        $area_name = $this->input->post('area_name');

        $insert_data = array(
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
            'area_name' => $area_name
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('area_info', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function expense_head() {
        $expense_head = $this->input->post('expense_head');

        $insert_data = array(
            'head' => $expense_head
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('expense_head', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }
    
    public function income_head() {
        $income_head = $this->input->post('income_head');

        $insert_data = array(
            'head' => $income_head
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('income_head', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
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

        $insert_data1 = array(
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
            'package_price' => $package_price,
            'status' => 1
        );

        $insert_data2 = array(
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
        $this->Common_model->insert_data('client_info', $insert_data1);
        $this->Common_model->insert_data('bill_generate', $insert_data2);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function reseller_info() {
        $branch_id = $this->input->post('branch_id');
        $service_id = $this->input->post('service_id');
        $area_id = $this->input->post('area_id');
        $package_id = $this->input->post('package_id');
        $connection_date = $this->input->post('date');
        $connection_charge = $this->input->post('connection_charge');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $address = $this->input->post('address');
        $issue_pin = $this->input->post('issue_pin');
        $use_pin = $this->input->post('use_pin');
        $code_no = $this->input->post('code_no');
        $package_price = $this->input->post('package_price');
        $card_no = $this->input->post('card_no');
        $validity_date = $this->input->post('validity_date');

        $insert_data1 = array(
            'record_id' => $code_no,
            'card_no' => $card_no,
            'validity_date' => $validity_date,
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
            'area_id' => $area_id,
            'package_id' => $package_id,
            'connection_date' => $connection_date,
            'connection_charge' => $connection_charge,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'address' => $address,
            'issue_pin' => $issue_pin,
            'use_pin' => $use_pin,
            'package_price' => $package_price,
            'status' => 1
        );

        $insert_data2 = array(
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
            'client_reseller' => "Reseller",
            'client_id' => 0,
            'reseller_id' => $code_no,
            'generate_month' => "",
            'generate_year' => "",
            'head' => "Connection Charge",
            'amount' => $connection_charge,
            'partial_amount' => $connection_charge
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('reseller_info', $insert_data1);
        $this->Common_model->insert_data('bill_generate', $insert_data2);
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function bill_generate() {

        $client_reseller = $this->input->post('client_reseller');
        $client_id = $this->input->post('client_list');
        $reseller_id = $this->input->post('reseller_list');
        $generate_month = $this->input->post('generate_month');
        $generate_year = $this->input->post('generate_year');
        $insert_data = array();
       
        if ($client_reseller == "Client") {
            $c = 0;
            foreach ($client_id as $client) {
                $checking_array = array(
                    'client_reseller' => $client_reseller,
                    'client_id' => $client,
                    'generate_month' => $generate_month,
                    'generate_year' => $generate_year
                );
                $check_result = $this->Common_model->check_value("bill_generate", $checking_array);

                if ($check_result == FALSE) {
                  //  $amount = $this->Individual_model->client_package_amount($client);
                    $amount = $this->Individual_model->client_info($client);
                    $insert_data[$c] = array(
                        'branch_id' => $amount->branch_id,
                        'service_type_id' => $amount->service_type_id,
                        'area_id'=>$amount->area_id,
                        'client_reseller' => $client_reseller,
                        'client_id' => $client,
                        'reseller_id' => 0,
                        'head' => "Monthly Bill",
                        'amount' => $amount->package_price,
                        'generate_month' => $generate_month,
                        'generate_year' => $generate_year,
                        'partial_amount' => $amount->package_price
                    );
                    $c++;
                }
            }
            
        } elseif ($client_reseller == "Reseller") {
            $r = 0;
            foreach ($reseller_id as $reseller) {
                $checking_array = array(
                    'client_reseller' => $client_reseller,
                    'reseller_id' => $reseller,
                    'generate_month' => $generate_month,
                    'generate_year' => $generate_year
                );
                $check_result = $this->Common_model->check_value("bill_generate", $checking_array);
                if ($check_result == FALSE) {
                    $row = $this->Individual_model->reseller_package_amount($reseller);
                    $insert_data[$r] = array(
                        'branch_id' => $branch_id,
                        'service_type_id' => $service_id,
                        'client_reseller' => $client_reseller,
                        'client_id' => 0,
                        'reseller_id' => $reseller,
                        'generate_month' => $generate_month,
                        'generate_year' => $generate_year,
                        'head' => "Monthly Bill",
                        'amount' => $row['package_price'] * $row['issue_pin'],
                        'partial_amount' => $row['package_price'] * $row['issue_pin']
                    );
                    $r++;
                }
            }
        }

        if (!empty($insert_data)) {
            $this->Common_model->trans_start();
            $this->Common_model->insert_multiple_data('bill_generate', $insert_data);
            $this->Common_model->trans_complete();
            if ($this->Common_model->trans_status() == true) {
                echo json_encode("Inserted Successfully");
            } else {
                echo json_encode("Error Occured");
            }
        } else {
            echo json_encode("Duplicated Data Avoided");
        }
    }

    public function staff_info() {
        $branch_id = $this->input->post('branch_id');
        $service_id = $this->input->post('service_id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $address = $this->input->post('address');
        $joining_date = $this->input->post('joining_date');
        $salary = $this->input->post('salary');

        $insert_data = array(
            'branch_id' => $branch_id,
            'service_type_id' => $service_id,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'address' => $address,
            'joining_date' => $joining_date,
            'salary' => $salary
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('staff_info', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function expense() {
        $date = $this->input->post('date');
        $invoice_no = $this->input->post('invoice_no');
        $client_reseller = $this->input->post('client_reseller');
        $expense_head_id = $this->input->post('expense_head_id');
        $amount = $this->input->post('amount');
        $remarks = $this->input->post('remarks');
        $paid_by_id = $this->session->ses_record_id;

        $insert_data = array(
            'date' => $date,
            'invoice_no' => $invoice_no,
            'client_reseller' => $client_reseller,
            'expense_head_id' => $expense_head_id,
            'amount' => $amount,
            'remarks' => $remarks,
            'paid_by_id' => $paid_by_id
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('expense', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function income() {
        $date = $this->input->post('date');
        $invoice_no = $this->input->post('invoice_no');
        $client_reseller = $this->input->post('client_reseller');
        $income_head_id = $this->input->post('income_head_id');
        $amount = $this->input->post('amount');
        $remarks = $this->input->post('remarks');
        $paid_by_id = $this->session->ses_record_id;

        $insert_data = array(
            'date' => $date,
            'invoice_no' => $invoice_no,
            'client_reseller' => $client_reseller,
            'income_head_id' => $income_head_id,
            'amount' => $amount,
            'remarks' => $remarks,
            'paid_by_id' => $paid_by_id
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('income', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function invoice_generate() {
        $row = $this->Common_model->get_last_data("invoice_generate");
        if (empty($row)) {
            $last_id = 0;
        } else {
            $last_id = $row->record_id;
        }
        $client_reseller = $this->input->post('client_reseller');
        $client_list = $this->input->post('client_list');
        $reseller_list = $this->input->post('reseller_list');
        $mobile = $this->input->post('mobile');
        $address = $this->input->post('address');
        $paid_date = $this->input->post('date');
        $due_mon_amount = $this->input->post('due_mon_amount');
        $discount = $this->input->post('discount');
        $sub_total = $this->input->post('sub_total');
        $paid_amount = $this->input->post('paid_amount');
        $due = $this->input->post('due');
        $advance = $this->input->post('advance');
        $remarks = $this->input->post('remarks');
        $receipt_no = $this->input->post('receipt_no');
        $collect_by = $this->session->ses_record_id;

        $insert_data = array(
            'record_id' => $last_id + 1,
            'client_reseller' => $client_reseller,
            'client_id' => $client_list,
            'reseller_id' => $reseller_list,
            'mobile' => $mobile,
            'address' => $address,
            'paid_date' => $paid_date,
            'due_mon_amount' => $due_mon_amount,
            'discount' => $discount,
            'sub_total' => $sub_total,
            'paid_amount' => $paid_amount,
            'due' => $due,
            'advance' => $advance,
            'remarks' => $remarks,
            'collect_by' => $collect_by,
            'receipt_no' => $receipt_no
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('invoice_generate', $insert_data);
        $this->Common_model->trans_complete();

        $paid_amount += $discount;
        if ($client_reseller == "Client") {
            $not_paid = $this->Individual_model->bill_not_paid_client($client_list);
            foreach ($not_paid as $np) {
                $bill_id = $np['record_id'];
                $bill_amount = $np['partial_amount'];
                if ($bill_amount <= $paid_amount) {
                    $status = 1;
                    $partial_due = 0;
                    $inv_code = $last_id + 1;
                    $this->Individual_model->update_paid_status_client($client_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount -= $bill_amount;
                } else {
                    $status = 0;
                    $partial_due = $bill_amount - $paid_amount;
                    $inv_code = $last_id + 1;
                    $this->Individual_model->update_paid_status_client($client_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount = 0;
                    break;
                }
            }
        } elseif ($client_reseller == "Reseller") {
            $not_paid = $this->Individual_model->bill_not_paid_reseller($reseller_list);
            foreach ($not_paid as $np) {
                $bill_id = $np['record_id'];
                $bill_amount = $np['partial_amount'];
                if ($bill_amount <= $paid_amount) {
                    $status = 1;
                    $partial_due = 0;
                    $inv_code = $last_id + 1;
                    $this->Individual_model->update_paid_status_reseller($reseller_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount -= $bill_amount;
                } else {
                    $status = 0;
                    $partial_due = $bill_amount - $paid_amount;
                    $inv_code = $last_id + 1;
                    $this->Individual_model->update_paid_status_reseller($reseller_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount = 0;
                    break;
                }
            }
        }

        if ($this->Common_model->trans_status() == true) {
            $data['all_value_bill'] = $this->Individual_model->get_invoice_bill($last_id + 1);
            $data['all_value_invoice'] = $this->Individual_model->get_invoice($last_id + 1);
            $result = $this->load->view('invoice_generate/invoice', $data, true);
            echo json_encode($result);
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function edit_invoice_generate() {
        $record_id = $this->input->post('record_id');
        $this->Individual_model->update_bill_generate($record_id);

        $client_reseller = $this->input->post('client_reseller');
        $client_list = $this->input->post('client_list');
        $reseller_list = $this->input->post('reseller_list');
        $mobile = $this->input->post('mobile');
        $address = $this->input->post('address');
        $paid_date = $this->input->post('date');
        $due_mon_amount = $this->input->post('due_mon_amount');
        $discount = $this->input->post('discount');
        $sub_total = $this->input->post('sub_total');
        $paid_amount = $this->input->post('paid_amount');
        $due = $this->input->post('due');
        $advance = $this->input->post('advance');
        $remarks = $this->input->post('remarks');
        $receipt_no = $this->input->post('receipt_no');
        $collect_by = $this->session->ses_record_id;

        $update_data = array(
            'record_id' => $record_id,
            'client_reseller' => $client_reseller,
            'client_id' => $client_list,
            'reseller_id' => $reseller_list,
            'mobile' => $mobile,
            'address' => $address,
            'paid_date' => $paid_date,
            'due_mon_amount' => $due_mon_amount,
            'discount' => $discount,
            'sub_total' => $sub_total,
            'paid_amount' => $paid_amount,
            'due' => $due,
            'advance' => $advance,
            'remarks' => $remarks,
            'collect_by' => $collect_by,
            'receipt_no' => $receipt_no
        );
        $this->Common_model->trans_start();
        $this->Common_model->update_data_onerow('invoice_generate', $update_data, 'record_id', $record_id);
        $this->Common_model->trans_complete();

        $paid_amount += $discount;
        if ($client_reseller == "Client") {
            $not_paid = $this->Individual_model->bill_not_paid_client($client_list);
            foreach ($not_paid as $np) {
                $bill_id = $np['record_id'];
                $bill_amount = $np['partial_amount'];
                if ($bill_amount <= $paid_amount) {
                    $status = 1;
                    $partial_due = 0;
                    $inv_code = $record_id;
                    $this->Individual_model->update_paid_status_client($client_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount -= $bill_amount;
                } else {
                    $status = 0;
                    $partial_due = $bill_amount - $paid_amount;
                    $inv_code = $record_id;
                    $this->Individual_model->update_paid_status_client($client_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount = 0;
                    break;
                }
            }
        } elseif ($client_reseller == "Reseller") {
            $not_paid = $this->Individual_model->bill_not_paid_reseller($reseller_list);
            foreach ($not_paid as $np) {
                $bill_id = $np['record_id'];
                $bill_amount = $np['partial_amount'];
                if ($bill_amount <= $paid_amount) {
                    $status = 1;
                    $partial_due = 0;
                    $inv_code = $record_id;
                    $this->Individual_model->update_paid_status_reseller($reseller_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount -= $bill_amount;
                } else {
                    $status = 0;
                    $partial_due = $bill_amount - $paid_amount;
                    $inv_code = $record_id;
                    $this->Individual_model->update_paid_status_reseller($reseller_list, $bill_id, $status, $partial_due, $inv_code);
                    $paid_amount = 0;
                    break;
                }
            }
        }

        if ($this->Common_model->trans_status() == true) {
            $data['all_value_bill'] = $this->Individual_model->get_invoice_bill($record_id);
            $data['all_value_invoice'] = $this->Individual_model->get_invoice($record_id);
            $result = $this->load->view('invoice_generate/invoice', $data, true);
            echo json_encode($result);
        } else {
            echo json_encode("Error Occured");
        }
    }

    public function show_invoice($inv_id) {
        $data['all_value_bill'] = $this->Individual_model->get_invoice_bill($inv_id);
        $data['all_value_invoice'] = $this->Individual_model->get_invoice($inv_id);
        $result = $this->load->view('invoice_generate/invoice', $data, true);
        echo json_encode($result);
    }
    public function balance_sheet() {
        $data['all_value'] = $this->Common_model->get_all_info('reseller_info');
        $this->load->view('admin/header');
        $this->load->view('admin/balance_sheet', $data);
        $this->load->view('admin/footer');
    }

    public function role_setting() {
        $full_name = $this->input->post('full_name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');

        $view_menu_id = $this->input->post('view_menu');
        $view_ids = "";
        if (!empty($view_menu_id)) {
            foreach ($view_menu_id as $one) {
                $view_ids .= $one . ",";
            }
        }

        $insert_menu_id = $this->input->post('insert_menu');
        $insert_ids = "";
        if (!empty($insert_menu_id)) {
            foreach ($insert_menu_id as $one) {
                $insert_ids .= $one . ",";
            }
        }

        $edit_menu_id = $this->input->post('edit_menu');
        $edit_ids = "";
        if (!empty($edit_menu_id)) {
            foreach ($edit_menu_id as $one) {
                $edit_ids .= $one . ",";
            }
        }

        $delete_menu_id = $this->input->post('delete_menu');
        $delete_ids = "";
        if (!empty($delete_menu_id)) {
            foreach ($delete_menu_id as $one) {
                $delete_ids .= $one . ",";
            }
        }


        $insert_data = array(
            'full_name' => $full_name,
            'email' => $email,
            'mobile' => $mobile,
            'user_name' => $user_name,
            'password' => $password,
            'view_menu_id' => $view_ids,
            'insert_menu_id' => $insert_ids,
            'edit_menu_id' => $edit_ids,
            'delete_menu_id' => $delete_ids,
            'status' => 1
        );
        $this->Common_model->trans_start();
        $this->Common_model->insert_data('role_setting', $insert_data);
        $this->Common_model->trans_complete();
        if ($this->Common_model->trans_status() == true) {
            echo json_encode("Inserted Successfully");
        } else {
            echo json_encode("Error Occured");
        }
    }
    public function brand(){
        $this->load->library('upload');
        $config['upload_path'] = './assets/img/brands/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->upload->initialize($config);
        $this->upload->do_upload('image');
       
        $image = $this->upload->data();
        $data = [
                'brand'=>$this->input->post('brand'),
                'image'=>$image['file_name']
                ];
        $this->Common_model->insert_data('brands', $data);
        $this->session->set_flashdata('message', 'Data Inserted Successfully');
        redirect(base_url().'Show_form/brand');
    }
        public function mer_reg() {
        
        $config['upload_path'] = './assets/img/mer_reg/';
        $config['allowed_types'] = 'gif|jpg|png';
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('picture');
        $image = $this->upload->data();

        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/img/mer_reg/'.$image['file_name'];
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 300;
        $config['height'] = 300;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $insert_data = array(
            'name' => $this->input->post('name'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'status' => 0,
            'category' => $this->input->post('category'),
            'res_person' => $this->input->post('res_person'),
            'country' => $this->input->post('country'),
            'image' => $image['file_name']
        );
        $insert_id = $this->Common_model->insert_mer('mer_reg', $insert_data);

        foreach($this->input->post('sub_category') as $subcategory){

         $this->Common_model->sub_category_details([
                                               'company_id' => $insert_id,
                                               'category_id' => $this->input->post('category'),
                                               'sub_category_id' => $subcategory
                                          ]);
        }

        $this->session->set_flashdata("message","Registration Completed Successfully. We will send feedback soon");
        redirect(base_url().'/Show_form/mer_reg');        
    }
}
