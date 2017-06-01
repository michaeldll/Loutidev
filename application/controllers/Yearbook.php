<?php

$this->load->library('ci_phpgrid');
$data['phpgrid'] = $this->ci_phpgrid->example_method(3);

$this->load->view('home_page',$data);