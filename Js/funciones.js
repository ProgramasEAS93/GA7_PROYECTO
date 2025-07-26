const formulariop = document.querySelector('#form');

//definir un  evento en este  caso de tipo submit

formulariop.addEventListener('submit', (e)=> {
    e.preventDefaul();

    //variables  javascript  - llamar  las  variables  name de  formulario: 
    var tipo_doc=document.getElementById("tipo_doc").value;
    var documento=document.getElementById("documento").value;
    var fecha=document.getElementById("fecha").value;
    var nombre=document.getElementById("nombre").value;
    var apellidos=document.getElementById("apellidos").value;
    var sexo=document.getElementById("sexo").value;

    if(tipo_doc == '' || Document== '' || fecha== '' || nombre=='' || apellidos== ''||  sexo==''){
                Swal.fire({
                title: "Error",
                text: "Los campos no pueden ir vacios",
                icon: "Wrning"
                });
                formulariop.reset();
    }else{
        const datos=new FormData(formulariop);
        var url='./modelo/llamarfuncion.php';
        fetch(url,{method:'POST', body: datos}).then(data=>json()).then(data=>{
            for(let item of data){
                var cons=item.consecutivo;
                var tipo=item.tipo_doc;
                var doc=item.documento;
                var fec=item.fecha;
                var nom=item.nombre;
                var ape=item.apellidos;
                var sex=item.sexo;
            }
            swal.fire({
                title:"OK",
                text: "Registro insertado",
                icon: "success",
                html: `${cons}<br>${tipo}<br>${doc}<br>${fec}<br>${nom}<br>${ape}<br>${sex}`
            });
            //Limpiar forumularoio
            formulariop.reset();
        
        }).catch(function(error){
            alert(error);
        });
   
    }


})