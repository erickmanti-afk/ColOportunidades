$('#formlogin').submit(function(e){
   e.preventDefault()
   var usuario = $.trim($("#usuario").val());
   var contraseña = $.trim($("#contraseña").val());
    
   if(usuario.length == "" || contraseña.lenght == ""){
    Swal.fire({
        type:'warning',
        title:'Debe ingresar un usuario y/o contraseña',
    });
    return false;
   }else{
       $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, contraseña:contraseña},
           success:function(data){
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title: 'Conexion exitosa',
                       confirmButtonColor:'#3186F5',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "demo.php";
                       }
                   })
               }
           }
       });
   }
});