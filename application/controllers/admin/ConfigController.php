<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class ConfigController extends MY_AdminController
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
     * @return void.
     */
    public function index()
    {
        $this->load->model('admin/config', 'setting');

        $this->adminlayout->addTemplate('config/list', array(
            'currency_rate' => $this->setting->getConfigByName('currency_rate')));
        $this->adminlayout->render();
    }

    /**
     * Main construct function.
     *
     * @return void.
     */
    public function update()
    {
        $this->load->model('admin/config', 'setting');

        if(trim($this->input->post('currency_rate')) != '') {
            $currency  = str_replace(',', '.', $this->input->post('currency_rate'));
            $this->setting->saveConfig('currency_rate', (double)$currency);
            $this->session->set_userdata('success', 'Config successefully updated.');

        }else {
            $this->session->set_userdata('error', 'Please set correct value.');
        }

        redirect('admin_panel/config/index');
    }
}