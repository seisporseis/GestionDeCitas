<h1 class="page-name">Crear Cuenta</h1>
<p class="page-description">Llena el siguiente el formulario para crear una cuenta</p>

<?php 
    include_once __DIR__ . "/../templates/alerts.php";
?>

<form class="form" method="POST" action="/create-account">
  
    <div class="field">
        <label for="nombre">Nombre</label>
        <input
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Tu Nombre"
            value="<?php echo s($usuario->nombre); ?>"
        />
        <?php if (isset($alertas['nombre'])): ?>
            <p class="alerta error"><?php echo $alertas['nombre']; ?></p>
        <?php endif; ?>
    </div>

    <div class="field">
        <label for="apellido">Apellido</label>
        <input
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Tu Apellido"
            value="<?php echo s($usuario->apellido); ?>"
        />
    </div>

    <div class="field">
        <label for="telefono">Teléfono</label>
        <input
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Tu Teléfono"
            value="<?php echo s($usuario->telefono); ?>"
        />
    </div>

    <div class="field">
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Tu E-mail"
            value="<?php echo s($usuario->email); ?>"
        />
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Tu Password"
        />
    </div>

    <input type="submit" value="Crear Cuenta" class="btn">


</form>

<div class="actions">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/forgot-password">¿Olvidaste tu password?</a>
</div>