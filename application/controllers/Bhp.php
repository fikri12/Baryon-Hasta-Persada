<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bhp extends CI_Controller {
	public function index()
	{
		$data = array (	'title'	=> 'Baryon Hasta Persada');
		$this->load->view('f/w_bhp/wrapper', $data, FALSE);
	}
}
