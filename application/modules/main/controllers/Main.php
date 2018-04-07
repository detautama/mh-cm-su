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
            $status = $this->DataUser->searchData(0, 0, 'marketplace_accounts', null, null, array(
                'user_token' => $user->token
            ));
            $marketplaceStatus = array(
                'statusBl' => null,
                'statusSp' => null,
                'statusTp' => null
            );
            if ($status)
            {
                foreach ($status as $st)
                {
                    if ($st->marketplace == "bukalapak")
                        $marketplaceStatus['statusBl'] = $st->status;
                    else if ($st->marketplace == "shopee")
                        $marketplaceStatus['statusSp'] = $st->status;
                    else if ($st->marketplace == "tokopedia")
                        $marketplaceStatus['statusTp'] = $st->status;
                }
            }
            $data = array(
                'token'    => $token,
                'username' => $user->username,
                'statusMp' => $marketplaceStatus
            );
            echo json_encode($data);
            return;
        } else
        {
            $data = array('message' => "user tidak ditemukan");
            echo json_encode($data);
        }
    }

    public function test()
    {
        $status = $this->DataUser->searchData(0, 0, 'marketplace_accounts', null, null, array(
            'user_token' => 'YWRtaW46YWRtaW4='
        ));
        $myar = [];
        foreach ($status as $st)
        {
            if ($st->marketplace == "bukalapak")
            {
                $myar[] = ['statusBl' => $st->status];
                if ($st->marketplace == "shopee")
                    $myar[] = ['statusSp' => $st->status];
                if ($st->marketplace == "tokopedia")
                    $myar[] = ['statusTp' => $st->status];
            }
            echo json_encode($myar);
        }
    }

    public function base64()
    {
        echo base64_encode('admin@gmail.com:admin');
    }
}