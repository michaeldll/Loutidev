<?php
/**
 * Created by PhpStorm.
 * User: Pavoht
 * Date: 29/05/2017
 * Time: 16:07
 */
defined('BASEPATH') OR exit ('No direct script access allowed');

Class Directory extends CI_Controller {

    public function index () {

        $this->load->view('v_directory');

    }

}

?>