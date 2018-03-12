<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 3/7/2018
 * Time: 2:14 PM
 */
class Product extends MX_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        parent::__construct();
        $this->load->model('product/DataProduct');
        $this->load->model('product/DataUser');
    }

    public function tambah()
    {
        if ($this->isPost())
        {
            $token = $this->getToken();
            $user_mp = $this->DataUser->login('users', $token);
            if ($user_mp)
            {
                $data = array(
                    'nama_produk'   => $this->input->post('nama_produk'),
                    'user_token'    => $token,
                    'sku'           => $this->input->post('sku'),
                    'asuransi'      => $this->input->post('asuransi'),
                    'minimum_order' => $this->input->post('minimum_order'),
                    'harga'         => $this->input->post('harga'),
                    'berat'         => $this->input->post('berat'),
                    'stok'          => $this->input->post('stok'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'ctgi'          => $this->input->post('ctgi')
                );
                $this->DataProduct->addData('produk', $data);
                echo json_encode($data);
            } else
            {
                $data = array('message' => "user tidak ditemukan");
                echo json_encode($data);
            }
        }
    }

    public function edit($idproduk)
    {
        if ($this->isPost())
        {
            $token = $this->getToken();
            if ($token)
            {
                $data = array(
                    'nama_produk'   => $this->input->post('nama_produk'),
                    'sku'           => $this->input->post('sku'),
                    'asuransi'      => $this->input->post('asuransi'),
                    'minimum_order' => $this->input->post('minimum_order'),
                    'harga'         => $this->input->post('harga'),
                    'berat'         => $this->input->post('berat'),
                    'stok'          => $this->input->post('stok'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'ctgi'          => $this->input->post('ctgi')
                );
                $this->DataProduct->updateData('produk', $data,array('id_produk'=>$idproduk));
                echo json_encode(array("message" => "produk updated"));
            } else
            {
                $data = array('message' => "user tidak ditemukan");
                echo json_encode($data);
            }
        }
    }

    public function delete($produkId)
    {
        $token = $this->getToken();
        if($token)
        {
            $this->DataProduct->deleteData('produk', array(
                'user_token' => $token,
                'id_produk'  => $produkId
            ));
            echo json_encode(array("message" => "produk deleted"));
        }else{
            $data = array('message' => "user tidak ditemukan");
            echo json_encode($data);
        }

    }

    public function list()
    {
        $token = $this->getToken();
        $arr = $this->DataProduct->searchData(0, 0, 'produk', null, null, array(
            'user_token' => $token
        ));
        //add the header here
        header('Content-Type: application/json');
        if ($arr)
            echo json_encode($arr);
        else
        {
            echo json_encode(array('message' => "user tidak ditemukan"));
        }
    }

    public function getToken()
    {
        $headers = apache_request_headers();
        if (isset($headers['Authorization']))
        {
            return str_replace("Basic ", "", $headers['Authorization']);
        }
    }

    public function mybase64()
    {
        $base_64 = base64_encode('adminadmin');
        echo json_encode($base_64);
    }
}