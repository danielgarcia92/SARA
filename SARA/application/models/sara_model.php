<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Sara_model extends CI_Model {
    
    function __construct(){
     
     parent::__construct();
        $this->load->database();
    
}
    function crear_usuario($usuario,$ganados,$perdidos){
        
       
        $data = array(
   'usuario' => $usuario ,
            
            'ganados' => $ganados ,
   'perdidos' => $perdidos 
   
);
        
        $this->db->insert('juegos',$data);
    }
    
    
     
    function obtener(){
        
        $query= $this->db->get('juegos');
        if($query->num_rows()> 0) return $query;
        else return false;
    }
    
     function Ganar($id){
         
          $this->db->where('id',$id);
    $query= $this->db->get('users');
      if($query->num_rows()> 0) {
      
      
          foreach ($query->result() as $row)
{
   $usuario=$row->email;
  
}}
         
        
    $this->db->where('usuario',$usuario);
    $query= $this->db->get('juegos');
      if($query->num_rows()> 0) {
      
      
          foreach ($query->result() as $row)
{
   $victorias=$row->ganados;
  
}
                
  $victorias=$victorias+1;
    $datos= array(
        
        'ganados'=>$victorias,
                
        );
         
        $this->db->where('usuario',$usuario);        
         $query= $this->db->update('juegos',$datos);}
      
                
       //ranking();
         
          $query= $this->db->get('juegos');
      if($query->num_rows()> 0) {
      
      
          foreach ($query->result() as $row)
{
   $ganados[]=$row->ganados;
  
}}
  
          $tam=count($ganados);
        
        sort($ganados);

      for($i=$tam;$i>0;$i--){
          $win[]=$ganados[$i-1];
          
        }
        $k=1;
        $anterior=-1;
for($j=0;$j<$tam;$j++){
          
    
    
    $datos= array(
        'ranking'=>$k,
                
        );
        
        

    if($win[$j]!=$anterior){
        $this->db->where('ganados',$win[$j]);        
         $query= $this->db->update('juegos',$datos); 
        $k++;}
        $anterior=$win[$j];}
         
    }
    
    
         function perder($id){
         
          $this->db->where('id',$id);
    $query= $this->db->get('users');
      if($query->num_rows()> 0) {
      
      
          foreach ($query->result() as $row)
{
   $usuario=$row->email;
  
}}
         
        
    $this->db->where('usuario',$usuario);
    $query= $this->db->get('juegos');
      if($query->num_rows()> 0) {
      
      
          foreach ($query->result() as $row)
{
   $derrotas=$row->perdidos;
  
}
                
  $derrotas=$derrotas+1;
    $datos= array(
        
        'perdidos'=>$derrotas,
                
        );
         
        $this->db->where('usuario',$usuario);        
         $query= $this->db->update('juegos',$datos);}
      
                
            
    }
    
     
    //////////////////////////////////
    
    function borrar($usuario){
        
        
         $this->db->where('email',$usuario);
    
        $this->db->delete('users');
      
        
    }
    
     function crear_tabla(){
        
         $num=rand(0, 3);
         
$descripcion[0]='PC Hewlett-Packard';
$descripcion[1]='Videobeam Epson';
$descripcion[2]='Televisor Samsung';
$descripcion[3]='Parlantes Sony';

         
       for($i=1;$i<3;$i++){
        for($j=1;$j<19;$j++){
            $num=rand(0, 3);
            $cant=rand(1,4);
           $data = array(
   'piso' => $i ,
   'aula' => $j ,
 'descripcion' => $descripcion[$num] , 
 'equipos' => $cant , 
  
);
        
        $this->db->insert('reservas',$data);
    }
    }
    
     }
    
    function reservar($id, $piso, $aula, $hora, $fecha, $curso){
   
        $year=substr($fecha,0,4);
$mes=substr($fecha,5,2);
$dia=substr($fecha,8,2);
        
$year_now=date('Y');
$mes_now=date('m');
$dia_now=date('d');

$reserva='';

if($year < $year_now ) {
    $reserva='Por favor ingrese una fecha válida';
   // $_SESSION["mensaje"]='Por favor ingrese una fecha válida';
}
    
if($year == $year_now ) {

if($mes < $mes_now ){
    $reserva='Por favor ingrese una fecha válida';
  //   $_SESSION["mensaje"]='Por favor ingrese una fecha válida';
}
}
if($mes == $mes_now){
    
   // $dia_now=$dia_now-1;
        if($dia < $dia_now ){
        $reserva='Por favor ingrese una fecha válida';
       //        $_SESSION["mensaje"]='Por favor ingrese una fecha válida';
  
        }
}



if($reserva!='Por favor ingrese una fecha válida'){
        
        
        $this->db->where('id',$id);
    $query= $this->db->get('users');
      if($query->num_rows()> 0) {
      
      
          foreach ($query->result() as $row)
{
   $usuario=$row->email;
   $nombre=$row->first_name; 
   $apellido=$row->last_name;
  
}}
        
       $name=$nombre.' '.$apellido;
        
         $this->db->where('hora_inicio',$hora);
         $this->db->where('reservado',$usuario);
         $this->db->where('fecha',$fecha);
    $query= $this->db->get('historial');
      if($query->num_rows()> 0) {
          $reserva='Usted ya tiene una aula reservada en el horario solicitado';
             //  $_SESSION["mensaje"]='Usted ya tiene una aula reservada en el horario solicitado';

      }
     
    else{
         $this->db->where('hora_inicio',$hora);
         $this->db->where('fecha',$fecha);
        $this->db->where('piso',$piso);
        $this->db->where('aula',$aula);
    $query= $this->db->get('historial');
     if($query->num_rows()> 0) {
          $reserva='El aula se encuentra reservada por otro usuario';
                 //       $_SESSION["mensaje"]='El aula se encuentra reservada por otro usuario';

      }
        
        
           else{
            
            $hora_f=$hora+2;
            $s=':00';
            $hora_f=$hora_f.$s;
            
            
          
            
           if($hora_f=='24:00') $hora_f='00:00:00';
       
            
     /*   $data = array(
            'reservado'=> $usuario,
            'hora_inicio' => $hora ,
            'hora_salida' => $hora_f ,
            'fecha' => $fecha,
   
); 
        $this->db->where('piso',$piso);
                $this->db->where('aula',$aula);
                 $this->db->update('reservas',$data);*/
            
            
            $data = array(
            'reservado'=> $usuario,
            'hora_inicio' => $hora ,
            'hora_salida' => $hora_f ,
            'fecha' => $fecha,
            'piso' => $piso,
            'aula' => $aula,    
            'nombre' => $name,    
            'curso' => $curso,      
        
); 
            
            
            $this->db->insert('historial',$data);
            
            $reserva='Reserva exitosa';
            //   $_SESSION["mensaje"]='Reserva exitosa';
   
    }
    }
        ////////////
}
     
  //$reserva=date("H:i:s");
        //$reserva=$hora;
    return $reserva;
    
    }
    
     function cancelar($id, $piso, $aula, $hora, $fecha){
        
        $this->db->where('id',$id);
    $query= $this->db->get('users');
      if($query->num_rows()> 0) {
      
      
          foreach ($query->result() as $row)
{
   $usuario=$row->email;
  
}}
        
       
      $this->db->where('reservado',$usuario);
          $this->db->where('piso',$piso);
         $this->db->where('aula',$aula);
          $this->db->where('hora_inicio',$hora);
          $this->db->where('fecha',$fecha);
        
         $query= $this->db->get('historial');
      if($query->num_rows()> 0) {
          
          $this->db->where('reservado',$usuario);
          $this->db->where('piso',$piso);
         $this->db->where('aula',$aula);
          $this->db->where('hora_inicio',$hora);
          $this->db->where('fecha',$fecha);
         
         $this->db->delete('historial');
      
      $reserva='Cancelación exitosa';
      }
         
         else $reserva='No se ha podido realizar la cancelación, por favor verifique la información suministrada';
         
         return $reserva;
    }
    
    
    
    function consultar_aulas ($piso,$aula,$year){
        
     $this->db->where('piso',$piso);
    $this->db->where('aula',$aula);
        
    $query= $this->db->get('historial');
      if($query->num_rows()> 0) {
      
      for($i=0;$i<13;$i++) $total[$i]=0;
          
          
          $total;
          foreach ($query->result() as $row)
{
   $fecha_reserva[]=$row->fecha;
  
}}    
        else $fecha_reserva[0]='';
            
            
        $tam=count($fecha_reserva);
        
        
        for($i=0;$i<$tam;$i++){
        
        $anio=substr($fecha_reserva[$i],0,4);  
        if($anio==$year) {
            
             $mes=substr($fecha_reserva[$i],5,2);  
            
            
             if($mes=='01') $total[1]++;//enero
             if($mes=='02') $total[2]++;//febrero
             if($mes=='03') $total[3]++;//marzo
             if($mes=='04') $total[4]++;//abril
             if($mes=='05') $total[5]++;//mayo
             if($mes=='06') $total[6]++;//junio
             if($mes=='07') $total[7]++;//julio
             if($mes=='08') $total[8]++;//agosto
             if($mes=='09') $total[9]++;//septiembre
             if($mes=='10') $total[10]++;//octubre
             if($mes=='11') $total[11]++;//noviembre
             if($mes=='12') $total[12]++;//diciembre
            
            
        }
            
        }
        
  $total[13]=$piso;
  $total[14]=$aula;
  $total[15]=$year;

     
        
 return $total;       
    }
    
    
     function consultar_alertas ($piso,$aula,$year,$mes){
        
     ///Iluminacion
               $dia=date('00');

         $tipo='iluminacion';
for($i=0;$i<31;$i++){
$dia=$dia+1;
$fecha=$year.'-'.$mes.'-'.$dia;
   
              
$this->db->where('piso',$piso);
     $this->db->where('aula',$aula);
    $this->db->where('fecha',$fecha);
    $this->db->where('tipo',$tipo);
        
        $query= $this->db->get('alertas');
     
        if($query->num_rows()> 0) {
            
             foreach ($query->result() as $row)
{
            
               $iluminacion[]=$row->id;}
          
        }
   /* else {$fecha_reserva[]='';
    $tam=0;}*/
    
 

} /////end for
         
                        
         if(empty($iluminacion)) $tam=0;
        else  $tam=count($iluminacion);
       $total[0]=$tam;
         
         ////Encendida
         
                      $dia=date('00');

         $tipo='encendida';
for($i=0;$i<31;$i++){
$dia=$dia+1;
$fecha=$year.'-'.$mes.'-'.$dia;
   
              
$this->db->where('piso',$piso);
     $this->db->where('aula',$aula);
    $this->db->where('fecha',$fecha);
    $this->db->where('tipo',$tipo);
        
        $query= $this->db->get('alertas');
     
        if($query->num_rows()> 0) {
            
             foreach ($query->result() as $row)
{
            
               $encendida[]=$row->id;}
          
        }
  
 

} /////end for
         
                        
         if(empty($encendida)) $tam=0;
        else  $tam=count($encendida);
       $total[1]=$tam;
        
         
    ///equipo
         
                      $dia=date('00');

         $tipo='equipo';
for($i=0;$i<31;$i++){
$dia=$dia+1;
$fecha=$year.'-'.$mes.'-'.$dia;
   
              
$this->db->where('piso',$piso);
     $this->db->where('aula',$aula);
    $this->db->where('fecha',$fecha);
    $this->db->where('tipo',$tipo);
        
        $query= $this->db->get('alertas');
     
        if($query->num_rows()> 0) {
            
             foreach ($query->result() as $row)
{
            
               $equipo[]=$row->id;}
          
        }
   
    
 

} /////end for
         
                        
         if(empty($equipo)) $tam=0;
        else  $tam=count($equipo);
       $total[2]=$tam;
         
         
         //Puerta
         
                      $dia=date('00');

         $tipo='puerta';
for($i=0;$i<31;$i++){
$dia=$dia+1;
$fecha=$year.'-'.$mes.'-'.$dia;
   
              
$this->db->where('piso',$piso);
     $this->db->where('aula',$aula);
    $this->db->where('fecha',$fecha);
    $this->db->where('tipo',$tipo);
        
        $query= $this->db->get('alertas');
     
        if($query->num_rows()> 0) {
            
             foreach ($query->result() as $row)
{
            
               $puerta[]=$row->id;}
          
        }
      
 

} /////end for
         
                        
         if(empty($puerta)) $tam=0;
        else  $tam=count($puerta);
       $total[3]=$tam;
         
    //aulaabierta
         
                      $dia=date('00');

         $tipo='aulaabierta';
for($i=0;$i<31;$i++){
$dia=$dia+1;
$fecha=$year.'-'.$mes.'-'.$dia;
   
              
$this->db->where('piso',$piso);
     $this->db->where('aula',$aula);
    $this->db->where('fecha',$fecha);
    $this->db->where('tipo',$tipo);
        
        $query= $this->db->get('alertas');
     
        if($query->num_rows()> 0) {
            
             foreach ($query->result() as $row)
{
            
               $aulaabierta[]=$row->id;}
          
        }
   /* else {$fecha_reserva[]='';
    $tam=0;}*/
    
 

} /////end for
         
                        
         if(empty($aulaabierta)) $tam=0;
        else  $tam=count($aulaabierta);
       $total[4]=$tam;
         
         
       $total[5]=$piso;
    $total[6]=$aula;
         $total[7]=$year;
         $total[8]=$mes;
         
       return $total;
           
    }
    
    function prueba(){
        
        
        $year='2016';
        $mes='01';
        
        $dia=date('00');

for($i=0;$i<31;$i++){
$dia=$dia+1;
$fecha=$year.'-'.$mes.'-'.$dia;
    $data = array(
   'fecha' => $fecha ,
            
              
);
        
        $this->db->insert('prueba',$data);

}
        
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
    
    function habilitacion($piso,$aula){
        
        $estado=1;  
        $datos= array(
        
        'estado'=>$estado,
                
        );
         
        $this->db->where('piso',$piso);        
        $this->db->where('aula',$aula);        
        
         $query= $this->db->update('estadoaulas',$datos);
    
    $reserva='Aula habilitada';
    
    return $reserva;
        
    }
    
      function deshabilitacion($piso,$aula){
        
        $estado=0;  
        $datos= array(
        
        'estado'=>$estado,
                
        );
         
        $this->db->where('piso',$piso);        
        $this->db->where('aula',$aula);        
        
         $query= $this->db->update('estadoaulas',$datos);
    
    $reserva='Aula deshabilitada';
    
    return $reserva;
        
    }

    
}
?>