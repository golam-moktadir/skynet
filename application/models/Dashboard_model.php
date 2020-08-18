<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
    public function total_staff()
    {
        return $this->db->count_all_results("staff_info");
    }
    
    public function total_active_client()
    {
        $this->db->where('status', 1);
        return $this->db->count_all_results("client_info");
    }
    public function total_validity_over()
    {
        $this->db->where('validity_date <', date('Y-m-d'));
        return $this->db->count_all_results("reseller_info");
    }
    public function total_active_reseller()
    {
        $this->db->where('status', 1);
        return $this->db->count_all_results("reseller_info");
    }
    public function total_bill()
    {
        $this->db->select_sum('amount');
        return $this->db->get('bill_generate')->row()->amount; 
    }
    public function total_collection()
    {
        $this->db->select_sum('paid_amount');
        return $this->db->get('invoice_generate')->row()->paid_amount; 
    }
     public function total_discount()
    {
        $this->db->select_sum('discount');
        return $this->db->get('invoice_generate')->row()->discount; 
    }
   
    public function total_inactive_client()
    {
        $this->db->where('status', 0);
        return $this->db->count_all_results("client_info");
    }
    public function total_inactive_reseller()
    {
        $this->db->where('status', 0);
        return $this->db->count_all_results("reseller_info");
    }
}

?>