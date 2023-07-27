<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo ?></h2>
    <p class="auth__texto">Ingresa tu nuevo Password</p>

    <?php
        require_once __DIR__ . '/../templates/alertas.php'
    ?>
<?php if($token_valido)  { ?>
    <form method="POST" class="formulario">

        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password</label>
            <input type="password" class="formulario__input" placeholder="Tu Nuevo Password" id="password" name="password">
        </div>



        <input type="submit" class="formulario__submit" value="Guardar Password">

        <div class="acciones">
            <a href="/login" class="acciones__enlace">¿Ya tienes una cuenta Inicia Sesión</a>
            <a href="/registro" class="acciones__enlace">¿Aún no tienes cuenta? Crear Una</a>
        </div>
    </form>
 <?php } ?>
</main>