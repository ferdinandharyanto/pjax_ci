<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('konten0');
	}

	public function konten1(){
		$this->load->view('konten1');
	}

	public function konten2(){
		$this->load->view('konten2');
	}

	public function konten3(){
		$this->load->view('konten3');
	}
}