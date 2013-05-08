<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class SalesController extends MY_AdminController
{
    /**
     * Main construct function.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Main construct function.
     *
     * @param string  $limit Limit for display sales.
     *
     * @return void.
     */
    public function index($limit = '')
    {
        $this->load->model('admin/sales', 'sales');

        $this->load->library('pagination');

        $config['base_url'] = base_url('admin_panel/sales/index/');

        $config['per_page'] = 20;
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['uri_segment'] = 4;
        $config['total_rows'] = $this->db->count_all('main');

        $this->pagination->initialize($config);
        $this->adminlayout->addTemplate('sales/list', array(
            'list' => $this->sales->getAllSales($limit, $config['per_page']),
            'pagination' => $this->pagination->create_links()));
        $this->adminlayout->render();
    }

    /**
     * Search item by id.
     *
     * @param null $id Sales id for serch.
     */
    public function search($id = null)
    {
        $this->adminlayout->addTemplate('sales/search');
        $this->load->model('admin/sales', 'sales');
        if (is_null($id)) {
            $id = $this->input->post('id');
        }

        if (!empty($id) and $prop = $this->sales->getSalesById($id)) {
            $this->adminlayout->addTemplate('sales/edit',
                array('prop' => $prop, 'images' => $this->sales->getImagesById($id)));
        } else {
            $this->session->set_userdata('error', 'Incorrect id.');
        }

        $this->adminlayout->render();
    }

    /**
     * Upload image for sales.
     *
     * @return void
     */
    public function upload()
    {
        $config['upload_path'] = FCPATH . 'media' . DIRECTORY_SEPARATOR . 'frontend'
            . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'sales';
        $config['max_size'] = '10000';
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['is_image'] = true;
        $entity_id = $this->input->post('entity_id');
        if (!$entity_id) {
            $this->session->set_userdata('error', 'Error detected');
            redirect('admin_panel/sales/search/' . $entity_id);
        }
        $this->load->library('upload');
        $this->load->library('MY_Upload', $config);

        if (!$this->upload->do_multi_upload('userfile', true, $entity_id, $config)) {
            $this->session->set_userdata('error', $this->upload->display_errors());
            redirect('admin_panel/sales/search/' . $entity_id);
        }
        else
        {
            $this->session->set_userdata('success', 'File successefully upload');
        }

        redirect('admin_panel/sales/search/' . $entity_id);
    }

    /**
     * Function set and unset top sales.
     *
     * @return void
     */
    public function setTopSales()
    {
        $top_sales = $this->input->post('top_sales');
        $this->load->model('admin/sales', 'sales');
        if ($entity_id = $this->input->post('entity_id')) {
            if (!empty($top_sales)) {
                $this->sales->set_top_sales($entity_id);
                $this->session->set_userdata('success', 'Top sales set');
            } else {
                if ($this->sales->top_sales_exist($entity_id)) {
                    $this->sales->remove_top_sales($entity_id);
                    $this->session->set_userdata('error', 'Top sales unset');
                }
            }
        }
        redirect('admin_panel/sales/search/' . $entity_id);
    }
}