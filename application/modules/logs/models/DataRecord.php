<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 4/5/2018
 * Time: 8:54 PM
 */
class DataRecord extends MY_Model {

    public function getRecord()
    {
        $sql = "SELECT * FROM `records` INNER JOIN users ON records.`token`= users.`token`
INNER JOIN produk ON records.`id_produk` = produk.`id_produk`";
        $query = $this->db->query($sql);
        if ($query->num_rows() >= 0)
        {
            foreach ($query->result_array() as $row)
            {
                $sql = "SELECT image_path FROM produk_image WHERE produk_image.`id_produk` = '" . $row['id_produk'] . "'";
                $query2 = $this->db->query($sql);
                if ($query2->num_rows() >= 0)
                {
                    foreach ($query2->result() as $row2)
                    {
                        $row['image_path'][] = $row2;
                    }
                }
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}