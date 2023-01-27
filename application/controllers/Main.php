<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function view($page = 'home')
	{
		if ($page == 'home') {
			$this->load->view('public/home');
		} else {
			show_404();
		}
	}
}
