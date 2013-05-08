<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class cms extends CI_Model
{
    protected $_table  = 'cms_page';

    /**
     * Get cms page by url.
     *
     * @param $page
     *
     * @return bool
     */
    public function get_cms_page($page)
    {
        $query = $this->db
            ->select('*')
            ->where('url', $page)
            ->get('cms_page');

        if ($query->num_rows > 0) {
            // person has account with us
            return $query->row();
        }

        return false;
    }

    /**
     * Return cms menu and sort by sort_order.
     *
     * @return bool|object
     */
    public function get_cms_menu()
    {
        $query = $this->db
            ->select('url,menu_title')
            ->where('sort_order >',0)
            ->order_by('sort_order', "desc")
            ->get('cms_page');

        if ($query->num_rows > 0) {
            // person has account with us
            return $query->result();
        }

        return false;
    }

}