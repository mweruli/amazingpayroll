<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Title Page :: Common */
        $this->load->model('admin/Resources_model');
        $this->page_title->push(lang('menu_resources'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_resources'), 'admin/resources');
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
            $this->data['resources'] = $this->Resources_model->getPost();

            //$resources=$this->Resources_model->getPost();
            $this->template->admin_render('admin/resources/index', $this->data);
        }
	}
    public function create(){
      
        /* Breadcrumbs */
        $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/resources/create');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
        
        
      $this->template->admin_render('admin/resources/create', $this->data);
     }
public function save(){
      

        /* Breadcrumbs */
        $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/resources/create');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

                  $this->load->library('form_validation');
               $this->form_validation->set_rules('deptcode', 'Deptcode', 'required');
                $this->form_validation->set_rules('intamt', 'Intrest', 'required');
                $this->form_validation->set_rules('empbrch', 'Empbrch', 'required');

                if ($this->form_validation->run())
                {
                       $data = $this->input->post();
                       unset($data['submit']);
                       if ($this->Resources_model->addPost($data)) {
                          $this->session->set_flashdata('msg','created');
                       }else{
                          $this->session->set_flashdata('msg','not created');
                       }
                       return redirect('admin/resources/index');
                }
                else
                {
                       $this->template->admin_render('admin/resources/create', $this->data);
                }
        
        
      
     }
     public function edit($id){
       
        $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/resources/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();
        
        
        $this->data['resource'] = $this->Resources_model->getSinglePost($id);

      
        
        
      $this->template->admin_render('admin/resources/edit', $this->data);
     }

     public function update($id){

         $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/resources/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

                if ($this->form_validation->run()==false) {
            $this->template->admin_render('admin/resources/edit', $this->data);
         }
         else{
            $data = array(
             'deptcode' => $this->input->post('deptcode'),
             'empno' => $this->input->post('empno'),
             'code' => $this->input->post('code'),
             'glaccno' => $this->input->post('glaccno'),
             'amount' => $this->input->post('amount'),
             'balance' => $this->input->post('balance'),
             'loanbf' => $this->input->post('loanbf'),
             'intamt' => $this->input->post('intamt'),
             'periodate' => $this->input->post('periodate'),
             'debit' => $this->input->post('debit'),
             'credit' => $this->input->post('credit'),
             'empbrch' => $this->input->post('empbrch'), 
            );
             $resources = $this->Resources_model->updatePost($id,$data);
            return redirect('admin/resources/index');
         }
        
     }
     public function delete($id){
       if ($this->Resources_model->deletePost($id)) {
          $this->session->set_flashdata('msg','created');
       }else{
        $this->session->set_flashdata('msg','created');
       }
       return redirect('admin/resources/index');

     }

     
}
