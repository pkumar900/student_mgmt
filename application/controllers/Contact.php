<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


    public function index() {

       
    	  $data['title']='bglooks';
          $this->load->view('website/contact',$data);
    }
      
    }