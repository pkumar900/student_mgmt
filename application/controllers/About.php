<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


    public function index() {

       
    	  $data['title']='bglooks';
          $this->load->view('website/about',$data);
    }
      
    }