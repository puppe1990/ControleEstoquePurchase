<?php
class Produtos_model extends CI_Model {

public function buscaTodos() {

	  	$this->db->select('produtos.id_produto,produtos.codigo_produto,produtos.descricao,produtos.valor'); 
	  	$this->db->select_sum('entradas.quantidade', 'quantidadeEntrada');  
	  	$this->db->select_sum('saidas.quantidade', 'quantidadeSaida');  
        $this->db->from('produtos');
        $this->db->join('saidas', 'saidas.fk_produto = produtos.id_produto', 'left');
        $this->db->join('entradas', 'entradas.fk_produto = produtos.id_produto', 'left');
        $this->db->group_by('produtos.descricao,produtos.codigo_produto,produtos.valor,produtos.id_produto');
        $this->db->order_by('produtos.id_produto','ASC');
        
        return $query = $this->db->get()->result_array();
    }
}