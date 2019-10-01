<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContatoModel');
    }

	public function index()
	{
        $contatos = $this->ContatoModel->listar();

        $data = array(
            'contatos' => $contatos
        );


        $this->load->view('contatos/index', $data);
	}

	public function novo()
    {
        $this->load->view('contatos/novo');
    }
}
