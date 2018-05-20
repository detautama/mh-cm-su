<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 3/10/2018
 * Time: 8:49 PM
 */
class DataProduct extends MY_Model {

    function addAndGet($table, $data, $colname)
    {
        $this->db->insert($table, $data);

        return $this->getSpecificData($table, array($colname => $this->db->insert_id()));
    }

    public function updateAndGetData($table,$data,$where,$id_produk)
    {
        $this->db->set($data);
        $this->db->where($where);
        $this->db->update($table);

        return $this->getSpecificData($table, array('id_produk' => $id_produk));
    }

    function getRelation2D($limit, $start, $table)
    {
        $data = null;
        if (isset($limit) && isset($start))
            $this->db->limit($limit, $start);

        $query = $this->db->get($table);
        if ($query->num_rows() >= 0)
        {
            foreach ($query->result_array() as $row)
            {
                $row['image_url'] = $this->getImage('produk_image', array(
                    'id_produk' => $row['id_produk']
                ));
                $data[] = $row;
            }
            return $data;
        }
        return $data;
    }

    function getImage($table, $where)
    {
        $data = null;
        $this->db->select('image_path');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        if ($query->num_rows() >= 0)
        {
            foreach ($query->result() as $row)
            {
                $data[] = $row;
            }
            return $data;
        } else return null;
    }
}