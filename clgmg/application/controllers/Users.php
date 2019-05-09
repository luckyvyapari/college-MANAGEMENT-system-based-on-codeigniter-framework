<?php
defined('BASEPATH') OR exit('No direct script access allowed');//notes you can use construct method to apply session on every page go reference to ppt of codeigniter.

class Users extends CI_Controller {



public function dashboard(){


   $this->load->model('queries');
 $college_id=$this->session->userdata('college_id');


$students=$this->queries->getstudents($college_id);
$this->load->view('users',['students' => $students]);









}

     









}