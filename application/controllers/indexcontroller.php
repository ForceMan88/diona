<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class indexcontroller extends My_FrontendController
{

    const EMAIL = 'diona.zt@gmail.com';
    /**
     * Main construct function. Check for login.
     */
    protected $_real_estate = array(
        'flat' => 'flat',
        'room' => 'oбщ',
        'house' => 'дом',
        'parthouse' => 'ч/д',
        'cottage' => 'дачи',
        'plot' => 'уч',
        'industry' => 'к/н',
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->frontendlayout
            ->addHeader('title', 'Недвижимость в Житомире, купить квартиру, продать квартиру - «ДIОНА»')
            ->addHeader('keywords', 'Недвижимость в Житомире, купить
            квартиру в Житомире, продать квартиру в Житомире')
            ->addHeader('description', 'Покупка и продажа квартир в Житомире.
             Покупка любого характера недвижимости: будь то просто квартира либо элитный коттедж.');

        $this->load->model('sales');
        $this->frontendlayout->addTemplate('main', $this->sales->getTopSales());
        $this->frontendlayout->render();
    }

    public function search()
    {
        $this->frontendlayout
            ->addHeader('title', 'Результат запроса')
            ->addHeader('keywords', 'Недвижимость в Житомире, купить
            квартиру в Житомире, продать квартиру в Житомире')
            ->addHeader('description', 'Покупка и продажа квартир в Житомире.
             Покупка любого характера недвижимости: будь то просто квартира либо элитный коттедж.');

        $data = array();
        $info
            = array();
        $pagination = array();
        if ($this->input->get() and $real_estate = $this->input->get('real_estate') and
            isset($this->_real_estate[$real_estate])
        ) {
            $config['base_url'] = preg_replace('/per_page=[0-9]{2,4}/', '', current_url_query());

            $config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';

            $config['per_page'] = 20;
            $config['num_links'] = 3;
            $config['display_pages'] = true;
            $config['page_query_string'] = TRUE;

            $this->load->model('sales');
            $data = $this->sales->getSelectSales($this->input->get(),  $this->_real_estate[$real_estate], $config['per_page'], $this->input->get('per_page'));
            $this->load->library('pagination');

            $config['total_rows'] = $data['count_item'];

            $this->pagination->initialize($config);
            $pagination = $this->pagination->create_links();

            $info = array('items' => $data['items'], 'pagination' => $pagination, 'count_item' => $config['total_rows']);
        }
        $this->frontendlayout->addTemplate('search',$info);
        $this->frontendlayout->render();
    }


    private function _captcha()
    {

        $this->load->helper('captcha');

        $vals = array(
            'img_path' => FCPATH . 'media' . DIRECTORY_SEPARATOR . 'frontend'
                . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'captcha' . DIRECTORY_SEPARATOR,
            'img_url' => base_url('media/frontend/image/captcha') . '/',
            'img_width' => '200',
            'img_height' => 40,
            'expiration' => 7200
        );

        $cap = create_captcha($vals);

        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );

        $this->load->model('captcha');
        $this->captcha->new_captcha($data);

        return $cap['image'];
    }

    public function demand()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[6]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[5]');
        $this->form_validation->set_rules('captcha', 'Please enter valid symbols from image', 'callback_captcha_check');

        if ($this->form_validation->run() !== false) {

            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-type: text/html; charset=utf-8";
            $headers[] = "From: Diona <diona@domain.com>";
            $headers[] = "Subject: {DIona}";
            $headers[] = "X-Mailer: PHP/".phpversion();

            $text = '';
            $text .= '<p><b>I want : </b>' . $this->input->post('action') . '</p>';

            if ($this->input->post('object') and $this->input->post('object')!= 'empty') {
                $text .= '<p><b>Object:  </b>' . $this->input->post('object') . '</p>';
            }

            if ($this->input->post('first_name')) {
                $text .= '<p><b>Name:  </b>' . $this->input->post('first_name') . '</p>';
            }

            if ($this->input->post('email')) {
                $text .= '<p><b>Email:  </b>' . $this->input->post('email') . '</p>';
            }

            $text .= '<p><b>Desctiption:  </b>' . $this->input->post('description') . '</b></p>';
            $text .= '<p><b>Phone:  </b>' . $this->input->post('phone') . '</p>';
            mail(
                self::EMAIL,
                'Diona',
                $text,
                  implode("\r\n", $headers)
            );
        }

        $this->frontendlayout
            ->addHeader('title', 'Результат запроса')
            ->addHeader('keywords', 'Недвижимость в Житомире, купить
                    квартиру в Житомире, продать квартиру в Житомире')
            ->addHeader('description', 'Покупка и продажа квартир в Житомире.
                     Покупка любого характера недвижимости: будь то просто квартира либо элитный коттедж.');


        $this->frontendlayout->addTemplate('demand', array('image' => $this->_captcha()));
        $this->frontendlayout->render();

    }

    public function captcha_check()
    {
        $this->load->model('captcha');

        if (!$captcha = $this->input->post('captcha') OR !$this->captcha->check_captcha($captcha)) {
            $this->form_validation->set_message(__FUNCTION__, '%s');
            return FALSE;
        }

        return TRUE;
    }

}