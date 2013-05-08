<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class cmscontroller extends My_FrontendController
{
    public function index($page)
    {
        $this->load->model('cms', 'cms_model');
        if (!($res = $this->cms_model->get_cms_page($page))) {
            echo "<h1>404</h1>";
        }

        $this->frontendlayout
            ->addHeader('title', $res->title)
            ->addHeader('keywords', $res->keywords)
            ->addHeader('description', $res->keywords);

        $this->frontendlayout->addTemplate('cms', $res->content);

        $this->frontendlayout->render();

    }




}