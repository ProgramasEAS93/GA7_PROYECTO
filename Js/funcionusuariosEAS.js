const formulariop = document.querySelector('#form');

//definir un  evento en este  caso de tipo submit

formulariop.addEventListener('submit', (e)=> {
    e.preventDefaul();

    //variables  javascript  - llamar  las  variables  name de  formulario: 
    var NomUsuario =document.getElementById("nombre").value;
    var NombreCompleto=document.getElementById("usuario").value;
    var Clave=document.getElementById("correo").value;
    var Estado=document.getElementById("contrasena").value;
    var FechaCreacion=document.getElementById("confirmarContrasena").value;
   
    

    if(NomUsuario == '' || NombreCompleto== '' || Clave== '' || Estado=='' || FechaCreacion== ''){
                Swal.fire({
                title: "Error",
                text: "Los campos no pueden ir vacios",
                icon: "Wrning"
                });
                formulariop.reset();
    }else{
        const datos=new FormData(formulariop);
        var url='./Modelo/llamarfuncionusuarios.php';
        fetch(url,{method:'POST', body: datos}).then(data=>json()).then(data=>{
            for(let item of data){
                var nomu=item.NomUsuario;
                var nomcomp=item.NombreCompleto;
                var clave=item.Clave;
                var est=item.Estado;
                var fcrea=item.FechaCreacion;
             
            }
            swal.fire({
                title:"OK",
                text: "Registro insertado",
                icon: "success",
                html: `${nomu}<br>${nomcomp}<br>${clave}<br>${est}<br>${fcrea}<br>${ape}<br>${sex}`
            });
            //Limpiar forumularoio
            formulariop.reset();
        
        }).catch(function(error){
            alert(error);
        });
   
    }


})