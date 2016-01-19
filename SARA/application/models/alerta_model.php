<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alerta_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function autenticacion($usuario){
		$this->db->where('usuario',$usuario);
		$query = $this->db->get('usuarios');
		$datos['fila'] = $query->row();
		$datos['numFilas'] = $query->num_rows();
		return $datos;
	}

	public function contrasenaEmbebido(){
		$this->db->where('usuario','embebido');
		$query = $this->db->get('usuarios');
		$datos['fila'] = $query->row();
		$datos['numFilas'] = $query->num_rows();
		return $datos;
	}

	public function insertarEnAlertas($datos){
        $this->db->insert('alertas', $datos); 
	}

	public function actualizarAlerta($datos){
		$this->db->where('piso', $datos['piso']);
		$this->db->where('aula', $datos['aula']);
		$this->db->update('estadoaulas', $datos); 
	}

}