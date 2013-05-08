<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_AdminController extends CI_Controller
{
    /**
     * Main construct function. Check for login.
     */
    public function __construct()
    {
        parent::__construct();

        if (!$this->isLogin()) {
            redirect('admin_panel/');
        }

        $this->load->library('AdminLayout');
    }

    /**
     * Function check for login.
     *
     * @return bool
     */
    protected function isLogin()
    {
        if ($this->session->userdata('auth')) {
            return true;
        }

        return false;
    }
}