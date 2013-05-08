<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class CmsController extends MY_AdminController
{
    public function index()
    {
        $this->load->model('admin/cmsmodel', 'cms_model');
        $res = $this->cms_model->get_cms_list();
        $this->adminlayout->addTemplate('cms/cms_list', $res ? $res : array());
        $this->adminlayout->render();
    }

    public function cmsCreate()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[4]');
        $this->form_validation->set_rules('content', 'Content', 'required|min_length[4]');
        $this->form_validation->set_rules('url', 'Url', 'required|min_length[4]');
        $this->form_validation->set_rules('sort_order', 'Sort order', 'required');
        $this->form_validation->set_rules('keywords', 'Keywords', 'required|min_length[4]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[4]');
        $this->form_validation->set_rules('menu_title', 'Menu title', 'required|min_length[4]');


        if ($this->form_validation->run() !== false) {

            $this->load->model('admin/cmsmodel', 'cms_model');
            $res = $this
                ->cms_model
                ->save($this->input->post());

            $this->session->set_userdata('success', 'Cms page successefully created.');
            redirect('admin/CmsController');
        }
        $this->session->set_userdata('error', validation_errors());

        $this->adminlayout->addTemplate('cms/cms_create');
        $this->adminlayout->render();
    }

    public function delete($id = null)
    {
        $this->session->set_userdata('success', 'Cms pages successefully deleted.');
        if ($id == null) {
            $this->session->set_userdata('error', 'Please select cms for removing.');
            redirect('admin_panel/cms/index`');
        }


        $this->load->model('admin/cmsmodel', 'cms_model');
        if (!$res = $this->cms_model->delete($id)) {
            $this->session->set_userdata('error', 'Cms page does not exist.');
        }

        redirect('admin/CmsController');
    }


}