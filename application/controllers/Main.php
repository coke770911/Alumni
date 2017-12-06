<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('V_header');
        $this->load->view('V_userDetailed');
        $this->load->view('V_footer');
    }

    public function Detailde() {
        $this->load->view('V_header');
        $this->load->view('V_userDetailed');
        $this->load->view('V_footer');
    }

}