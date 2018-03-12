<?php

class Main extends MX_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        parent::__construct();
        $this->load->model('main/DataUser');
        $this->form_validation->CI =& $this;
    }

    public function login()
    {
        $token = null;
        $headers = apache_request_headers();
        if (isset($headers['Authorization']))
        {
            $matches = array();
            preg_match('/Token token="(.*)"/', $headers['Authorization'], $matches);
            if (isset($matches[1]))
            {
                $token = $matches[1];
            }
        }

        $token = str_replace("Basic ", "", $headers['Authorization']);
        $user = $this->DataUser->login('users', $token);
        if ($user)
        {
            $data = array('token' => $token, 'username' => $user->username);
            echo json_encode($data);
        } else
        {
            $data = array('message' => "user tidak ditemukan");
            echo json_encode($data);
        }
    }

    public function encode()
    {
        echo base64_encode('deta:deta');
    }
}