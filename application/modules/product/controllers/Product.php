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
        parent::__construct();
        if (empty($this->session->userdata('logged_in')))
            redirect(base_url());
    }

    public function index()
    {
        $this->load->view('product/home');
    }

    public function add()
    {
        $this->load->view('product/vue/add');
    }
}