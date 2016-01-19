<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapa extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->database('default');
        $this->load->model('mapa_model');
        $this->load->helper(array('url'));
        $this->load->library('session');
    }
	
	public function index(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administrador'){
			redirect(base_url().'login');
		}
		$this->load->view('mapa_view');
	}

	public function visualizacionAulas(){
		$inicio = $_POST['inicio'];
		$fecha = $_POST['fecha'];
		//$inicio = '08:00:00';
		//$fecha = '2016-01-16';
		$consultaV = $this->mapa_model->visualizacionAulas($inicio, $fecha);
		$consultaE = $this->mapa_model->estadoAulas();
		$datos['numFilasV'] = $consultaV['numFilas'];
		if ($datos['numFilasV'] > 0) {
			$datos['exito'] = true;
			for ($i=1; $i <= $datos['numFilasV']; $i++){
				$datos['piso'.$i] = $consultaV['fila'.$i]->piso;
				$datos['aula'.$i] = $consultaV['fila'.$i]->aula;
				$datos['reservado'.$i] = $consultaV['fila'.$i]->reservado;
				$datos['curso'.$i] = $consultaV['fila'.$i]->curso;
				$datos['nombre'.$i] = $consultaV['fila'.$i]->nombre;
			}
			for ($i=1; $i < 37; $i++){
				$datos['estado'.$i] = $consultaE['fila'.$i]->estado;
				$datos['alerta'.$i] = $consultaE['fila'.$i]->alerta;
			}
		}else
		$datos['exito'] = false;
		echo json_encode( $datos );
	}

	public function visualizacionAulasFalso(){
		$consultaE = $this->mapa_model->estadoAulas();
		for ($i=1; $i < 37; $i++){
			$datos['estado'.$i] = $consultaE['fila'.$i]->estado;
			$datos['alerta'.$i] = $consultaE['fila'.$i]->alerta;
		}
		$datos['exito'] = true;
		echo json_encode( $datos );
	}
	
}