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

    public function getById($id)
    {
        $query = $this->db->get_where('contatos', array('id'=> $id));
        return $query->result();
    }

    public function inserir()
    {
        $this->rua    = $_POST['rua'];
        $this->numero  = $_POST['numero'];
        $this->cep  = $_POST['cep'];
        $this->complemento     = $_POST['complemento'];

        $dados = array(
            'rua'=> $_POST['rua'],
            'numero'=> $_POST['numero'],
            'cep'=> $_POST['cep'],
            'complemento'=> $_POST['complemento']
        );

        $this->db->insert('contatos', $dados);
    }

    public function editar()
    {
        $this->rua    = $_POST['rua'];
        $this->numero  = $_POST['numero'];
        $this->cep  = $_POST['cep'];
        $this->complemento     = $_POST['complemento'];

        $dados = array(
            'rua'=> $_POST['rua'],
            'numero'=> $_POST['numero'],
            'cep'=> $_POST['cep'],
            'complemento'=> $_POST['complemento']
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