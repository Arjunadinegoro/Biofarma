<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Primary_production extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
        $data['primary_production']= "active";
        $this->load->view('v_meta');
        $this->load->view('v_head', $data);
        $this->load->view('v_primary_production');
        $this->load->view('v_footer');
    }
 }