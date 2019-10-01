<?php


class EnderecoModel extends CI_Model
{
    public $rua;
    public $numero;
    public $cep;
    public $complemento;

    public function listar()
    {
        $query = $this->db->get('enderecos', 100);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->rua    = $_POST['rua']; // please read the below note
        $this->numero  = $_POST['numero'];
        $this->cep  = $_POST['cep'];
        $this->complemento  = $_POST['complemento'];

        $this->db->insert('enderecos', $this);
    }

    public function update_entry()
    {
        $this->nome    = $_POST['nome']; // please read the below note
        $this->telefone  = $_POST['telefone'];
        $this->email  = $_POST['email'];
        $this->relacionados  = $_POST['relacionados'];
        $this->notas     = $_POST['notas'];

        $this->db->update('enderecos', $this, array('id' => $_POST['id']));
    }
}