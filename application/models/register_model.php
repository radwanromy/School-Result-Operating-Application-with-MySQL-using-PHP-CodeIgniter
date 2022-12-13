<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function __construct() {
        $this->load->database('default');
        $this->load->library('session');

        // Call the Model constructor
        parent::__construct();
    }

    public function get_all_register_detail() {
        $this->db->select('*');
        $this->db->from('register');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_id_wise_register_detail($id) {
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where('id', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function insert($arrData) {
        if ($this->db->insert('register', $arrData)) {
            return true;
        } else {
            return false;
        }
    }

    public function update($editData, $id) {
        $this->db->where('id', $id);

        if ($this->db->update('register', $editData)) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id) {

        if ($this->db->delete('register', array('id' => $id))) {
            return true;
        } else {
            return false;
        }
    }

}

?>