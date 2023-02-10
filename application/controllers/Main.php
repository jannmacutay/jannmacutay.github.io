<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function view($page = 'home')
	{
		$this->load->view('components/head');

		if ($page == 'home') {
			$this->load->view('public/home');
		} elseif ($page == 'for') {
			$this->load->view('public/for');
		} else {
			show_404();
		}
		$this->load->view('components/foot');
	}
}