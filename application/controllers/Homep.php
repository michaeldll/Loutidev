<?php
/**
 * Created by PhpStorm.
 * User: Pavoht
 * Date: 01/06/2017
 * Time: 10:37
 */

class Homep extends CI_Controller {

    public function index()
    {

        $this->load->view('v_header');
        $this->load->view('v_homep');

    }

}