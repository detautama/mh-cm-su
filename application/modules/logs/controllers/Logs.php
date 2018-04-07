<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 4/5/2018
 * Time: 8:54 PM
 */
class logs extends MX_Controller {

    public function __construct()
    {
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Origin: *');
        parent::__construct();
        $this->load->model('logs/DataRecord');
    }

    public function index(){
        $data = $this->DataRecord->getRecord();
        echo json_encode($data);
    }
}