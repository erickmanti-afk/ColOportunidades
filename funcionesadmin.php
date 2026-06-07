<?php
include("conexionclasi.php");

	class TablaDatos{

		private $id;
		private $tipo;
        private $nombre;
        private $apellido;
        private $telefono;
        private $correo;
		private $imagen;
		private $con;
        
        

		public function __construct(){
		  $this->conexion=mysqli_connect("localhost","root","16062020") or
			die("Problemas en la conexion");

			mysqli_select_db($this->conexion, "col_oportunidades") or  die("Problemas en
			la selección de la base de datos");
		}
		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}	
		public function get($atributo){
			return $this->$atributo;
        }
		
		public function listar(){
		$sql=mysqli_query($this->conexion, "SELECT * FROM servicios");		
			while($data=mysqli_fetch_array($sql)){
				echo "<p>Tipo: <b>".$data['tipo']."</b></p>";
                echo "<p>Nombre: <b>".$data['nombre']."</b></p>";
                echo "<p>Apellido: <b>".$data['apellido']."</b></p>";
                echo "<p>Telefono: <b>".$data['telefono']."</b></p>";
                echo "<p>Correo: <b>".$data['correo']."</b></p>";
				echo'<img src="data:image/jpeg;base64,'.base64_encode($data['imagen']).'" class="img-responsive img-rounded ">';	
				echo'<a href="javascript:deleteImg('.$data['id'].');" class="btn btn-danger"><span  style="padding-left: 10px" class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Eliminar</a>';		
				echo "<hr><br>";
			}		
		}
		public function getOneImg(){
			$idImg=$this->id;
			$sql=mysqli_query($this->conexion, "SELECT * FROM servicios WHERE id=".$idImg."");		
			
		if($data=mysqli_fetch_array($sql)){
				echo'<img src="data:image/jpeg;base64,'.base64_encode($data['imagen']).'" class="img-responsive img-rounded ">';	
		}	
		}
		public function getTitle(){
			$idImg=$this->id;
			$sql=mysqli_query($this->conexion, "SELECT * FROM servicios WHERE id=".$idImg."");				
			if($data=mysqli_fetch_array($sql)){
					echo $data['tipo'];	
                    echo $data['nombre'];	
                    echo $data['apellido'];	
                    echo $data['telefono'];	
                    echo $data['correo'];	
			}	
		}
		public function editDataSinImg(){
		$id=$this->id;
		$tipo=$this->tipo;
        $nombre=$this->nombre;
        $apellido=$this->apellido;
        $telefono=$this->telefono;
        $correo=$this->correo;
		mysqli_query($this->conexion, "UPDATE servicios SET tipo= '".$tipo."', nombre= '".$nombre."', apellido= '".$apellido."', telefono= '".$telefono."', correo= '".$correo."' WHERE id='".$id."'");
		}
		public function editConImg(){
		$id=$this->id;
		$tipo=$this->tipo;
        $nombre=$this->nombre;
        $apellido=$this->apellido;
        $telefono=$this->telefono;
        $correo=$this->correo;
		$imgData=$this->imagen;
		 mysqli_query($this->conexion, "UPDATE servicios SET img='{$imgData}', tipo='".$tipo."', nombre= '".$nombre."', apellido= '".$apellido."', telefono= '".$telefono."', correo= '".$correo."' WHERE id=".$id."");
		}
		public function ingresoImg(){
		$tipo=$this->tipo;
        $nombre=$this->nombre;
        $apellido=$this->apellido;
        $telefono=$this->telefono;
        $correo=$this->correo;
		$imgData=$this->imagen;
		 mysqli_query($this->conexion, "INSERT INTO servicios VALUES (0,'".$tipo."','".$nombre."','".$apellido."','".$telefono."','".$correo."','{$imgData}')");		
		}
		public function deleteData(){
		$idImg=$this->id;
		mysqli_query($this->conexion, "DELETE FROM servicios WHERE id='".$idImg."'");
		}
	
	}
?>