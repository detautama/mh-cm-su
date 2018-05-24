<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 5/23/2018
 * Time: 9:12 PM
 */
class Register extends MX_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        parent::__construct();
        $this->load->model('REGISTER/DataUser');
        $this->form_validation->CI =& $this;
    }

    public function index()
    {
        if ($this->isPost())
        {
            $email = $this->input->post('email');
            $existUser = $this->DataUser->getSpecificData('users',array(
                'email'=>$email
            ));
            if($existUser){
                echo json_encode(array('message'=>'User already exist'));
            }else{
                $password = $this->input->post('password');
                $token = base64_encode($email.':'.$password);
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $password,
                    'email'    => $email,
                    'token'    => $token
                );
                $this->DataUser->addData('users', $data);
                echo json_encode(array('token'=>$token));
            }
        }
    }

    public function mybase64()
    {
        return base64_encode('admin@gmail.com:admin');
    }


}