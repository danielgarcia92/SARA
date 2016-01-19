<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alerta extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->database('default');
        $this->load->model('alerta_model');
        $this->load->helper(array('url'));
    }
	
	public function index(){
		if(!$this->input->is_ajax_request())
			redirect('404');
		else{
			echo 'Este es el controlador Alerta';
		}
	}

	public function autenticacion(){
		$usuario = $_GET['usuario'];
		$serial = $_GET['serial'];
		$contrasena = $_GET['contrasena'];
		$consulta1 = $this->alerta_model->autenticacion($usuario);
		$consulta2 = $this->alerta_model->contrasenaEmbebido();
		if ( $consulta1['numFilas'] == 1 && $consulta2['fila']->contrasena == sha1($contrasena) && $consulta1['fila']->serial == $serial ) {
            $variable['res']='true';       		}
            else
            $variable['res']='false';             
            $this->load->view('alerta_view',$variable);

	}

	public function alerta(){
		date_default_timezone_set('America/Bogota');
		$datos['tipo'] = $_GET['tipo'];
		$datos['hora'] = date("H:i:s");
		$datos['fecha'] = date("Y-m-d");
		$datos['piso'] = $_GET['piso'];
		$datos['aula'] = $_GET['aula'];
		$data['piso'] = $_GET['piso'];
		$data['aula'] = $_GET['aula'];
		$data['alerta'] = 1;
		$this->alerta_model->insertarEnAlertas($datos);
		$this->alerta_model->actualizarAlerta($data);
        $variable['res']='true';       
        $this->load->view('alerta_view',$variable);

 	}

	public function desactivarAlerta(){
		$data['piso'] = $_GET['piso'];
		$data['aula'] = $_GET['aula'];
		$data['alerta'] = 0;
		$this->alerta_model->actualizarAlerta($data);
        
 $variable['res']='true';	
    $this->load->view('alerta_view',$variable);}
	
}