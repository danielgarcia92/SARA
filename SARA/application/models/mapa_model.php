<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapa_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function visualizacionAulas($inicio, $fecha){
		$this->db->where('hora_inicio',$inicio);
		$this->db->where('fecha',$fecha);
		$query = $this->db->get('historial');
		$datos['numFilas'] = $query->num_rows();
		for ($i=1; $i <= $datos['numFilas']; $i++) { 
			$datos['fila'.$i] = $query->row($i-1);
		}
		return $datos;
	}
	
	public function estadoAulas(){
		$query = $this->db->get('estadoaulas');
		for ($i=1; $i < 37; $i++) { 
			$datos['fila'.$i] = $query->row($i-1);
		}
		return $datos;
	}

}