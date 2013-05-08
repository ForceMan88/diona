<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class captcha extends CI_Model
{


    public function new_captcha($data)
    {
        $this->db->insert('captcha', $data);
    }

    public function check_captcha($captcha)
    {

        $expiration = time() - 7200; // Two hour limit
        $this->db->query("DELETE FROM captcha WHERE captcha_time < " . $expiration);

        // Then see if a captcha exists:
        $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
        $binds = array($captcha, $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();

        return ($row->count == 0) ? false : true;

    }


}