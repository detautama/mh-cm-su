<?php

/**
 * Created by PhpStorm.
 * User: Budy
 * Date: 3/7/2018
 * Time: 12:06 AM
 */
class Marketplace extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('marketplace/DataMarketplaceAccount');
        if (empty($this->session->userdata('logged_in')))
            redirect(base_url());
    }

    public function index()
    {
        $this->template->set_template('frontend/template');
        $this->template->title = 'MarketHub Channel Manager';
        $this->template->stylesheet->add(base_url() . "public/css/index.css");

        $this->template->content->view('marketplace/marketplace-login');
        $this->template->publish();
    }

    public function tokopedia_submit()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('tokopedia_error', '<p class="alert alert-danger">Please fill in required fields</p>');
            redirect(base_url() . '/marketplace');
        } else
        {
            $this->verifyAccount('tokopedia_account',1);
        }
    }

    public function elevenia_submit()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('elevenia_error', '<p class="alert alert-danger">Please fill in required fields</p>');
            redirect(base_url() . '/marketplace');
        } else
        {
            $this->verifyAccount('elevenia_account',2);
        }
    }

    public function bukalapak_submit()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('bukalapak_error', '<p class="alert alert-danger">Please fill in required fields</p>');
            redirect(base_url() . '/marketplace');
        } else
        {
            $this->verifyAccount('bukalapak_account',2);
        }
    }

    public function verifyAccount($session, $marketplaceId)
    {
        $accountData = array(
            'cm_username' => $this->session->userdata('logged_in')->username,
            'email'       => $this->input->post('email'),
            'password'    => $this->input->post('password'),
            'marketplace' => $marketplaceId
        );
        if(!$this->DataMarketplaceAccount->checkRecord('marketplace_accounts', $accountData)){
            $this->DataMarketplaceAccount->addData('marketplace_accounts', $accountData);
        }
        $this->session->set_userdata($session, $accountData);
        redirect(base_url() . '/marketplace');
    }

    public function signOut($sessionName, $marketplaceId)
    {
        $accountData = array(
            'cm_username' => $this->session->userdata('logged_in')->username,
            'marketplace' => $marketplaceId
        );
        $this->DataMarketplaceAccount->deleteData('marketplace_accounts', $accountData);
        $this->session->unset_userdata($sessionName);
        redirect(base_url() . '/marketplace');
    }
}