<h1 class="page-name">Olvide Password</h1>
<p class="page-description">Reestablece tu password escribiendo tu email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alerts.php";
?>

<form class="form" action="/forgot-password" method="POST">
    <div class="field">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu Email"
        />
    </div>

    <input type="submit" class="btn" value="Enviar Instrucciones">
</form>

<div class="actions">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/create-account">¿Aún no tienes una cuenta? Crear Una</a>
</div>