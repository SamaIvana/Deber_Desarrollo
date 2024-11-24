<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INICIO DE SESION</title>
    <link  rel="stylesheet" href="styles.css">
</head>

<body>
    <form action=""  method="post" >
        <?php
        include("conexion.php");
        include("login.php");
        ?>
        <p><h2>Bienvenido/a</h2></p>
        <p>Iniciar Sesion </p>
        <div class="input-wrapper">
                <input type="email" name ="email" placeholder="E-mail...">
                
        </div> 
        <div class="input-wrapper">
                <input type="password" name ="password" placeholder="Contraseña...">
                
        </div> 
        <input class="btn" type="submit"  name="inicio" value="INICIO"> 
        <div>
            Click aqui para <a href="registar.php">Registrarte</a>
        </div>      
        </form>
</body>
</html>
