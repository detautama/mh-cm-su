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
        $this->load->model('product/DataRecord');

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
                $data = $this->DataProduct->addAndGet('produk', $data, 'id_produk');
                $this->upload($data['id_produk']);
                $this->DataRecord->addData('records', array(
                    'token'=>$token,
                    'id_produk'=>$data['id_produk'],
                    'activity'=>"menambah"
                ));
                $data['image_url'] = $this->DataProduct->searchData(null, null, 'produk_image', null, null, array(
                    'id_produk' => $data['id_produk']
                ));
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
                $data = $this->DataProduct->updateAndGetData('produk', $data, array('id_produk' => $idproduk), $idproduk);
                $this->upload($data['id_produk']);
                $data['image_url'] = $this->DataProduct->searchData(null, null, 'produk_image', null, null, array(
                    'id_produk' => $data['id_produk']
                ));
                $this->DataRecord->addData('records', array(
                    'token'=>$token,
                    'id_produk'=>$data['id_produk'],
                    'activity'=>"mengubah"
                ));
                echo json_encode($data);
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
        if ($token)
        {
            $this->DataProduct->deleteImageData('produk_image',array('id_produk'=>$produkId));
            $this->DataProduct->deleteData('produk', array(
                'user_token' => $token,
                'id_produk'  => $produkId
            ));
            $this->DataRecord->addData('records', array(
                'token'=>$token,
                'id_produk'=>$produkId,
                'activity'=>"mengubah"
            ));
            echo json_encode(array("message" => "produk deleted"));
        } else
        {
            $data = array('message' => "user tidak ditemukan");
            echo json_encode($data);
        }
    }

    public function deleteImage()
    {
        $this->DataProduct->deleteData('produk_image', array(
            'id_produk'  => $this->input->post('id'),
            'image_path' => $this->input->post('path')
        ));
        echo json_encode(array('message' => 'image deleted'));
    }

    public function lists()
    {
        $token = $this->getToken();
        $arr = $this->DataProduct->getRelation2D(null, null, 'produk', array(
            'user_token'=>$token
        ));
        //add the header here
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        if ($arr)
            echo json_encode($arr);
        else
        {
            echo json_encode(array());
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

    public function upload($produkId)
    {
        $data = [];
        if (!empty($_FILES))
        {
            foreach ($_FILES['image']['tmp_name'] as $index => $tmpName)
            {
                if (!empty($tmpName) && is_uploaded_file($tmpName))
                {
                    $filename = time() . str_replace(' ', '', strtolower($_FILES['image']['name'][$index]));
                    // the path to the actual uploaded file is in $_FILES[ 'image' ][ 'tmp_name' ][ $index ]
                    // do something with it:
                    move_uploaded_file($tmpName, './uploads/' . $filename); // move to new location perhaps?
                    $imagepath = '/uploads/' . $filename;
                    $this->DataProduct->addData('produk_image', array(
                        'id_produk'  => $produkId,
                        'image_path' => $imagepath
                    ));
                    $data[] = $imagepath;
                }
            }
        }
        return $data;
    }
}