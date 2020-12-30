<?php
class m_contactos extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database(); // conectar con la base de datos
	}

	function get_todos(){

		$query = $this->db->get('contactos'); // obtener data de la db
		return $query->result();
	}

	function get_by_id($id){
		$query = $this->db->where('con_id', $id);
		$query = $this->db->get('contactos'); // obtener data de la db
		return $query->result();
	}

	function add(){
		$this->load->model('m_contactos'); //carga el modelo
		$data_insertar = $this->input->post(); //poner la info del form en una variable
		unset($data_insertar['btn_enviar']);	//quitar un control de la variable

		$this->db->insert('contactos', $data_insertar); // add data to db


		return $this->db->insert_id();
	}

	function edit($id){
		$data_editar = $this->input->post(); //poner la info del form en una variable
		unset($data_editar['btn_enviar']);	//quitar un control de la variable

		$this->db->where('con_id', $id);
		$this->db->update('contactos', $data_editar); // add data to db
	}

	function elim($id){
		$this->db->where('con_id', $id);
		$this->db->delete('contactos'); // del data to db
	}



}
/* End of file m_contacto.php */
