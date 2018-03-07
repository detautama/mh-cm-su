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
    }

    public function index()
    {
        $this->load->view('product/home');
    }
}