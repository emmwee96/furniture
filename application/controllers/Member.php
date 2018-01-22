<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct(){
		parent::__construct();

		if(!$this->session->has_userdata('user')){
			redirect("Main/login",'refresh');
		}
	}
	public function account()
	{
        $this->load->view("header");
        $this->load->view("Member/account");
        $this->load->view("footer");
	}

}
