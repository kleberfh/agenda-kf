<?php


class ContatoModel extends CI_Model
{
    public $nome;
    public $telefone;
    public $email;
    public $notas;

    function getData($req) {
        $this->nome    = $_POST['nome'];
        $this->telefone  = $_POST['telefone'];
        $this->email  = $_POST['email'];
        $this->notas     = $_POST['notas'];
    }

    public function listar()
    {
        $query = $this->db->get('contatos', 100);
        return $query->result();
    }

    public function inserir()
    {
        $this->getData($_POST);

        $this->db->insert('contatos', $this);
    }

    public function editar()
    {
        $this->getData($_POST);

        $this->db->update('contatos', $this, array('id' => $_POST['id']));
    }

    public function deletar()
    {
        $this->getData($_POST);

        $this->db->delete();
    }
}