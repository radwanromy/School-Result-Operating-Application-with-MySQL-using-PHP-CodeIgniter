<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $arrData['register_detail'] = $this->register_model->get_all_register_detail();
        $arrData['sub_detail'] = $this->register_model->get_all_sub_detail();
        $arrData['aca_detail'] = $this->register_model->get_all_academy_detail();
        // $exconData['register_details'] = $this->register_model->get_all_register_detail();
        // $exconData['sub_details'] = $this->register_model->get_all_sub_detail();
        // $exconData['aca_details'] = $this->register_model->get_all_academy_detail();
        $this->load->view('list', $arrData);
        // $this->load->view('exconadd', $exconData);
    }



    // public function exconadd()
    // {
    //     if ($this->input->post('btnaddexcon')) {
    //         $exconData['ayear'] = $this->input->post('txtayear');
    //         $exconData['aclass'] = $this->input->post('txtaclass');
    //         $exconData['asection'] = $this->input->post('txtasection');
    //         $exconData['aexam'] = $this->input->post('txtaexam');
    //         $exconData['agroup'] = $this->input->post('txtagroup');
    //         $exconData['sname'] = $this->input->post('txtSname');
    //         $exconData['subjective'] = $this->input->post('txtSubjective');
    //         $exconData['subjective_pass'] = $this->input->post('txtSubjectivePass');
    //         $exconData['objective'] = $this->input->post('txtObjective');
    //         $exconData['objective_pass'] = $this->input->post('txtObjectivePass');
    //         $exconData['practical'] = $this->input->post('txtPractical');
    //         $exconData['practical_pass'] = $this->input->post('txtPracticalPass');
    //         $exconData['exmark'] = $this->input->post('txtexmark');
    //         $exconData['atten'] = $this->input->post('txtatten');
    //         $exconData['status'] = $this->input->post('txtstatus');

    //         $insert = $this->register_model->insertexcon($exconData);
    //         if ($insert) {
    //             redirect('register');
    //         }
    //     }
    //     $this->load->view('exconadd');
    // }

    public function add()
    {
        if ($this->input->post('btnadd')) {
            $arrData['first_name'] = $this->input->post('txtFname');
            $arrData['last_name'] = $this->input->post('txtLname');
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
            $editData['first_name'] = $this->input->post('txtFname');
            $editData['last_name'] = $this->input->post('txtLname');
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

    public function delete($id)
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
    // public function get_ayear_dropdownlist()
    // {
    //     $data['academy_info'] = $this->register_model->get_ayear_dropdownlist();
    //     $this->load->view('list', $data);
    // }
}
