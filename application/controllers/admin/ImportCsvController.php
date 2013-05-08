<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class ImportCsvController extends MY_AdminController
{

    public function index()
    {

        $this->adminlayout->addTemplate('import', '');
        $this->adminlayout->render();
    }

  public function upload()
    {
        $config['upload_path'] = FCPATH . 'media' . DIRECTORY_SEPARATOR . 'import'; //. DIRECTORY_SEPARATOR;
//     var_dump( $config['upload_path']);exit;
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $this->session->set_userdata('error', $this->upload->display_errors());
            redirect('admin_panel/import/index');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $data = $this->upload->data();
            $data = $this->_parseCsv($data['full_path']);
            $this->session->set_userdata('success', 'Import successefully finished');
            redirect('admin_panel/sales/index');
        }
    }

    private function _parseCsv($path)
    {
        $this->load->model('admin/import_csv', 'import_csv');
        return $this->import_csv->parse_file($path);
    }

}
