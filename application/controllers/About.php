<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('Home_model','HM');
	}
	public function index()
	{
        echo $this->load->template('about');
    }
}
