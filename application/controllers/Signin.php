<?php

class Signin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('database');
    }

    public function index()
    {


        $this->form_validation->set_rules('email', 'Email', 'valid_email',
            array('valid_email' => 'Пожалуйста укажите корректный Email.'));

        if ($this->form_validation->run() == FALSE)
        {
//            $this->load->view('pages/register_form');
            $result['valid_error'] = validation_errors();
        }
        else
        {

            $ajaxData['email'] = $this->input->post('email', true);
            $ajaxData['password'] = $this->input->post('password', true);

            $userData = $this->database->selectUserData($ajaxData['email']);

            if(isset($userData[0]['email']))
            {
                if(password_verify($ajaxData['password'], $userData[0]['password']))
                {
                    $result['name'] = $userData[0]['name'];
                }
                else
                {
                    $result['error'] = 'Пароль не подходит';
                }
            }
            else
            {
                $result['error'] = 'Email не зарегестрирован';
            }
        }

        echo json_encode($result);
    }
}