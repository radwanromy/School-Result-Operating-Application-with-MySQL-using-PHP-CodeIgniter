<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database('default');
        $this->load->library('session');

        // Call the Model constructor
        parent::__construct();
    }

    public function get_all_register_detail()
    {
        $this->db->select('*');
        $this->db->from('register');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_all_sub_detail()
    {
        $this->db->select('*');
        $this->db->from('subjects');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_all_academy_detail()
    {
        $this->db->select('*');
        $this->db->from('academy_info');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_all_excon_detail()
    {
        $this->db->select('*');
        $this->db->from('excon');
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_id_wise_register_detail($id)
    {
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where('id', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_scode_wise_sub_detail($id)
    {
        $this->db->select('*');
        $this->db->from('subjects');
        $this->db->where('scode', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_acode_wise_acamdey_detail($id)
    {
        $this->db->select('*');
        $this->db->from('academy_info');
        $this->db->where('acode', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function get_exconid_wise_excon_detail($id)
    {
        $this->db->select('*');
        $this->db->from('excon');
        $this->db->where('exconid', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function insertexcon($exconData)
    {
        if ($this->db->insert('excon', $exconData)) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($arrData)
    {
        if ($this->db->insert('register', $arrData)) {
            return true;
        } else {
            return false;
        }
    }

    public function insertstd($arrData)
    {
        if ($this->db->insert('students', $arrData)) {
            return true;
        } else {
            return false;
        }
    }

    public function insertsub($arrData)
    {
        if ($this->db->insert('subjects', $arrData)) {
            return true;
        } else {
            return false;
        }
    }

    public function insertaca($arrData)
    {
        if ($this->db->insert('academy_info', $arrData)) {
            return true;
        } else {
            return false;
        }
    }


    public function update($editData, $id)
    {
        $this->db->where('id', $id);

        if ($this->db->update('register', $editData)) {
            return true;
        } else {
            return false;
        }
    }

    public function updatesub($editData, $id)
    {
        $this->db->where('scode', $id);

        if ($this->db->update('subjects', $editData)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateaca($editData, $id)
    {
        $this->db->where('acode', $id);

        if ($this->db->update('academy_info', $editData)) {
            return true;
        } else {
            return false;
        }
    }


    public function updateexcon($editData, $id)
    {
        $this->db->where('exconid', $id);

        if ($this->db->update('excon', $editData)) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id)
    {

        if ($this->db->delete('register', array('id' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    function deletesub($id)
    {

        if ($this->db->delete('subjects', array('scode' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    function deleteaca($id)
    {

        if ($this->db->delete('academy_info', array('acode' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    function deleteexcon($id)
    {

        if ($this->db->delete('excon', array('exconid' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    function deletestd($id)
    {

        if ($this->db->delete('students', array('stdsl' => $id))) {
            return true;
        } else {
            return false;
        }
    }

    // function get_ayear_dropdownlist()
    // {
    //     $results = $this->db->select('ayear');
    //     $results = $this->db->from('academy_info');
    //     $results = $this->db->result_array();

    //     return array_column($results, 'ayear');
    // }
}
