<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoUTP</title>
    
   


    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

        <div  class="todo">

            <div class="divtodo">
                <div class="divback">
                    <div class="divbackin">
                        <h3>¿Ya tienes una cuenta?</h3>
                        
                        <button id="botonIn">Iniciar Sesión</button>
                    </div>
                    <div class="divbackres">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        
                        <button id="botonReg">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="loginRegistro">
                    <!--Login-->
                    <form action="php/validar.php" class="formin" method="POST">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico / Usuario" name="loginCorreo" required>
                        <input type="password" placeholder="Contraseña" name="loginPassword" required>
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registrarse.php" class="formRegister" method="POST">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Usuario" name="usuario" required>
                        <input type="text" placeholder="Correo Electronico" name="correo" required>
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </div>

        <script src="js/script.js"></script>
</body>
</html>