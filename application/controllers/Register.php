<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('user');
        $this->load->model('database');
    }

    public function index()
    {
        $data['title'] = 'Barahlo.by';
        $data['cities'] = $this->database->selectAll('cities');

        $this->load->view('templates/header', $data);
        $this->load->view('pages/register_form', $data);
        $this->load->view('templates/footer');

    }
    public function validate()
    {
        $data['title'] = 'Barahlo.by';
        $this->load->view('templates/header', $data);

//        Name
        $this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[2]|max_length[25]|alpha_numeric',
            array(  'required' => 'Пожалуйста укажите имя',
                'min_length' => 'Имя должно содержать минимум {param} символа.',
                'max_length' => 'Имя должно содержать максимум {param} символов.',
                'alpha_numeric' => 'Имя может содержать только латинские символы и цифры.'));
//        Password
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]',
            array(  'required' => 'Пожалуйста укажите пароль.',
                'min_length' => 'Пароль должен содержать минимум {param} символов.'));
//        Password2
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password1]',
            array(  'required' => 'Пожалуйста повторите пароль.',
                'matches' => 'Пароли не совпадают. Введите пароль еще раз.'));
//        Email
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[login_user.email]',
            array(  'required' => 'Пожалуйста укажите Email.',
                'valid_email' => 'Пожалуйста укажите корректный Email.',
                'is_unique' => 'Пользователь с таким email уже существует.'));
//        Phone
        $this->form_validation->set_rules('phone', 'Phone', 'trim|regex_match[/^\+([0-9]{3})[-]([0-9]{2})[-]([0-9]{3})[-]([0-9]{2})[-]([0-9]{2})/]',
            array(  'regex_match' => 'Телефоннный номер ненадлежащего формата.'));
//        City
        $this->form_validation->set_rules('city', 'City', 'required',
            array(  'required' => 'Пожалуйста выберите город.'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('pages/register_form');
        }
        else
        {
            $this->user->setUserData($this->input->post(null, true), 'post');
            $this->database->insertData($this->user);

            $this->load->view('pages/register_success');
        }

        $this->load->view('templates/footer');
    }
}