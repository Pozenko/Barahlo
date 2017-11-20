<?php

class Signin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');

        $this->load->model('database');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'valid_email',
            array('valid_email' => 'Пожалуйста укажите корректный Email.'));

        if ($this->form_validation->run() == FALSE)
        {
            $result['error'] = validation_errors();
        }
        else
        {
            $ajaxData['email'] = $this->input->post('email', true);
            $ajaxData['password'] = $this->input->post('password', true);

            $userData = $this->database->selectWhere($ajaxData['email'], 'user');

            if(isset($userData[0]['email']))
            {
                if(password_verify($ajaxData['password'], $userData[0]['password']))
                {
                    $result['name'] = $userData[0]['name'];
                    $_SESSION['username'] = $userData[0]['name'];
                    $_SESSION['id_user'] = $userData[0]['id_user'];
                    $_SESSION['logged_in'] = true;
                }
                else
                {
                    $result['passError'] = 'Пароль не подходит';
                }
            }
            else
            {
                $result['error'] = 'Email не зарегестрирован';
            }
        }

        echo json_encode($result);
    }

    public function out()
    {
        session_destroy();
        redirect(base_url());
    }
}