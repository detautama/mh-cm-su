<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 3/11/2018
 * Time: 11:31 PM
 */
class Login extends MX_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        parent::__construct();
        $this->load->model('login/DataMarketplaceAccount');
        $this->load->model('login/DataUser');
        $this->form_validation->CI =& $this;
    }

    public function tokopedia()
    {
        $this->verifyAccount('emailTp','passTp','tokopedia','statusTp');

    }

    public function shopee()
    {
        $this->verifyAccount('emailSp','passSp','shopee','statusSp');
    }

    public function bukalapak()
    {
        $this->verifyAccount('emailBl','passBl','bukalapak','statusBl');
    }

    public function verifyAccount($emailField,$passField,$marketplace,$statusKey)
    {
        if ($this->isPost())
        {
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
            $user_mp = $this->DataUser->login('users', $token);
            if ($user_mp)
            {
                $data = array($statusKey => 'pending');
                $this->DataMarketplaceAccount->addData('marketplace_accounts',array(
                    'user_token' => $token,
                    'email'=> $this->input->post($emailField),
                    'password'=>$this->input->post($passField),
                    'marketplace'=>$marketplace,
                    'status'=>'pending'
                ));
                echo json_encode($data);
            } else
            {
                $data = array('message' => "user tidak ditemukan");
                echo json_encode($data);
            }
        }
    }

}