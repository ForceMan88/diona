<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class CmsModel extends CI_Model
{
    protected $_table = 'cms_page';

    /**
     * Function save cms page.
     *
     * @param array $data Cms page content.
     */
    public function save(array $data)
    {
        $this->db->set('title', $data['title']);
        $this->db->set('content', $data['content']);
        $this->db->set('sort_order', $data['sort_order']);
        $this->db->set('keywords', $data['keywords']);
        $this->db->set('description', $data['description']);
        $this->db->set('menu_title', $data['menu_title']);
        $this->db->set('url', $data['url']);
        $this->db->insert($this->_table);
    }

    /**
     * Function return list cms page.
     *
     * @return bool
     */
    public function get_cms_list()
    {
        $query = $this->db->get('cms_page');

        if ($query->num_rows > 0) {
            // person has account with us
            return $query->result();
        }

        return false;
    }

    /**
     * Delete cms page by id.
     *
     * @param $id ID cms page.
     *
     * @return bool
     */
    public function delete($id)
    {
        $this->db->delete($this->_table, array('id' => $id));

        return ((int)$this->db->affected_rows() > 0) ? true : false;
    }


}