<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paybankfs extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/Paybankf_model');
        $this->page_title->push(lang('menu_paybankf'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_paybankf'), 'admin/paybankfs');
    }


	public function index()
	{
		if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
		{
			redirect('auth', 'refresh');
		}
        else
        {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();
             $this->data['paybankfs'] = $this->Paybankf_model->getPaybankf();


            /* Load Template */
            $this->template->admin_render('admin/paybankfs/index', $this->data);
        }
	}

    public function create(){
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth', 'refresh');
        }
        else 
        {
        $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/paybankfs/create');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
        
        
      $this->template->admin_render('admin/paybankfs/create', $this->data);
  }
    }

    public function save(){
        $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/paybankfs/create');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
         $this->form_validation->set_rules('bankcode', 'Bank Code', 'required');
         $this->form_validation->set_rules('name', 'Bank Name', 'required');
         $this->form_validation->set_rules('brcode', 'Branch Code', 'required');
         $this->form_validation->set_rules('branch', 'Bank Branch', 'required');
         $this->form_validation->set_rules('address', 'Address', 'required');
         if ($this->form_validation->run()==false) {
            $this->template->admin_render('admin/paybankfs/create', $this->data);
         }
         else{
            $data = array(
             'bankcode' => $this->input->post('bankcode'),
             'name' => $this->input->post('name'),
             'brcode' => $this->input->post('brcode'),
             'branch' => $this->input->post('branch'),
             'address' => $this->input->post('address'),
            );
             $paybankfs = $this->Paybankf_model->addPaybankf($data);
            return redirect('admin/paybankfs/index');
         }
         
    }
    public function edit($id){
        $this->breadcrumbs->unshift(2, lang('groups_edit_paybankf'), 'admin/paybankfs/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show(); 
         $this->data['paybankf'] = $this->Paybankf_model->getSinglePaybankf($id);
      $this->template->admin_render('admin/paybankfs/edit', $this->data);   
    }

    public function update($id){
      $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/paybankfs/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
         $this->load->helper(array('form', 'url'));
         $this->load->library('form_validation');
         $this->form_validation->set_rules('bankcode', 'Bank Code', 'required');
         $this->form_validation->set_rules('name', 'Bank Name', 'required');
         $this->form_validation->set_rules('brcode', 'Branch Code', 'required');
         $this->form_validation->set_rules('branch', 'Bank Branch', 'required');
         $this->form_validation->set_rules('address', 'Address', 'required');
       if ($this->form_validation->run()==false) {
            $this->template->admin_render('admin/paybankfs/edit', $this->data);
         }
         else{
            $data = array(
             'bankcode' => $this->input->post('bankcode'),
             'name' => $this->input->post('name'),
             'brcode' => $this->input->post('brcode'),
             'branch' => $this->input->post('branch'),
             'address' => $this->input->post('address'),
            );
             $paybankfs = $this->Paybankf_model->updatePaybankf($id,$data);
            return redirect('admin/paybankfs/index');
         }
         

    }
    public function delete($id){
        $this->Paybankf_model->deletePaybankf($id);
            redirect('admin/paybankfs/index');
    }
}
