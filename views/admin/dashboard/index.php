<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<main class="bloques">
    <div class="bloques__grid">
        <div class="bloque">
            <h3 class="bloque__headin">Ultimos Registros</h3>

            <?php foreach ($registros as $registro) { ?>
                <div class="bloque__coontenido">
                    <div class="bloque__texto">
                        <?php echo $registro->usuario->nombre . ' ' . $registro->usuario->nombre; ?>
                    </div>
                </div>



            <?php } ?>
        </div>
        <div class="bloque">
            <h3 class="bloque__headin">Ingresos</h3>
            <p class="bloque__texto--cantidad"><?php echo $ingresos ?></p>

        </div>

        <div class="bloque">
            <h3 class="bloque__headin">Eventos con menos lugares</h3>
            <?php foreach ($menos_disponibles as $evento) { ?>
                <div class="bloque__coontenido">
                    <div class="bloque__texto">
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles';?>
                    </div>
                </div>

            <?php } ?>

        </div>

        <div class="bloque">
            <h3 class="bloque__headin">Eventos con más lugares</h3>
            <?php foreach ($mas_disponibles as $evento) { ?>
                <div class="bloque__coontenido">
                    <div class="bloque__texto">
                        <?php echo $evento->nombre . " - " . $evento->disponibles . ' Disponibles';?>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</main>