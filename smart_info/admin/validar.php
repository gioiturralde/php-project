<?php
include ("conexion.php");

 if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LdSzQYhAAAAAPmW0nW0fhTKkvMR86Q11k3Yfu2M';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        { ?>
<div style="color: limegreen;"><b>Tu solicitud fue exitosa.</b></div>
        <?php }
        else
        {?>
            <div style="color: red;"><b>La verificacion tuvo un error, intentalo de nuevo.</b></div>
        <?php }
   }else{?>
       <div style="color: red;"><b>Por favor, verifica el captcha</b></div>
   <?php }
 }

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$registros = mysqli_query( $conexion, "SELECT * FROM usuarios WHERE username='$usuario'" );

if (isset($registros)) {

    session_start();

    $_SESSION["usuario"] = $usuario;
    header("Location: index.php");
} else {
    echo "<center>";
    echo "El usuario o la contraseña son incorrectos <br/>";
    echo "<br/><a href=\"log.php\">Regresar</a>";
    echo "</center>";
}
?>
    