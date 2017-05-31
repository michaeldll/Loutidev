<?php

/**

 * Created by PhpStorm.

 * User: AverageAdminPC

 * Date: 30/05/2017

 * Time: 11:50

 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {
  // (...)
  public function index() {
    $this->load->helper("form");
    $this->load->library('form_validation');
    //$this->load->model('Auth_user');

    if ($this->form_validation->run()) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->auth_user->login($username, $password);
      redirect('Welcome');
    } else {
      $this->load->view('v_connexion');
      echo "<h2 style='color:black; background-color:white; text-align:center;'>Debug: Not validated</h2>";
    }
  }
}
