<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagementStakeholder extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Stakeholder_model');


		$this->lang->load('btn','english');
        // $this->lang->load('btn','portuguese-brazilian');
        $this->lang->load('stakeholder','english');
        // $this->lang->load('manage-cost','portuguese-brazilian');

	}

	public function addnew($project_id){
		$dado['id'] = $project_id;
		$this->load->view('frame/header_view');
		$this->load->view('frame/sidebar_nav_view');
		$this->load->view('project/stakeholder/stakeholder',$dado);
	}

    public function delete($stakeholder_id){

        $project_id['project_id'] = $this->input->post('project_id');
        //$project_id['project_id'] = $project_id;
        $query = $this->Stakeholder_model->deleteStakeholder($stakeholder_id);
        if($query){
            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            redirect(base_url() . 'ManagementStakeholder/list/' . $project_id['project_id']);
        }
    }

    public function list($project_id){
        $dado['project_id'] = $project_id;

        $dado['stakeholder'] = $this->Stakeholder_model->getAllStakeholders($project_id);
        $this->load->view('frame/header_view');
        $this->load->view('frame/sidebar_nav_view');
        $this->load->view('project/stakeholder/stakeholder_register/list',$dado);
    }

    public function edit($stakeholder_id) {

        $query['risk_register'] = $this->Stakeholder_model->getStakeholder($stakeholder_id);
        $this->load->view('frame/header_view.php');
        $this->load->view('frame/sidebar_nav_view.php');
        $this->load->view('project/stakeholder/stakeholder_register/edit', $query);
    }



    public function update($stakeholder_id) {
        $stakeholder['name'] = $this->input->post('name');
        $stakeholder['type'] = $this->input->post('type');
        $stakeholder['organization'] = $this->input->post('organization');
        $stakeholder['position'] = $this->input->post('position');
        $stakeholder['role'] = $this->input->post('role');
        $stakeholder['responsibility'] = $this->input->post('responsibility');
        $stakeholder['email'] = $this->input->post('email');
        $stakeholder['phone_number'] = $this->input->post('phone_number');
        $stakeholder['work_place'] = $this->input->post('work_place');
        $stakeholder['essential_requirements'] = $this->input->post('essential_requirements');
        $stakeholder['main_expectations'] = $this->input->post('main_expectations');
        $stakeholder['interest_phase'] = $this->input->post('interest_phase');
        $stakeholder['observations'] = $this->input->post('observations');
        $stakeholder['project_id'] = $id;

        $query = $this->Stakeholder_model->updateStakeholder($stakeholder,$stakeholder_id);

        if ($query) {
            redirect('ManagementStakeholder/list/' . $stakeholder_id['project_id']);
        }

    }

	public function insert($id){
		$stakeholder['name'] = $this->input->post('name');
        $stakeholder['type'] = $this->input->post('type');
        $stakeholder['organization'] = $this->input->post('organization');
        $stakeholder['position'] = $this->input->post('position');
        $stakeholder['role'] = $this->input->post('role');
        $stakeholder['responsibility'] = $this->input->post('responsibility');
        $stakeholder['email'] = $this->input->post('email');
        $stakeholder['phone_number'] = $this->input->post('phone_number');
        $stakeholder['work_place'] = $this->input->post('work_place');
        $stakeholder['essential_requirements'] = $this->input->post('essential_requirements');
        $stakeholder['main_expectations'] = $this->input->post('main_expectations');
        $stakeholder['interest_phase'] = $this->input->post('interest_phase');
        $stakeholder['observations'] = $this->input->post('observations');
        $stakeholder['project_id'] = $id;
		$query = $this->Stakeholder_model->insert($stakeholder);
		
		if($query){
			$this->load->view('frame/header_view');
			$this->load->view('frame/sidebar_nav_view');
			redirect('project/' . $stakeholder['project_id']);
		}

	}


}
?>