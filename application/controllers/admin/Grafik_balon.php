<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik_balon extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('hasil_balon_model');
    }

	function index()
	{
	  $data['hasil']=$this->hasil_balon_model->hasil_vote();
      $this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}
?>