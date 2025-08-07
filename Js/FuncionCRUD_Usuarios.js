const editar =(cons)=>{
    var url="./modelo/llamarfuncion.php"
    var formData= new FormData();
    formData.append('tipo_operacion','editar');
    formData.append('cons',cons),
    fetch(url,{
        method: 'POST',body:formData
        .then(data=>data.json())
        .then(data=>{
            for(let item of data){
                var cons= item.consecutivo;
                var tipo= item.tipo_doc;
                var cons= item.Documento;
                var cons= item.fecha;
                var cons= item.nombre;
                var cons= item.apellidos;
                var cons= item.sexo;
                
                if(sexo=='Masculino'){
                    var sex = `
                    <selelec  name="sexo" class="form-control">
                    <option value="Masculino" selected>Masculiono</option>
                    <option value="Femenino">Femenino</option>
                    
                    `;
                }else if(sexo == 'Femenino'){
                    var sex = `
                     <selelec  name="sexo" class="form-control">
                    <option value="Masculino" selected>Masculiono</option>
                    <option value="Femenino" selected>Femenino</option>
                    </select>`
                }
            }

            Swal.fire({
                title: 'Actualizar  intormacion',html:`<form id="actualizar_form">
                <input type="text" value="update" name="tipo_operacion" hidden="true">
                 <input type="text" value="${cons}" name="consac" hidden="true  class="form-control" placeholder="Nro Documento">
                 <select name="tipoac" class="form-control>
                    <option value="CC">Cedula de ciudadania</option>
                    <option value="TI">Tarjeta de indentidad</option>
                    <option value="CE">Cedula de Extrajeria</option>
                    <option value="CC">Registro Civil</option>
                    <option value="CC">Nit</option>
                    </select><br>
                    <input value="${doc}" type="text" name="docac" class="form-control" flacehorlder="Digite su numero de identificaicon"<br>
                    <input value="${fec}" type="text" name="fecac" class="form-control" flacehorlder="Digite su numero de identificaicon"<br>
                    <input value="${nom}" type="text" name="nomac" class="form-control" flacehorlder="Digite su numero de identificaicon"<br>
                    <input value="${ape}" type="text" name="apec" class="form-control" flacehorlder="Digite su numero de identificaicon"<br>
                    ${sex}
                    <form>`,
                    showCancelButton:true,
                    cancelButtonColor:"#308456",
                    confirmButtonColor:"#d33",
                    confirmButtonText: 'Actualizar'


            }) .then((result)=>{
                if(result.isConfimed){
                    const datos = document.querySelector("#actualizar_form");
                    const datos_actualizar = new FormData(datos);
                    var url="./modelo/llamarfuncion.php";
                    fetch(url,{
                        method:'POST',body: datos_actualizar
                    }).then(data => data.json())
                    .then(data => {
                        pintar_tabla_resultados(data);
                        Swal.fire(
                            'Actualizado',
                            'El registro ha sido Actualizado',
                            'success'

                        )
                    })
                    .catch(function(error){
                         console.log('error', error);
                    });
                }


            }).catch(function(e){
            console.log(e);
        }); 
    
        }).catch(function(e){
            console.log(e);        
        });
}
