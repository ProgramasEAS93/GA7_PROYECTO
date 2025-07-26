<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" conten="width=divcie-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <a href="index.php" class="nav-link">INICIO</a>
<div class="container">
        <div class="table-responsive">
    <table class="table table-hover">
        <thead>
                <tr>
                    <th scope="row">Consecutivo</th>
                    <th>Tipo documento</th>
                    <th>Nro Documento</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Sexo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        <tbody id="tabla_persona">
            <?php 
                require_once "PHP/conexion.php";
                require_once "Controlador/ConsultasController.php";
                $sentencia= new consultas();
                $mostrardatos= $sentencia->select_paciente();
                foreach($mostrardatos as $res){
                    $cons= $res['consecutivo'];
                     echo "<tr>";
                     echo "<td>".$res["consecutivo"]."</td>";
                     echo "<td>".$res["tipo_doc"]."</td>";
                     echo "<td>".$res["documento"]."</td>";
                     echo "<td>".$res["fecha"]."</td>";
                     echo "<td>".$res["nombre"]."</td>";
                     echo "<td>".$res["apellido"]."</td>";
                     echo "<td>".$res["sexo"]."</td>";
                     echo "<td class='text-center'>";

                }
            ?>
        <tbody>
</table>


      
</div>
</div>
</body>
</html>

