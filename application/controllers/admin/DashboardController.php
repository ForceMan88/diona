<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class DashboardController extends MY_AdminController
{
    /**
     * Function view dashboard template.
     *
     * @return void
     */
    public function index()
    {
        $this->adminlayout->addTemplate('dashboard', '');
        $this->adminlayout->render();
    }
}