<?php

class Register extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Barahlo.by';
        $this->load->view('templates/header', $data);

        $this->load->library('form_validation');
//        Name
        $this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[2]|max_length[25]|alpha_numeric',
            array(  'required' => 'Пожалуйста укажите имя',
                    'min_length' => 'Имя должно содержать минимум 2 символа'));
//        Password
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]',
            array(  'required' => 'Пожалуйста укажите пароль',
                    'min_length' => 'Пароль должен содержать минимум 6 символов'));
//        Password2
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password1]',
            array(  'required' => 'Пожалуйста повторите пароль',
                    'matches' => 'Пароли не совпадают'));
//        Email
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',
            array(  'required' => 'Пожалуйста укажите Email',
                    'valid_email' => 'Пожалуйста укажите корректный email'));
//        Phone
        $this->form_validation->set_rules('phone', 'Phone', 'trim|numeric',
            array(  'numeric' => 'Телефоннный номер должен содержать только цифры'));
//        City
        $this->form_validation->set_rules('city', 'City', 'required',
            array(  'required' => 'Пожалуйста выберите город'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('pages/register_form');
        }
        else
        {
            $this->load->view('pages/register_success');
        }

        $this->load->view('templates/footer');
    }
}