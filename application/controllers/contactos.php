<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('m_contactos');
	}

	public function index()
	{
		$data['listado'] = $this->m_contactos->get_todos(); // obtener informacion de la base de datos y poner en data
		$this->load->view('view_list_contactos', $data);
	}

	public function mis_reglas(){
		$this->form_validation->set_rules('con_email','Email','required|valid_email');
		$this->form_validation->set_rules('con_nombre','Nombre','required|min_length[3]');
		$this->form_validation->set_rules('con_edad','Edad','required|integer');

		$this->form_validation->set_rules('con_telefono','Telefono','trim');
		$this->form_validation->set_rules('con_status','Estado','trim');
	}

	public function agregar(){ //index.php/agregar


		if ($this->input->post()){
			$this->mis_reglas();


			if($this->form_validation->run() == TRUE){
				$id_insertado = $this->m_contactos->add();
			} else {
				$this->load->view('view_form_contactos');
			}

		}else{
			$this->load->view('view_form_contactos');
		}
	}

	public function modificar($id = NULL){
		if($id == NULL or !is_numeric($id)){
			echo 'No se ha encontrado una ID valida';
			return;
		}


		if ($this->input->post()) {

			$this->mis_reglas();

			if ($this->form_validation->run() == TRUE){
				$this->m_contactos->edit($id);
				redirect('contactos');
			} else {
				$this->load->view('view_form_contactos');
			}

		}else {
			$data['datos_contacto'] = $this->m_contactos->get_by_id($id);
			if (empty($data['datos_contacto'])){
				echo 'El ID es Invalido';
			} else {
				$this->load->view('view_form_contactos',$data);
			}
		}
	}

	public function eliminar($id = NULL)
	{
		if ($id == NULL or !is_numeric($id)) {
			echo 'No se ha encontrado una ID valida';
			return;
		}

		if ($this->input->post()){
			$id_eliminar = $this->input->post('con_id');
			$this->m_contactos->elim($id_eliminar);
			redirect('contactos');
		} else {
			$data['datos_contacto'] = $this->m_contactos->get_by_id($id);
			if (empty($data['datos_contacto'])){
				echo 'El ID es Invalido';

			} else {
				$this->load->view('view_elim_contactos',$data); // cargar view
			}
		}



	}
}
/* End of file contactos.php */
