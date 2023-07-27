<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animation(); ?> class="devwebcamp__imagen">
            <picture>
                <source src="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source src="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">

            </picture>
        </div>

        <div <?php aos_animation(); ?>  class="devwebcamp__contenido">
            <p class="devwebcamp__texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium est possimus amet sunt, veritatis dolor neque, nobis officia, perferendis ipsum doloremque atque explicabo nisi voluptas.</p>
            
            <p  class="devwebcamp__texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium est possimus amet sunt, veritatis dolor neque, nobis officia, perferendis ipsum doloremque atque explicabo nisi voluptas.</p>
        </div>
    </div>
</main>