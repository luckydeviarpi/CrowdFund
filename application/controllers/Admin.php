<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }
    function index()
    {
        $data['user'] = $this->userrole->getBy();
        $this->load->view("Admin/vw_home", $data);
    }
}
