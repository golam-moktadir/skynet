<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Join_model extends CI_Model {

    public function get_package_info() {
        $this->db->select('PI.*, BN.branch_name, ST.service_type');
        $this->db->from('package_info as PI');
        $this->db->join('branch_name as BN', "PI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "PI.service_type_id = ST.record_id", 'left');
        //$this->db->order_by('PI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_area_info() {
        $this->db->select('AI.*, BN.branch_name, ST.service_type');
        $this->db->from('area_info as AI');
        $this->db->join('branch_name as BN', "AI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "AI.service_type_id = ST.record_id", 'left');
        //$this->db->order_by('PI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_client_info() {
        $this->db->select('CI.*, BN.branch_name, ST.service_type, AI.area_name, PI.package_name');
        $this->db->from('client_info as CI');
        $this->db->join('branch_name as BN', "CI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "CI.service_type_id = ST.record_id", 'left');
        $this->db->join('area_info as AI', "CI.area_id = AI.record_id", 'left');
        $this->db->join('package_info as PI', "CI.package_id = PI.record_id", 'left');
        $this->db->order_by('CI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_active_client_info() {
        $this->db->select('CI.*, BN.branch_name, ST.service_type, AI.area_name, PI.package_name');
        $this->db->from('client_info as CI');
        $this->db->where('CI.status', 1);
        $this->db->join('branch_name as BN', "CI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "CI.service_type_id = ST.record_id", 'left');
        $this->db->join('area_info as AI', "CI.area_id = AI.record_id", 'left');
        $this->db->join('package_info as PI', "CI.package_id = PI.record_id", 'left');
        $this->db->order_by('CI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_inactive_client_info() {
        $this->db->select('CI.*, BN.branch_name, ST.service_type, AI.area_name, PI.package_name');
        $this->db->from('client_info as CI');
        $this->db->where('CI.status', 0);
        $this->db->join('branch_name as BN', "CI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "CI.service_type_id = ST.record_id", 'left');
        $this->db->join('area_info as AI', "CI.area_id = AI.record_id", 'left');
        $this->db->join('package_info as PI', "CI.package_id = PI.record_id", 'left');
        $this->db->order_by('CI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_reseller_info() {
        $this->db->select('RI.*, BN.branch_name, ST.service_type, AI.area_name, PI.package_name');
        $this->db->from('reseller_info as RI');
        $this->db->join('branch_name as BN', "RI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "RI.service_type_id = ST.record_id", 'left');
        $this->db->join('area_info as AI', "RI.area_id = AI.record_id", 'left');
        $this->db->join('package_info as PI', "RI.package_id = PI.record_id", 'left');
        $this->db->order_by('RI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_active_reseller_info() {
        $this->db->select('RI.*, BN.branch_name, ST.service_type, AI.area_name, PI.package_name');
        $this->db->from('reseller_info as RI');
        $this->db->where('RI.status', 1);
        $this->db->join('branch_name as BN', "RI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "RI.service_type_id = ST.record_id", 'left');
        $this->db->join('area_info as AI', "RI.area_id = AI.record_id", 'left');
        $this->db->join('package_info as PI', "RI.package_id = PI.record_id", 'left');
        //$this->db->order_by('PI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_inactive_reseller_info() {
        $this->db->select('RI.*, BN.branch_name, ST.service_type, AI.area_name, PI.package_name');
        $this->db->from('reseller_info as RI');
        $this->db->where('RI.status', 0);
        $this->db->join('branch_name as BN', "RI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "RI.service_type_id = ST.record_id", 'left');
        $this->db->join('area_info as AI', "RI.area_id = AI.record_id", 'left');
        $this->db->join('package_info as PI', "RI.package_id = PI.record_id", 'left');
        //$this->db->order_by('PI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function total_validity_over() {
        $this->db->select('RI.*, BN.branch_name, ST.service_type, AI.area_name, PI.package_name');
        $this->db->from('reseller_info as RI');
        $this->db->where('RI.validity_date<', date('Y-m-d'));
        $this->db->join('branch_name as BN', "RI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "RI.service_type_id = ST.record_id", 'left');
        $this->db->join('area_info as AI', "RI.area_id = AI.record_id", 'left');
        $this->db->join('package_info as PI', "RI.package_id = PI.record_id", 'left');
        //$this->db->order_by('PI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_staff_info() {
        $this->db->select('SI.*, BN.branch_name, ST.service_type');
        $this->db->from('staff_info as SI');
        $this->db->join('branch_name as BN', "SI.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "SI.service_type_id = ST.record_id", 'left');
        //$this->db->order_by('PI.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_bill_generate() {
        $this->db->select('BG.*, IG.paid_date, BN.branch_name, ST.service_type, CI.name as client_name, RI.name as reseller_name,'
                . ' CI.mobile as c_mobile, AI.area_name, AIR.area_name as r_area');
        $this->db->from('bill_generate as BG');
        $this->db->join('invoice_generate as IG', "BG.invoice_code = IG.record_id", 'left');
        $this->db->join('branch_name as BN', "BG.branch_id = BN.record_id", 'left');
        $this->db->join('service_type as ST', "BG.service_type_id = ST.record_id", 'left');
        $this->db->join('client_info as CI', "BG.client_id = CI.record_id", 'left');
        $this->db->join('area_info as AI', "CI.area_id = AI.record_id", 'left');
        $this->db->join('reseller_info as RI', "BG.reseller_id = RI.record_id", 'left');
        $this->db->join('area_info as AIR', "RI.area_id = AIR.record_id", 'left');
        $this->db->order_by('BG.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_expense() {
        $this->db->select('EX.*, EH.head as ex_head, RS.full_name as paid_by');
        $this->db->from('expense as EX');
        $this->db->join('expense_head as EH', "EX.expense_head_id = EH.record_id", 'left');
        $this->db->join('role_setting as RS', "EX.paid_by_id = RS.record_id", 'left');
        return $this->db->get()->result();
    }

    public function get_income() {
        $this->db->select('IN.*, IH.head as in_head, RS.full_name as paid_by');
        $this->db->from('income as IN');
        $this->db->join('income_head as IH', "IN.income_head_id = IH.record_id", 'left');
        $this->db->join('role_setting as RS', "IN.paid_by_id = RS.record_id", 'left');
        return $this->db->get()->result();
    }

    public function get_bill_total($id) {
        $this->db->select('CI.*, SUM(BG.amount) AS bg_amount');
        $this->db->from('bill_generate as BG');
        $this->db->join('client_info as CI', "BG.client_id = CI.record_id", 'left');
        $this->db->where('BG.client_id', $id);
        return $this->db->get()->result();
    }

    public function get_paid_invoice_total($id) {
        $this->db->select('SUM(IG.discount) AS ig_discount, SUM(IG.paid_amount) AS ig_amount');
        $this->db->from('invoice_generate as IG');
        $this->db->where('IG.client_id', $id);
        return $this->db->get()->result();
    }

    public function get_re_bill_total($id) {
        $this->db->select('RI.*, SUM(BG.amount) AS bg_amount');
        $this->db->from('bill_generate as BG');
        $this->db->join('reseller_info as RI', "BG.reseller_id = RI.record_id", 'left');
        $this->db->where('BG.reseller_id', $id);
        return $this->db->get()->result();
    }

    public function get_re_paid_invoice_total($id) {
        $this->db->select('SUM(IG.discount) AS ig_discount, SUM(IG.paid_amount) AS ig_amount');
        $this->db->from('invoice_generate as IG');
        $this->db->where('IG.reseller_id', $id);
        return $this->db->get()->result();
    }

    public function get_invoice_generate() {
        $this->db->select('IG.*, CI.name as client_name, RI.name as reseller_name, RS.full_name');
        $this->db->from('invoice_generate as IG');
//        $this->db->join('branch_name as BN', "IG.branch_id = BN.record_id", 'left');
//        $this->db->join('service_type as ST', "IG.service_type_id = ST.record_id", 'left');
        $this->db->join('client_info as CI', "IG.client_id = CI.record_id", 'left');
        $this->db->join('reseller_info as RI', "IG.reseller_id = RI.record_id", 'left');
//        $this->db->join('area_info as AI', "IG.area_id = AI.record_id", 'left');
        $this->db->join('role_setting as RS', "IG.collect_by = RS.record_id", 'left');
        $this->db->order_by('IG.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_invoice_generate_by_id($inv_id) {
        $this->db->select('IG.*, CI.name as client_name, RI.name as reseller_name, RS.full_name');
        $this->db->from('invoice_generate as IG');
        $this->db->join('client_info as CI', "IG.client_id = CI.record_id", 'left');
        $this->db->join('reseller_info as RI', "IG.reseller_id = RI.record_id", 'left');
        $this->db->join('role_setting as RS', "IG.collect_by = RS.record_id", 'left');
        $this->db->where('IG.record_id', $inv_id);
        return $this->db->get()->result();
    }

    public function get_balance_sheet_income($date_from, $date_to, $client_reseller, $user) {
        $this->db->select('IG.*, RS.full_name, CI.name as client_name, RI.name as reseller_name');
        $this->db->from('invoice_generate as IG');
        $this->db->join('role_setting as RS', "IG.collect_by = RS.record_id", 'left');
        $this->db->join('client_info as CI', "IG.client_id = CI.record_id", 'left');
        $this->db->join('reseller_info as RI', "IG.reseller_id = RI.record_id", 'left');
        if (!empty($client_reseller)) {
            $this->db->where('IG.client_reseller', $client_reseller);
        }

       
        $this->db->where('IG.paid_date >=', $date_from);
        $this->db->where('IG.paid_date <=', $date_to);
         if (!empty($user)) {
            $this->db->where('IG.collect_by', $user);
        }
        
        $this->db->order_by('IG.record_id', 'desc');
        return $this->db->get()->result();
    }

    public function get_balance_sheet_extra_income($date_from, $date_to, $client_reseller, $user) {
        $this->db->select('IN.*');
        $this->db->from('income as IN');
        // $this->db->join('role_setting as RS', "IG.collect_by = RS.record_id", 'left');
        // $this->db->join('client_info as CI', "IG.client_id = CI.record_id", 'left');
        // $this->db->join('reseller_info as RI', "IG.reseller_id = RI.record_id", 'left');
        if (!empty($client_reseller)) {
            $this->db->where('IN.client_reseller', $client_reseller);
        }

        $this->db->where('IN.date >=', $date_from);
        $this->db->where('IN.date <=', $date_to);
         if (!empty($user)) {
            $this->db->where('IN.paid_by_id', $user);
        }
        
        $this->db->order_by('IN.record_id', 'desc');
        return $this->db->get()->result();
    }
    public function get_balance_sheet_expense($date_from, $date_to, $client_reseller, $user) {
        $this->db->select('EX.*, RS.full_name, EH.head');
        $this->db->from('expense as EX');
        $this->db->join('expense_head as EH', "EX.expense_head_id = EH.record_id", 'left');
        $this->db->join('role_setting as RS', "EX.paid_by_id = RS.record_id", 'left');
        if (!empty($client_reseller)) {
            $this->db->where('EX.client_reseller', $client_reseller);
        }
        $this->db->where('EX.date >=', $date_from);
        $this->db->where('EX.date <=', $date_to);
        if (!empty($user)) {
            $this->db->where('EX.paid_by_id', $user);
        }
        $this->db->order_by('EX.record_id', 'desc');
        return $this->db->get()->result();
    }
    public function get_all_product() {
        $this->db->select('PD.*, CG.category as cat, SC.sub_category as sub_cat, brands.*');
        $this->db->from('product as PD');
        $this->db->order_by('PD.record_id', 'DESC');
        $this->db->join('category as CG', "PD.category = CG.record_id", 'left');
        $this->db->join('sub_category as SC', "PD.sub_category = SC.record_id", 'left');
        $this->db->join('brands', "PD.brand = brands.record_id", 'left');
        return $this->db->get()->result();
    }

}

?>