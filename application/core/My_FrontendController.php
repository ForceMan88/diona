<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_FrontendController extends CI_Controller
{
    /**
     * Main construct function. Check for login.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('FrontendLayout', 'layout');
    }

}