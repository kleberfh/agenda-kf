<?php


class ContatoModel extends CI_Model
{
    public $nome;
    public $telefone;
    public $email;
    public $notas;

    public function listar()
    {
        $query = $this->db->get('contatos', 100);
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where('contatos', array('id'=> $id));
        return $query->result();
    }

    public function inserir()
    {
        $this->nome    = $_POST['nome'];
        $this->telefone  = $_POST['telefone'];
        $this->email  = $_POST['email'];
        $this->notas     = $_POST['notas'];

        $dados = array(
            'nome'=> $_POST['nome'],
            'telefone'=> $_POST['telefone'],
            'email'=> $_POST['email'],
            'notas'=> $_POST['notas']
        );

        $this->db->insert('contatos', $dados);
    }

    public function editar()
    {
        $this->nome    = $_POST['nome'];
        $this->telefone  = $_POST['telefone'];
        $this->email  = $_POST['email'];
        $this->notas     = $_POST['notas'];

        $dados = array(
            'nome'=> $_POST['nome'],
            'telefone'=> $_POST['telefone'],
            'email'=> $_POST['email'],
            'notas'=> $_POST['notas']
        );

        $this->db->update('contatos', $dados, array('id' => $_POST['id']));
    }

    public function deletar($id)
    {
        $this->db->delete('contatos', array('id'=>$id));
    }

    public function buscar($query)
    {
        $this->db->select('*');
        $this->db->from('contatos');
        $this->db->like('nome', $query);
        $this->db->or_like('telefone', $query);
        $this->db->or_like('email', $query);
        $this->db->or_like('notas', $query);
        $result = $this->db->get()->result();

        return $result;
    }
}