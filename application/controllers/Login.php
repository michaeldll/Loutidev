<?php

/**

 * Created by PhpStorm.

 * User: AverageAdminPC

 * Date: 30/05/2017

 * Time: 11:50

 */

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {



    public function index()

    {
        parent::__construct();
        //$this->load->library('session');
        //$this->load->model('Auth_user');
        $this->load->view('v_login');


    }



}

