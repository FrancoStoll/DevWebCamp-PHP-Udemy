<main class="agenda">
    <h2 class="agenda__heading">Workshops & Conferencias</h2>
    <p class="agenda__descripcion">Talleres y Conferencias dictados por expertos en Desarrollo Web</p>

    <div class="eventos">
        <h3 <?php aos_animation(); ?> class="eventos__heading">&lt;Conferencias /></h3>
        <p class="eventos__fecha">Viernes 29 de Septiembre</p>

        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['conferencias_v'] as $evento) { ?>

                    <?php include __DIR__ . '../../templates/evento.php' ?>


                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>


        <p class="eventos__fecha">Sabado 30 de Septiembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['conferencias_s'] as $evento) { ?>

                    <?php include __DIR__ . '../../templates/evento.php' ?>


                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

        <div class="eventos__listado">

        </div>
    </div>

    <div class="eventos eventos--workshops">
        <h3 <?php aos_animation(); ?> class="eventos__heading">&lt;Workshops /></h3>
        <p class="eventos__fecha">Viernes 29 de Septiembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['workshops_v'] as $evento) { ?>

                    <?php include __DIR__ . '../../templates/evento.php' ?>


                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
        <div class="eventos__listado">

        </div>


        <p class="eventos__fecha">Sabado 30 de Septiembre</p>
        <div class="eventos__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach ($eventos['workshops_s'] as $evento) { ?>

                    <?php include __DIR__ . '../../templates/evento.php' ?>


                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
        <div class="eventos__listado">

        </div>
    </div>
</main>