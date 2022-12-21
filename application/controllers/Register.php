<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        // $this->load->model('search_model');
        $this->load->helper('url');
        
    }

    public function index()
    {
        $arrData['register_detail'] = $this->register_model->get_all_register_detail();
        $arrData['sub_detail'] = $this->register_model->get_all_sub_detail();
        $arrData['aca_detail'] = $this->register_model->get_all_academy_detail();
        $arrData['excon_detail'] = $this->register_model->get_all_excon_detail();
        //  $arrData['register_details'] = $this->register_model->get_all_register_detail();
        //  $arrData['sub_details'] = $this->register_model->get_all_sub_detail();
        //  $arrData['aca_details'] = $this->register_model->get_all_academy_detail();
        $this->load->view('list', $arrData);
        // $this->load->view('exconadd', $arrData);
        // $this->load->view('exconadd',  $arrData);
        $this->load->library('pagination');
        $config['total_rows'] = $this->register_model->getUserCount();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
        $data['message'] = '';
        $data['records'] = $this->register_model->getUserPagintaion($config['per_page'], $page);
        $this->load->view('search_data', $data);
    }



    public function exconadd()
    {
        if ($this->input->post('btnaddexcon')) {
            $arrData['ayear'] = $this->input->post('txtayear');
            $arrData['aclass'] = $this->input->post('txtaclass');
            $arrData['asection'] = $this->input->post('txtasection');
            $arrData['aexam'] = $this->input->post('txtaexam');
            $arrData['agroup'] = $this->input->post('txtagroup');
            $arrData['sname'] = $this->input->post('txtSname');
            $arrData['subjective'] = $this->input->post('txtSubjective');
            $arrData['subjective_pass'] = $this->input->post('txtSubjectivePass');
            $arrData['objective'] = $this->input->post('txtObjective');
            $arrData['objective_pass'] = $this->input->post('txtObjectivePass');
            $arrData['practical'] = $this->input->post('txtPractical');
            $arrData['practical_pass'] = $this->input->post('txtPracticalPass');
            $arrData['exmark'] = $this->input->post('txtexmark');
            $arrData['atten'] = $this->input->post('txtatten');
            $arrData['status'] = $this->input->post('txtstatus');

            $insert = $this->register_model->insertexcon($arrData);
            if ($insert) {
                redirect('register');
            }
        }
        $this->load->view('exconadd');
    }

    public function add()
    {
        if ($this->input->post('btnadd')) {
            $arrData['studnetid'] = $this->input->post('txtStudentid');
            $arrData['stdroll'] = $this->input->post('txtRoll');
            $arrData['sname'] = $this->input->post('txtSname');
            $arrData['address'] = $this->input->post('txtAddress');
            $arrData['email'] = $this->input->post('txtEmail');
            $arrData['mobile'] = $this->input->post('txtMobile');

            $insert = $this->register_model->insert($arrData);
            if ($insert) {
                redirect('register');
            }
        }
        $this->load->view('add');
    }

    public function stdadd()
    {
        if ($this->input->post('btnstdadd')) {
            $arrData['stdyear'] = $this->input->post('txtstdyear');
            $arrData['stdsub'] = $this->input->post('txtstdsub');
            $arrData['stdexam'] = $this->input->post('txtstdexam');
            $arrData['stdid'] = $this->input->post('txtstdid');
            $arrData['roll'] = $this->input->post('txtroll');
            $arrData['stdname'] = $this->input->post('txtstdname');
            $arrData['tmark'] = $this->input->post('txttmarks');
            $arrData['stdclass'] = $this->input->post('txtstdclass');
            $arrData['stdsection'] = $this->input->post('txtstdsection');
            $arrData['stdgroup'] = $this->input->post('txtstdgroup');
            $arrData['subjective'] = $this->input->post('txtsubjective');
            $arrData['objective'] = $this->input->post('txtobjective');
            $arrData['practical'] = $this->input->post('txtpractical');

            $insert = $this->register_model->insertstd($arrData);
            if ($insert) {
                redirect('register');
            }
        }
        $this->load->view('stdadd');
    }

    public function subadd()
    {
        if ($this->input->post('btnsubadd')) {
            // $arrData['scode'] = $this->input->post('txtScode');
            $arrData['sname'] = $this->input->post('txtSname');
            $arrData['subjective'] = $this->input->post('txtSubjective');
            $arrData['subjective_pass'] = $this->input->post('txtSubjectivePass');
            $arrData['objective'] = $this->input->post('txtObjective');
            $arrData['objective_pass'] = $this->input->post('txtObjectivePass');
            $arrData['practical'] = $this->input->post('txtPractical');
            $arrData['practical_pass'] = $this->input->post('txtPracticalPass');

            $insert = $this->register_model->insertsub($arrData);
            if ($insert) {
                redirect('register');
            }
        }
        $this->load->view('subadd');
    }

    public function acaadd()
    {
        if ($this->input->post('btnacaadd')) {
            // $arrData['scode'] = $this->input->post('txtScode');
            // $arrData['acode'] = $this->input->post('txtacode');
            $arrData['ayear'] = $this->input->post('txtayear');
            $arrData['aclass'] = $this->input->post('txtaclass');
            $arrData['asection'] = $this->input->post('txtasection');
            $arrData['aexam'] = $this->input->post('txtaexam');
            $arrData['agroup'] = $this->input->post('txtagroup');
            $insert = $this->register_model->insertaca($arrData);
            if ($insert) {
                redirect('register');
            }
        }
        $this->load->view('acaadd');
    }


    public function edit($id)
    {
        $arrData['register_detail'] = $this->register_model->get_id_wise_register_detail($id);

        if ($this->input->post('btnEdit')) {
            $editData['studentid'] = $this->input->post('txtStudentid');
            $editData['stdroll'] = $this->input->post('txtRoll');
            $editData['sname'] = $this->input->post('txtSname');
            $editData['address'] = $this->input->post('txtAddress');
            $editData['email'] = $this->input->post('txtEmail');
            $editData['mobile'] = $this->input->post('txtMobile');

            $update = $this->register_model->update($editData, $id);
            if ($update) {
                redirect('register');
            }
        }
        $this->load->view('edit', $arrData);
    }

    public function subedit($scode)
    {
        $arrData['sub_detail'] = $this->register_model->get_scode_wise_sub_detail($scode);

        if ($this->input->post('btnSubEdit')) {
            $editData['sname'] = $this->input->post('txtsname');
            $editData['subjective'] = $this->input->post('txtsubjective');
            $editData['subjective_pass'] = $this->input->post('txtsubjective_pass');
            $editData['objective'] = $this->input->post('txtobjective');
            $editData['objective_pass'] = $this->input->post('txtobjective_pass');
            $editData['practical'] = $this->input->post('txtpractical');
            $editData['practical_pass'] = $this->input->post('txtpractical_pass');

            $update = $this->register_model->updatesub($editData, $scode);
            if ($update) {
                redirect('register');
            }
        }
        $this->load->view('subedit', $arrData);
    }

    public function acaedit($id)
    {
        $arrData['aca_detail'] = $this->register_model->get_acode_wise_acamdey_detail($id);

        if ($this->input->post('btnAcaEdit')) {
            $editData['ayear'] = $this->input->post('txtayear');
            $editData['aclass'] = $this->input->post('txtaclass');
            $editData['asection'] = $this->input->post('txtasection');
            $editData['aexam'] = $this->input->post('txtaexam');
            $editData['agroup'] = $this->input->post('txtagroup');

            $update = $this->register_model->updateaca($editData, $id);
            if ($update) {
                redirect('register');
            }
        }
        $this->load->view('acaedit', $arrData);
    }

    public function exconedit($id)
    {
        $arrData['excon_detail'] = $this->register_model->get_exconid_wise_excon_detail($id);

        if ($this->input->post('btnExconEdit')) {
            $editData['ayear'] = $this->input->post('txtayear');
            $editData['aclass'] = $this->input->post('txtaclass');
            $editData['asection'] = $this->input->post('txtasection');
            $editData['aexam'] = $this->input->post('txtaexam');
            $editData['agroup'] = $this->input->post('txtagroup');
            $editData['sname'] = $this->input->post('txtSname');
            $editData['subjective'] = $this->input->post('txtSubjective');
            $editData['subjective_pass'] = $this->input->post('txtSubjectivePass');
            $editData['objective'] = $this->input->post('txtObjective');
            $editData['objective_pass'] = $this->input->post('txtObjectivePass');
            $editData['practical'] = $this->input->post('txtPractical');
            $editData['practical_pass'] = $this->input->post('txtPracticalPass');
            $editData['exmark'] = $this->input->post('txtexmark');
            $editData['atten'] = $this->input->post('txtatten');
            $editData['status'] = $this->input->post('txtstatus');

            $update = $this->register_model->updateexcon($editData, $id);
            if ($update) {
                redirect('register');
            }
        }
        $this->load->view('exconedit', $arrData);
    }

    public function delete($id)
    {
        $delete = $this->register_model->delete($id);
        if ($delete) {
            redirect('register');
        }
    }

    public function deletestd($id)
    {
        $delete = $this->register_model->delete($id);
        if ($delete) {
            redirect('register');
        }
    }

    public function deletesub($id)
    {
        $delete = $this->register_model->deletesub($id);
        if ($delete) {
            redirect('register');
        }
    }

    public function deleteaca($id)
    {
        $delete = $this->register_model->deleteaca($id);
        if ($delete) {
            redirect('register');
        }
    }

    public function deleteexcon($id)
    {
        $delete = $this->register_model->deleteexcon($id);
        if ($delete) {
            redirect('register');
        }
    }
    // public function get_ayear_dropdownlist()
    // {
    //     $data['academy_info'] = $this->register_model->get_ayear_dropdownlist();
    //     $this->load->view('list', $data);
    // }

    public function searchUser() {
        
        $key = $this->input->post('register');

        if(isset($key) and !empty($key)){
            $data['records'] = $this->register_model->searchRecord($key);
            $data['link'] = '';
            $data['message'] = 'Search Results';
            $this->load->view('search_data' , $data);
        }
        else {
            redirect('register') ;
        }
    }

    public function searchRecord($key)
    {
        $this->db->select('*');
        $this->db->from('students');
        $this->db->like('stdid',$key);
        $this->db->or_like('stdname',$key);
        $this->db->or_like('roll',$key);
        $query = $this->db->get();

        if($query->num_rows()>0){
          return $query->result();
        }
    }

       
        
    
}
