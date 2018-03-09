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
        $this->template->set_template('frontend-vue/template');
        $this->template->title = 'MarketHub Channel Manager';

        $this->template->header->view('frontend-vue/partials/navigation-header');
        $this->template->content->view('product/vue/home');
        $this->template->footer->view('frontend-vue/partials/footer');
        $this->template->vuescript->view('product/vue/script/home.js');
        $this->template->publish();
    }

    public function add()
    {
        $this->template->set_template('frontend-vue/template');
        $this->template->title = 'MarketHub Channel Manager';

        $this->template->header->view('frontend-vue/partials/navigation-header');
        $this->template->content->view('product/vue/add');
        $this->template->footer->view('frontend-vue/partials/footer');
        $this->template->vuescript->view('product/vue/script/add.js');
        $this->template->publish();
    }

    public function detail()
    {
        $this->template->set_template('frontend-vue/template');
        $this->template->title = 'MarketHub Channel Manager';

        $this->template->header->view('frontend-vue/partials/navigation-header');
        $this->template->content->view('product/vue/detail');
        $this->template->footer->view('frontend-vue/partials/footer');
        $this->template->vuescript->view('product/vue/script/detail.js');
        $this->template->publish();
    }
}