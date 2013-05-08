<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class AdminLayout
{
    protected $_templates = array();

    /**
     * Function render all layout template.
     */
    public function render()
    {
        $CI =& get_instance();
        $CI->load->view('admin_panel/page/header');
        $CI->load->view('admin_panel/page/menu',
            array('information' => array('success' => $CI->session->userdata('success'),
            'error' => $CI->session->userdata('error'))));
        $CI->load->view('admin_panel/page/information');

        foreach($this->_templates as $name => $data) {
            $CI->load->view('admin_panel/' . $name, array('data' => $data));
        }


        $CI->load->view('admin_panel/page/footer');
        $this->collector();
    }

    /**
     * Add tempalte to layout.
     *
     * @param $name
     *
     * @param array $data
     */
    public function addTemplate($name, $data = array())
    {
        $this->_templates[$name] = $data;
    }

    /**
     * Unset success and error data.
     */
    public function collector()
    {
        $CI =& get_instance();
        $CI->session->unset_userdata('success');
        $CI->session->unset_userdata('error');
    }





}