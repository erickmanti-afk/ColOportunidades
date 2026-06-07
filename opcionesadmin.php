<?php
include('funcionesadmin.php');


$opciones=$_POST['opciones'];
	
switch($opciones){
	
	case "listar":
		$table=new TablaDatos();
		$table->listar();
	break;
	case "ingresoImg":
	$table=new TablaDatos();
		$table->set("tipo",$_POST['tipo']);
        $table->set("nombre",$_POST['nombre']);
        $table->set("apellido",$_POST['apellido']);
        $table->set("telefono",$_POST['telefono']);
        $table->set("correo",$_POST['correo']);
			if(is_uploaded_file($_FILES['fileImage']['tmp_name'])) {
				$imgData =addslashes(file_get_contents($_FILES['fileImage']['tmp_name']));
				$table->set("imagen",$imgData);
			}		
	
	$table->ingresoImg();
	$table->listar();
	break;
	
	case "getOneImg":
		$table=new TablaDatos();
		$table->set("id",$_POST['idImg']);
		$table->getOneImg();
	break;
	case "getTitle":
		$table=new TablaDatos();
		$table->set("id",$_POST['idImg']);
		$table->getTitle();
	break;	
	case "editoSinImg"://edito Solo el titulo
		$table=new TablaDatos();
		$table->set("id",$_POST['idImgGlobal']);
		$table->set("tipo",$_POST['tipo']);
        $table->set("nombre",$_POST['nombre']);
        $table->set("apellido",$_POST['apellido']);
        $table->set("telefono",$_POST['telefono']);
        $table->set("correo",$_POST['correo']);
		$table->editDataSinImg();
		$table->listar();
	break;
	case "editoImg"://edito Todo
		$table=new TablaDatos();
		$table->set("id",$_POST['idImgGlobal']);
		$table->set("tipo",$_POST['tipo']);
        $table->set("nombre",$_POST['nombre']);
        $table->set("apellido",$_POST['apellido']);
        $table->set("telefono",$_POST['telefono']);
        $table->set("correo",$_POST['correo']);
	//	if(count($_FILES) > 0) {
			if(is_uploaded_file($_FILES['fileImage']['tmp_name'])) {
				$imgData =addslashes(file_get_contents($_FILES['fileImage']['tmp_name']));
					$table->set("imagen",$imgData);
			}
	//	}
		$table->editConImg();
		$table->listar();
	break;
	case "deleteData":
		$table=new TablaDatos();
		$table->set("id",$_POST['idImg']);
		$table->deleteData();
		$table->listar();
	break;

	
	default:
	break;
}//end switch

?>