<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
        $data['dashboard']="active";
        $this->load->view('v_meta', $data);
        $this->load->view('v_head');
        $this->load->view('v_dashboard');
        $this->load->view('v_footer');
    }
 }