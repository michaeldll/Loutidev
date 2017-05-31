<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Crud extends CI_Controller {
    //functions
    function index(){
        $data["title"] = "Codeigniter Ajax CRUD with Data Tables and Bootstrap Modals";
        $this->load->view('crud_view', $data);
    }
    function fetch_user(){
        $this->load->model("crud_model");
        $fetch_data = $this->crud_model->make_datatables();
        $data = array();
        foreach($fetch_data as $row)
        {
            $sub_array = array();
            $sub_array[] = $row->id;
            $sub_array[] = $row->title;
            $sub_array[] = $row->author;
            $sub_array[] = $row->quantity;
            $sub_array[] = $row->price;
            $data[] = $sub_array;
        }
        $output = array(
            "draw"                    =>     intval($_POST["draw"]),
            "recordsTotal"          =>      $this->crud_model->get_all_data(),
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data(),
            "data"                    =>     $data
        );
        echo json_encode($output);
    }
}