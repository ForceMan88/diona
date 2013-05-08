<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class AdminModel extends CI_Model
{
    protected $_role = 'admin';

    /**
     * Checking if user exist.
     *
     * @param $login
     *
     * @param $password
     *
     * @return bool
     */
    public function loginCheck($login, $password)
    {
        $query = $this
            ->db
            ->select('user.login')
            ->from('user')
            ->join('role', 'role.id = user.role_id')
            ->where('user.login', $login)
            ->where('user.password', sha1($password))
            ->where('role.name', $this->_role)
            ->limit(1)
            ->get();


        if ($query->num_rows > 0) {
            // person has account with us
            return $query->row();
        }
        return false;

    }


}