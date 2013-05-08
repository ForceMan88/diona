<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     *
     */
    public function index()
    {
        if ($this->session->userdata('auth')) {
            redirect('admin_panel/dashboard');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login', 'required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

        if ($this->form_validation->run() !== false) {
            // then validation passed. Get from db
            $this->load->model('admin/adminmodel', 'admin_model');
            $res = $this
                ->admin_model
                ->loginCheck(
                $this->input->post('login'),
                $this->input->post('password')
            );

            if ($res !== false) {
                $this->session->set_userdata('auth', $this->input->post('login'));
                redirect('admin_panel/dashboard');
                $this->form_validation->set_message('login', 'Wrong combination');
            }

        }

        $this->load->view('admin_panel/login');
    }
    /**
     *
     */
    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('admin_panel/login');
    }

 }