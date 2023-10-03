

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    


<style>
        body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
footer {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
 
  max-width: 100%;
  box-sizing: border-box;
}
    </style>

<!------ Include the above in your HEAD tag ---------->

</head>

<body>
    <!-- ANTIGUO VALOR DEL ID roles -->
    <div id="login">
        <h3 class="text-center text-white pt-5">Iniciar Sesión</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="verificar_login.php" method="post">
                             <!--   <h3 class="text-center text-info">Acceso</h3>   -->
                            <div class="form-group">
                                <label for="roles" class="text-info">Rol:</label><br>
                                <label for="padre">
                                    <input type="radio"  name="rol" value="padre" id="padre" required>Padre  
                                </label>
                                <label for="estudiante">
                                    <input type="radio"  name="rol" value="estudiante" id="estudiante" required style="margin-left:20px ;">Estudiante
                                </label>
                                <label for="docente">
                                    <input type="radio" name="rol" value="docente" id="docente" required style="margin-left:20px ;">Docente
                                </label>
                                <label for="empleado">
                                    <input type="radio" name="rol" value="empleado" id="empleado" required style="margin-left:20px ;">Empleado
                                </label>
                                
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" class="form-control" id="username" name="usuario" autocomplete="off" required >
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" class="form-control" id="password" name="contraseña" autocomplete="off" required >
                            </div>
                            
                            <div class="form-group">
                                <!--   <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Ingresar">
                                
                            </div>
                            <div id="register-link" class="text-right" style="margin-top: -40px">
                                <a href="registoUsuarioRol.php" class="text-info">Regístrate aquí</a>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- footer     -->
<footer>
    <div class="copyright py-4 text-center" style="background-color:#1b263b;margin-top: 100px;">
            <div class="container"><a href="index.php">Volver Inicio</a></div>
        </div>
</footer>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</body>
</html>