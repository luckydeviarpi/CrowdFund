<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("Investasi/vw_invest");
}

}


/* End of file Test.php */
/* Location: ./application/controllers/Test.php */