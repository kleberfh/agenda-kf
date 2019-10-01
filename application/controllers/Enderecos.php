<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enderecos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EnderecoModel');
    }

	public function index()
	{
        $enderecos = $this->EnderecoModel->listar();

        $data = array(
            'enderecos' => $enderecos
        );

        $this->load->view('enderecos/index', $data);
	}
}
