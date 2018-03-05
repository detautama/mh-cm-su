<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 3/5/2018
 * Time: 5:08 PM
 */
class DataUser extends MY_Model {

    function login($username, $password)
    {
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->limit(1);
        $row = $this->db->get()->row();

        if ($row)
        {
            if($this->encryption->decrypt($row->password)==$password)
                return $row;
            else
                return false;
        } else
        {
            return false;
        }
    }

}