<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contenct="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
          .login-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo {
            display: block;
            margin: 0 auto 15px;
            max-width: 90px;
        }
    </style>
</head>
<body>
     <div class="container">
        <div class="login-container">
            <img src="img/logo.png" alt="Logo" class="logo">
            <h3 class="text-center">Sistema Maquila</h3>
            <p class="text-center text-muted">Usuario: admin | Contraseña: 1234</p>
            <form onsubmit="return validarLogin(event)">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
                </div>
                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
            </form>
        </div>
    </div>
    <script>
        function validarLogin(event) {
            event.preventDefault();
            var usuario = document.getElementById("username").value;
            var contraseña = document.getElementById("password").value;
            
            if (usuario === "admin" && contraseña === "1234") {
                window.location.href = "index.php";
            } else {
                alert("Usuario o contraseña incorrectos");
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="Img/Imagen2.jpg" alt="No se encuentra la imagen" class="rounded">
                </div>
            </div>
        </div>
    </div>-->
</body>
</html>