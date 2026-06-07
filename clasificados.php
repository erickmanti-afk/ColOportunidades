<?php
session_start();


ini_set('error_reporting',0);

if ($_SESSION["s_usuario"] === null){
	header("Location: login.php");
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="shortcut icon" href="#">
        <title>CLASIFICADOS</title>
        <!-- Bootstrap CSS -->
        
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="clasificados.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
          <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Archivos modificar el input file -->
  <link rel="stylesheet" type="text/css" href="css/component.css" />
        
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    
    <body style="text-align:justify;"><br>
        <header>         
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <a class="navbar-brand"href="#">COL OPORTUNIDADES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="demo.php">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mision2.html">MISION</a>
                <li class="nav-item">
          <a class="nav-link" href="vision2.html">VISION</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="clasificados.php">CLASIFICADOS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="servicioalcliente.php">SERVICIO AL CLIENTE</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
      </form>
    </div>
  </nav>         
</header> 
        <br><br>
        <p><h4 class="text-center text-dark"><span class="badge badge-primary">Publica tu servicio en el sistema</span></h4>
           
        <!-- /.box-body -->
                <div class="col-md-4 offset-md-1">
        <br><br>

        <div class="form-group" >
            <div class="input-group mb-3" >
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" >Tipo</button>
                </div>
                <input type="text" class="form-control" id="tipoImage">
            </div>
            <div class="input-group mb-3" >
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" >Nombre</button>
                </div>
                <input type="text" class="form-control" id="nombreImage">
            </div>
            <div class="input-group mb-3" >
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" >Apellido</button>
                </div>
                <input type="text" class="form-control" id="apellidoImage">
            </div>
            <div class="input-group mb-3" >
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" >Telefono</button>
                </div>
                <input type="number" class="form-control" id="telImage">
            </div>
            <div class="input-group mb-3" >
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" >Correo</button>
                </div>
                <input type="text" class="form-control" id="correoImage">
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="fileImage" accept="image/*">
                <label class="custom-file-label" for="inputGroupFile04">Imagen: 640 x 428</label>
                <br>
                <img id="imgSalida" src=""/>
                 <div id="imagenEditar">
                </div>
                <br> <br>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button">Opcion</button>
                </div>
                <div class="custom-file">
                    <input type="text" class="form-control" id="opcionValor" value="Ingresar" readonly>
                </div>
            </div>
            <button class="btn btn-primary" type="button" id="buttonRegist">Publicar</button>
            
            <button class="btn btn-warning" type="button" id="buttonCancel">Cancelar</button>
            <br><br>
        </div>
    </div>
	
	<div  class="col-md-3 offset-md-1">
	<h3>Servicios</h3>
	<hr>
	<div id="data">
	<!--Aca se cargan los datos-->
	</div>
	</div>
        
            <script>
	var idImgGlobal="";//obtengo el id la imagen
    $(document).ready(function(){
    dataDeTablas();
	 $('#buttonEdit').hide();
 });
 function dataDeTablas(){
	 	 var opciones="listar";
	    $.ajax({
          url:"opciones.php",
          method:"POST",
          data:{opciones:opciones},
     
           success:function(data) {
				$('#data').html(data);    	
          }
        });
	 
 }
    //previsualizo la imagen insertar
    $(function() {
        $('#fileImage').change(function(e) {
            addImage(e);
        });
         function addImage(e) {
			 $('#imagenEditar').hide();
            $('#imgSalida').show();
            var file = e.target.files[0],
                imageType = /image.*/;
            if (!file.type.match(imageType))
                return;
            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);
        }
        function fileOnload(e) {
            var result = e.target.result;
            $('#imgSalida').attr("src", result);
        }
    });
    //ingreso imagen blob
  	$('#buttonRegist').click(function(){
        var fileImage = $('#fileImage').val();
		    var tipo=$('#tipoImage').val();
            var nombre=$('#nombreImage').val();
            var apellido=$('#apellidoImage').val();
            var telefono=$('#telImage').val();
            var correo=$('#correoImage').val();
	if(tipo!=""){
        if (fileImage != '') {

            var form_data = new FormData();
            var opciones = "ingresoImg";
            form_data.append('opciones', opciones);
            form_data.append('tipo', tipo);
            form_data.append('nombre', nombre);
            form_data.append('apellido', apellido);
            form_data.append('telefono', telefono);
            form_data.append('correo', correo);
            form_data.append("fileImage", document.getElementById('fileImage').files[0]);
          console.log(form_data);
            $.ajax({
                url: "opciones.php",
                method: "POST",
                data: form_data,
                contentType: false,
                processData: false,
		 success:function(data) {
				$('#data').html(data);    
		$('#tipoImage').val("");
        $('#nombreImage').val("");
        $('#apellidoImage').val("");
        $('#telImage').val("");
        $('#correoImage').val("");
         $('#imgSalida').hide();				
          }
            });
        }else{
          alert("No ingreso Archivo de imagen");
        }
    }else{
		alert("Error no ingreso los datos solicitados");
	}
});

	//pre editcion img
	function preEditImg(idImg){
			 $('#buttonEdit').show();
			 $('#buttonRegist').hide();
		$('#imagenEditar').show();
		idImgGlobal=idImg;
		//alert("edito "+idImg);
     $('#opcionValor').val('Edicion');   	
	    var opciones="getOneImg";
	    $.ajax({
          url:"opciones.php",
          method:"POST",
          data:{idImg:idImg,opciones:opciones},
     
           success:function(data) {
				$('#imagenEditar').html(data); 
				getTitle(idImg);	//llamo a la funcion			
          }
        });
	}
	function getTitle(idImg){	//obtengo el titulo y lo coloca en el input
	    var opciones="getTitle";
	    $.ajax({
          url:"opciones.php",
          method:"POST",
          data:{idImg:idImg,opciones:opciones},
     
           success:function(data) {
				$('#tipoImage').val(data);
                $('#nombreImage').val(data);
                $('#apellidoImage').val(data);
                $('#telImage').val(data);
                $('#correoImage').val(data);
          }
        });
	}
	
	//borro Img
	function deleteImg(idImg){
	//	alert("borro "+idImg);
	 	 var opciones="deleteData";
	    $.ajax({
          url:"opciones.php",
          method:"POST",
          data:{idImg:idImg,opciones:opciones},
           success:function(data) {
				$('#data').html(data);    	
          }
        });
	}
	
	//edito Imagen
	$('#buttonEdit').click(function(){
	      var fileImage = $('#fileImage').val();
		    var titulo=$('#tipoImage').val();
            var titulo=$('#nombreImage').val();
            var titulo=$('#apellidoImage').val();
            var titulo=$('#telImage').val();
            var titulo=$('#correoImage').val();
	if(tipo!=""){
        if (fileImage != '') {// si actualizo la imagen
            var form_data = new FormData();
            var opciones = "editoImg";
            form_data.append('opciones', opciones);
			    form_data.append('tipo', tipo);
                form_data.append('nombre', nombre);            
                form_data.append('apellido', apellido);
                form_data.append('telefono', telefono);
                form_data.append('correo', correo);
			 form_data.append('idImgGlobal', idImgGlobal);
            form_data.append("fileImage", document.getElementById('fileImage').files[0]);
          console.log(form_data);
            $.ajax({
                url: "opciones.php",
                method: "POST",
                data: form_data,
                contentType: false,
                processData: false,
			   success:function(data) {
				$('#data').html(data);    	
				}
            });
        }else{//edito Solo el Titulo.
			  var titulo = $('#tipoImage').val();
              var titulo = $('#nombreImage').val();
              var titulo = $('#apellidoImage').val();
              var titulo = $('#telImage').val();
              var titulo = $('#correoImage').val();
			  var opciones = "editoSinImg";
             $.ajax({
          url:"opciones.php",
          method:"POST",
          data:{idImgGlobal:idImgGlobal,tipo:tipo,opciones:opciones},
          data:{idImgGlobal:idImgGlobal,nombre:nombre,opciones:opciones},
          data:{idImgGlobal:idImgGlobal,apellido:apellido,opciones:opciones},
          data:{idImgGlobal:idImgGlobal,telefono:telefono,opciones:opciones},
          data:{idImgGlobal:idImgGlobal,correo:correo,opciones:opciones},
           success:function(data) {
				$('#data').html(data);    	
          }
        });
		}
		$('#opcionValor').val('Ingresar');
		$('#tipoImage').val("");
        $('#nombreImage').val("");
        $('#apellidoImage').val("");
        $('#telImage').val("");
        $('#correoImage').val("");
		 $('#imagenEditar').hide();
         $('#imgSalida').hide();			
		  $('#buttonEdit').hide();
		 $('#buttonRegist').show();
		 }else{
		 alert("No se diligenciaron los datos");
		 }
});
	
	$('#buttonCancel').click(function(){//limpio los campos
		$('#opcionValor').val('Ingresar');
		$('#titleImage').val("");    
		 $('#imagenEditar').hide();
         $('#imgSalida').hide();			
		  $('#buttonEdit').hide();
		 $('#buttonRegist').show();
	});
	
    </script>

        <br><br>
         
        <footer style="border-color: black" class="container"> 
            <br><br>
   <a class="btn btn-danger btn-lg" href="index.html" role="button">Cerrar Sesion</a> 
    <br><br>
      
    <p >&copy;2020-2022 COL OPORTUNIDADES &middot; <a href="error_404.html">PRIVADOS</a> &middot; <a href="error_505.html">TERMINOS</a></p>
  </footer>
    </body>
</html>