<?php

class Main extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->set_template('frontend/template');
        $this->template->title = 'MarketHub Channel Manager';
        $this->template->stylesheet->add(base_url() . "public/css/floating-labels.css");

        $this->template->content->view('main/login');
        $this->template->publish();
    }

    public function marketplace()
    {
        $this->template->set_template('frontend/template');
        $this->template->title = 'MarketHub Channel Manager';
        $this->template->stylesheet->add(base_url() . "public/css/index.css");

        $this->template->content->view('main/marketplace-login');
        $this->template->publish();
    }
}