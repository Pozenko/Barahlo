<?php

class Account extends CI_Controller
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
        if(!isset($_SESSION['logged_in']))
        {
            if(isset($_SERVER['HTTP_REFERRER']))
                redirect($_SERVER['HTTP_REFERRER']);
            else
                redirect(base_url());
        }
        $this->data['title'] = 'Barahlo.by';
        $this->data['user'] = $this->user->selectAccountData();
        $this->data['cities'] = $this->database->selectAll('cities');

        $this->load->view('templates/header', $this->data);
        $this->load->view('pages/account', $this->data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->load->view('templates/header', $this->data);
        //        Name
        if(isset($_POST['update']['name']))
            $this->form_validation->set_rules('update[name]', 'Username', 'trim|required|min_length[2]|max_length[25]|alpha_numeric',
                array(  'required' => 'Пожалуйста укажите имя',
                    'min_length' => 'Имя должно содержать минимум {param} символа.',
                    'max_length' => 'Имя должно содержать максимум {param} символов.',
                    'alpha_numeric' => 'Имя может содержать только латинские символы и цифры.'));
//        Password
        if(isset($_POST['update']['password1']))
            $this->form_validation->set_rules('update[password1]', 'Password', 'trim|min_length[6]',
                array('min_length' => 'Пароль должен содержать минимум {param} символов.'));
//        Password2
        if(isset($_POST['update']['password1']))
            $this->form_validation->set_rules('update[password2]', 'Password Confirmation', 'trim|matches[update[password1]]',
                array('matches' => 'Пароли не совпадают. Введите пароль еще раз.'));
//        Email
        if(isset($_POST['update']['email']))
            $this->form_validation->set_rules('update[email]', 'Email', 'trim|required|valid_email|is_unique[login_user.email]',
                array(  'required' => 'Пожалуйста укажите Email.',
                    'valid_email' => 'Пожалуйста укажите корректный Email.',
                    'is_unique' => 'Пользователь с таким email уже существует.'));
//        Phone
        if(isset($_POST['update']['phone']))
            $this->form_validation->set_rules('update[phone]', 'Phone', 'trim|regex_match[/^\+([0-9]{3})[-]([0-9]{2})[-]([0-9]{3})[-]([0-9]{2})[-]([0-9]{2})/]',
                array(  'regex_match' => 'Телефоннный номер ненадлежащего формата.'));
//        City
        if(isset($_POST['update']['city']))
            $this->form_validation->set_rules('update[city]', 'City', 'required',
                array(  'required' => 'Пожалуйста выберите город.'));

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('pages/account', $this->data);
        }
        else
        {
            if(isset($_POST['update']))
            {
                $updateData = $this->input->post('update', true);
                var_dump($updateData);
//                $this->database->updateData('user', $updateData);
                $this->load->view('pages/account_update_success');
            }
            else
            {
                redirect(base_url().'account');
            }

        }
        $this->load->view('templates/footer');
    }
}