<h2 class="pagina__heading"><?php echo $titulo ?></h2>
<p class="pagina__descripcion">Elige hasta 5 eventos para asistir de forma presencial.</p>


<div class="eventos-registros">

    <main class="eventos-registros__listado">
        <h3 <?php aos_animation(); ?> class="eventos-registros__heading--conferencias">&lt;Conferencias /></h3>
        <p class="eventos-registros__fecha">Viernes 29 de Septiembre</p>

        <div class="eventos-registros__grid">
            <?php foreach ($eventos['conferencias_v'] as $evento) { ?>

                <?php include __DIR__ . '/evento.php' ?>

            <?php } ?>
        </div>
        <p class="eventos-registros__fecha">Sabado 30 de Septiembre</p>
        <div class="eventos-registros__grid">
            <?php foreach ($eventos['conferencias_s'] as $evento) { ?>

                <?php include __DIR__ . '/evento.php' ?>

            <?php } ?>
        </div>


        <h3 <?php aos_animation(); ?> class="eventos-registros__heading--workshops">&lt;Workshops /></h3>
        <p class="eventos-registros__fecha">Viernes 29 de Septiembre</p>

        <div class="eventos-registros__grid eventos--workshops">
            <?php foreach ($eventos['workshops_v'] as $evento) { ?>

                <?php include __DIR__ . '/evento.php' ?>

            <?php } ?>
        </div>
        <p class="eventos-registros__fecha">Sabado 30 de Septiembre</p>
        <div class="eventos-registros__grid eventos--workshops">
            <?php foreach ($eventos['workshops_s'] as $evento) { ?>

                <?php include __DIR__ . '/evento.php' ?>

            <?php } ?>
        </div>

    </main>

    <aside class="registro">
                <h2 class="registro__heading">Tu Registro</h2>
                <div id="registro-resumen" class="registro__resumen"></div>
                <div class="registro__regalo">
                    <label for="regalo" class="registro__label">Selecciona un regalo</label>
                    <select id="regalo" class="registro__select">
                        <option value="">-- Selecciona tu regalo --</option>
                        <?php foreach($regalos as $regalo) { ?>

                            <option value="<?php echo $regalo->id; ?>"><?php echo $regalo->nombre; ?></option>

                       <?php  } ?>
                    </select>
                </div>
                <form  id="registro" class="formulario">
                    <div class="formulario__campo">
                        <input type="submit" value="Registrarme" class="formulario__submit formulario__submit--full">
                    </div>
                </form>
    </aside>
</div>