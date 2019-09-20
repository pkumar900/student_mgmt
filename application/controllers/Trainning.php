<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Trainning extends CI_Controller {


    public function index() {

       
    	  $data['title']='bglooks';
          $this->load->view('website/trainning',$data);
    }
      
    }