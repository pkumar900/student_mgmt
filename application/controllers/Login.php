<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('panel/login');
	}

	public function checklogin()
	{
		$result=$this->Login_model->login($this->input->post('username'),$this->input->post('password'));
		if(!empty($result))
		{
			$session = array(
				'status'=>'logged_in',
				'name' =>$result[0]->name,
				'last_name' =>$result[0]->last_name,
				'email'=>$result[0]->email,
				'role'=>$result[0]->role,
				'admin_id'=>$result[0]->id,
				'branch_id'=>$result[0]->branch_id
				 );
			$this->session->set_userdata($session);
		
			redirect('Dashboard','refresh');

		}
		else
		{
			$data['msg']='<span><strong style="color:red">Inavalid Credentials</strong></span>';
			$this->load->view('panel/login',$data);
		}
	}

	public function Logout()
	{
		session_destroy();
		redirect('Login','refresh');
	}
}
