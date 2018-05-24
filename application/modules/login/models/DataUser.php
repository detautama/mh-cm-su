<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 3/5/2018
 * Time: 5:08 PM
 */
class DataUser extends MY_Model {

    function login($table, $token)
    {
        $this->db->from($table);
        $this->db->where('token', $token);
        $row = $this->db->get()->row();
        if ($row)
        {
            return $row;
        } else
            return false;
    }
}