<h1 class="page-name">Login</h1>
<p class="page-description">Inicia sesión con tus datos</p>

<!-- <?php 
    include_once __DIR__ . "/../templates/alertas.php";
?> -->

<form class="form" method="POST" action="/">
    <div class="field">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            placeholder="Tu Email"
            name="email"
        />
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Password"
            name="password"
        />
    </div>

    <input type="submit" class="btn" value="Iniciar Sesión">
</form>

<div class="actions">
    <a href="/create-account">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/forgot-password">¿Olvidaste tu password?</a>
</div>