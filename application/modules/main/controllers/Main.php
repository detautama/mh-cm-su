<?php

class Main extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('main/DataUser');
        $this->form_validation->CI =& $this;
    }

    public function index()
    {
        if ($this->session->logged_in)
        {
            redirect(base_url().'marketplace');
        } else
        {
            if ($this->isPost())
            {
                $this->login_submit();
            } else
            {
                $this->template->set_template('frontend/template');
                $this->template->title = 'MarketHub Channel Manager';
                $this->template->stylesheet->add(base_url() . "public/css/floating-labels.css");

                $this->template->content->view('main/login');
                $this->template->publish();
            }
        }
    }

    protected function login_submit()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('error', validation_errors('<p class="alert alert-danger">', '</p>'));
            redirect(current_url() . "#errors");
        } else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->DataUser->login($username, $password);
            if ($result)
            {
                $this->session->set_userdata('logged_in', $result);
                redirect(base_url());
            } else
            {
                $this->session->set_flashdata('error', '<p class="alert alert-danger">Invalid username and password</p>');
                redirect(current_url() . "#errors");
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect(base_url());
    }
}