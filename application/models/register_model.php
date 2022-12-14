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

    public function  get_all_result_detail()
    {
        $this->db->select('*');
        $this->db->from('students');
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

    public function get_id_wise_result_detail($id)
    {
        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('stdid', $id);
        $objQuery = $this->db->get();
        return $objQuery->result_array();
    }

    public function total_result_detail()
    {
        $this->db->select("COUNT(*) as num_row");
        $this->db->from('students');
        $this->db->order_by('roll');
        $query = $this->db->get();
        $result = $query->result();
        return $result[0]->num_row;
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

    public function updateresult($editData, $id)
    {
        $this->db->where('stdid', $id);

        if ($this->db->update('students', $editData)) {
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

    public function getUserPagintaion($limit, $start)
    {

        $this->db->select('*');
        $this->db->from('students');
        $this->db->limit($limit, $start);
        $this->db->GROUP_BY ('roll'); 
        $this->db->order_by('roll');
        $query = $this->db->get();
        return $result = $query->result();
    }

    public function getUserCount()
    {

        $this->db->select("COUNT(*) as num_row");
        $this->db->from('students');
        $this->db->order_by('roll');
        $query = $this->db->get();
        $result = $query->result();
        
        return $result[0]->num_row;
    }


    public function getData($rowno,$rowperpage,$search="") {
 
        $this->db->select('*');
        $this->db->from('students');
    
        if($search != ''){
          $this->db->like('stdid', $search);
          $this->db->or_like('roll', $search);
        }
    
        $this->db->limit($rowperpage, $rowno); 
        $query = $this->db->get();
     
        return $query->result_array();
      }
    
      public function getrecordCount($search = '') {
    
        $this->db->select('count(*) as allcount');
        $this->db->from('students');
     
        if($search != ''){
          $this->db->like('stdid', $search);
          $this->db->or_like('roll', $search);
        }
    
        $query = $this->db->get();
        $result = $query->result_array();
     
        return $result[0]['allcount'];
      }

      public function getUserCountp()
      {
  
          $this->db->select("COUNT(distinct stdname) as num_row");
          $this->db->from('students');
          $this->db->order_by('roll');
          $query = $this->db->get();
          $result = $query->result();

        //   echo $result[0]->num_row;

          
          return $result[0]->num_row;
      }

   
      

}
