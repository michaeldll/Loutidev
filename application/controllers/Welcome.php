<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('Session');
		$this->load->model("Auth_user");
		$this->load->helper("form");
    	$this->load->library('form_validation');
		$this->load->view('v_homepage');
	}

	public function connexion() {

	$this->load->library('Session');
	$this->load->model("Auth_user");
    $this->load->helper("form");
    $this->load->library('form_validation');


    if ($this->form_validation->run()) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->auth_user->login($username, $password);
      if ($this->auth_user->is_connected) {
        redirect('index');
      } else {
        $data['login_error'] = "Échec de l'authentification";
              $this->load->view('v_connexion');
      echo "<h2 style='color:black; background-color:white; text-align:center;'>Debug: Not validated</h2>";
      }
    }
  }
}
