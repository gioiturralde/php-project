<?php
include ('header.php');


?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<body>
<center>
    <h1>Iniciar Sesion</h1>
    <br/>
    <form action="validar.php" method="post">

        <input name="usuario" type="text" placeholder="Escribe tu nombre de usuario" required>
        <br><br>
        <input name="password" type="password" placeholder="Contraseña" required>
        <br><br>
        <div class="g-recaptcha" data-sitekey="6LdSzQYhAAAAAEMZAqA8GUHWtDbSE0v-qf4n9FoW"></div>
        <input type="submit" value="Iniciar sesión">

    </form>
    
    </center>
</body>
</html>