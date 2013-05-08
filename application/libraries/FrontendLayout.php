<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class FrontendLayout
{
    protected $_templates = array();

    protected $_header = array();

    /**
     * Function render all layout template.
     */
    public function render()
    {
        $CI =& get_instance();
        $CI->load->view('frontend/page/header', $this->_header);

        $CI->load->model('cms', 'cms_model');

        $menu = array();
        if (($res = $CI->cms_model->get_cms_menu())) {
            $menu = $res;
        }

        $CI->load->view('frontend/page/menu', array('data' => $menu));

        foreach ($this->_templates as $name => $data) {
            $CI->load->view('frontend/' . $name, array('data' => str_ireplace('{skin_url}', skin_url(), $data)));
        }

        $CI->load->view('frontend/page/footer');
        $this->collector();
    }

    /**
     * Add tempalte to layout.
     * @param $name
     * @param array $data
     */
    public function addTemplate($name, $data = array())
    {
        $this->_templates[$name] = $data;
    }

    /**
     * Add header title, keyword, description.
     *
     * @param $name
     *
     * @param $data
     *
     * @return FrontendLayout
     */
    public function addHeader($name, $data)
    {
        $this->_header[$name] = $data;
        return $this;
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