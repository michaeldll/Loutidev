<?php
/**
 * Created by PhpStorm.
 * User: Pavoht
 * Date: 29/05/2017
 * Time: 16:07
 */
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Directory extends CI_Controller  {

    public function __construct(){

        parent::__construct();
        $this->load->helper('url_helper');

    }

    public function index () {

        $config['first_url'] = site_url();
        $this->load->view('v_directory');

    }

}

?>