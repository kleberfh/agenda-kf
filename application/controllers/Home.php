<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContatoModel');
        $this->load->model('EnderecoModel');
    }

    public function index()
	{
	    $contatos = $this->ContatoModel->listar();
	    $enderecos = $this->EnderecoModel->listar();

	    $data = array(
	        'contatos' => $contatos,
            'enderecos' => $enderecos
        );

		$this->load->view('home', $data);
	}
}
