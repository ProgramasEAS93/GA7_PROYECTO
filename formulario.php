<!DOCTYPE html>
<html lang="en">
<head>
    <meta charsert="UTF-8">
    <meta name="viewport"  content="width=device-width, initial-sale=1.0">
    <title>Formulario paciente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css" crossorigin="anonymous">
   <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.7/dist/cerulean/bootstrap.min.css" crossorigin="anonymous">-->
    <head>
    <body>
        <body>
            <div class="card text-center">
                Bienvenido
            </div>
            <div class="row pt-5 justify-content-center">
            <form action="" id="form" class="form-horizontal">
            <div class="card-header">
                <input type="text" name="tipo_operacion" value="guardar" hidden="true">
                <div>
                    <h5>FORMULARIO PARA EL REGISTRO DE PACIENTES</h5>
                </div>
                <div class="form-group">
                    <select name="tipo_doc" id="tipo_doc" class="form-control">
                        <option value="">Seleccine el tipo de docuemtno de indentidad</option>
                        <option value="CC">Cedula de ciudadania</option>
                        <option value="TI">Tarjeta de indentidad</option>
                        <option value="CE">Cedula Extranjeria</option>
                        <option value="RC">Registro Civil</option>
                        <option value="NIT">Nit</option>
                    </select>
                </div>
                </br>
                <div class=form-group>
                    <input type="text" name="documento" id="documento" class="form-control" placeholder="Digite su numero de documento">   
                </div>
                </br>
                <div class=form-group>
                    <input type="date" name="fecha" id="fecha" class="form-control" >   
                </div>
                </br>
                <div class=form-group>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Digite su nombre">
                </div>
                </br>
                <div class="form-group">
                    <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Digite su apellido">
                </div>
                </br>
                <div class="form-group">
                <select name="sexo" id="sexo" class="form-control">
                    <option value="">Seleccione el sexo</option>
                    <option value="">Masculino</option>
                    <option value="">Femenino</option>
                </select>    
            </div>
            </br>
            <div  class="form-group">
                <button type="submit" class="btn-info btn-block">Aceptar</button>
          
            </div> 
            </br>
        </div>
            <div>
                <a class="nav-link" href="index.php">---index</a>
            </div>
            </br>
    </form>
</div>
    <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css" rel="stylesheet">-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <script src="js/funciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>