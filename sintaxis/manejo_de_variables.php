<!--<form action="index.php" method="post">
    Nombre: <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>-->
<!--<form action="index.php" method="get">
    Nombre (GET): <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>-->
<!--<form action="index.php" method="post" enctype="multipart/form-data">
    Selecciona un archivo: <input type="file" name="mi_archivo">
    <input type="submit" value="Subir archivo">
</form>-->

<!--<form action="index.php" method="post">
    Nombre (REQUEST): <input type="text" name="nombre">
    <input type="submit" value="Enviar">
</form>-->


<!--<form action="index.php" method="post">
    Usuario (SESSION): <input type="text" name="usuario">
    <input type="submit" value="Iniciar sesión">
</form>-->

<form action="index.php" method="post">
    Usuario (COOKIE): <input type="text" name="usuario_cookie">
    <input type="submit" value="Guardar en cookie">
</form>
<?php
// Comprobar si el formulario fue enviado
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Nombre recibido por POST: " . $_POST['nombre'];
}
?>*/
/*if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nombre'])) {
    echo "Nombre recibido por GET: " . $_GET['nombre'];
}*/
/*if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['mi_archivo'])) {
    $nombreArchivo = $_FILES['mi_archivo']['name'];
    $rutaTemporal = $_FILES['mi_archivo']['tmp_name'];
    move_uploaded_file($rutaTemporal, "uploads/" . $nombreArchivo);
    echo "Archivo subido: $nombreArchivo";
}*/

/*if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_REQUEST['nombre'])) {
    echo "Nombre recibido por REQUEST: " . $_REQUEST['nombre'];
}*/

/*session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    echo "Usuario en sesión: " . $_SESSION['usuario'];
}*/

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario_cookie'])) {
    // Guardar en una cookie por un día
    setcookie("usuario", $_POST['usuario_cookie'], time() + 86400);
    echo "Cookie usuario guardada: " . $_POST['usuario_cookie'];
}

if (isset($_COOKIE['usuario'])) {
    echo "Cookie usuario: " . $_COOKIE['usuario'];
}
