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

    public function incluir()
    {
        $this->ContatoModel->inserir();
        redirect('contatos');
    }

    public function alterar($id)
    {
        $contato = $this->ContatoModel->getById($id);

        $data = array(
            'contato' => $contato[0]
        );

        $this->load->view('contatos/editar', $data);
    }

    public function editar()
    {
        $this->ContatoModel->editar();
        redirect('contatos');
    }

    public function excluir($id)
    {
        $this->ContatoModel->deletar($id);
        redirect('contatos');
    }
}
