<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Individual_model extends CI_Model {

    public function change_status($id, $status_value, $db_name) {
        $data = array(
            'status' => $status_value
        );

        $this->db->where('record_id', $id);
        $this->db->update($db_name, $data);
    }

   public function client_package_amount($id) {
        $this->db->select('package_price');
        $this->db->from('client_info');
        $this->db->where('record_id', $id);
        return $this->db->get()->row()->package_price;
    }
    public function client_info($id) {
        $this->db->where('record_id', $id);
        $query = $this->db->get('client_info');
        return $query->row();
    }
    public function reseller_package_amount($id) {
        $this->db->select('package_price, issue_pin');
        $this->db->from('reseller_info');
        $this->db->where('record_id', $id);
        return $this->db->get()->row_array();
    }

    public function bill_not_paid_client($id) {
        $this->db->select('*');
        $this->db->from('bill_generate');
        $this->db->where('client_id', $id);
        $this->db->where('paid_status !=', 1);
        return $this->db->get()->result_array();
    }

    public function bill_not_paid_reseller($id) {
        $this->db->select('*');
        $this->db->from('bill_generate');
        $this->db->where('reseller_id', $id);
        $this->db->where('paid_status !=', 1);
        return $this->db->get()->result_array();
    }

    public function update_paid_status_client($client_list, $bill_id, $status, $partial, $inv_code) {
        $data['paid_status'] = $status;
        $data['partial_amount'] = $partial;
        $data['invoice_code'] = $inv_code;
        $this->db->where('record_id', $bill_id);
        $this->db->where('client_id', $client_list);
        $this->db->update("bill_generate", $data);
    }

    public function update_paid_status_reseller($reseller_list, $bill_id, $status, $partial, $inv_code) {
        $data['paid_status'] = $status;
        $data['partial_amount'] = $partial;
        $data['invoice_code'] = $inv_code;
        $this->db->where('record_id', $bill_id);
        $this->db->where('reseller_id', $reseller_list);
        $this->db->update("bill_generate", $data);
    }

    public function get_invoice_bill($id) {
        $this->db->select('*');
        $this->db->from('bill_generate');
        $this->db->where('invoice_code', $id);
        return $this->db->get()->result();
    }

    public function get_invoice($id) {
        $this->db->select('IG.*, CI.name as client_name, RI.name as reseller_name, RS.full_name');
        $this->db->from('invoice_generate as IG');
//        $this->db->join('branch_name as BN', "IG.branch_id = BN.record_id", 'left');
//        $this->db->join('service_type as ST', "IG.service_type_id = ST.record_id", 'left');
        $this->db->join('client_info as CI', "IG.client_id = CI.record_id", 'left');
        $this->db->join('reseller_info as RI', "IG.reseller_id = RI.record_id", 'left');
//        $this->db->join('area_info as AI', "IG.area_id = AI.record_id", 'left');
        $this->db->join('role_setting as RS', "IG.collect_by = RS.record_id", 'left');
        $this->db->where('IG.record_id', $id);
        return $this->db->get()->result();
    }

    function update_bill_generate($inv_id) {
        $this->db->set('partial_amount', 'amount', FALSE);
        $this->db->set('invoice_code', 0);
        $this->db->set('paid_status', 0);
        $this->db->where('invoice_code', $inv_id);
        $this->db->update('bill_generate');
    }

}

?>