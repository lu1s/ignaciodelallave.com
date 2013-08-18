<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		$data = array(
			'title'	=> 'The best Mexican roasted coffe'
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */