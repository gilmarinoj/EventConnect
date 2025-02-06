<?php
include_once __DIR__ . '../../paginas/conferencias.php';
?>

<section class="resumen">
    <div class="resumen__grid">
        <div class="resumen__bloque" data-aos="<?php aos_animacion(); ?>">
            <p class="resumen__texto resumen__texto--numero"><?php echo $ponentes_total; ?></p>
            <p class="resumen__texto">Speakers</p>
        </div>

        <div class="resumen__bloque" data-aos="<?php aos_animacion(); ?>">
            <p class="resumen__texto resumen__texto--numero"><?php echo $conferencias_total; ?></p>
            <p class="resumen__texto">Conferencias</p>
        </div>

        <div class="resumen__bloque" data-aos="<?php aos_animacion(); ?>">
            <p class="resumen__texto resumen__texto--numero"><?php echo $workshops_total; ?></p>
            <p class="resumen__texto">Workshops</p>
        </div>

        <div class="resumen__bloque" data-aos="<?php aos_animacion(); ?>">
            <p class="resumen__texto resumen__texto--numero">50</p>
            <p class="resumen__texto">Asistentes</p>
        </div>
    </div>
</section>

<section class="ponentes">
    <h2 class="ponentes__heading">Ponentes</h2>
    <p class="ponentes__descripcion">Conoce a los expertos de EventConnect</p>

    <div class="ponentes__grid">
        <?php foreach ($ponentes as $ponente) { ?>
            <div class="ponente" data-aos="<?php aos_animacion(); ?>">
                <picture>
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.webp" type="image/webp">
                    <source srcset="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" type="image/png">
                    <img class="ponente__imagen" loading="lazy" width="200" height="300" src="<?php echo $_ENV['HOST'] . '/img/speakers/' . $ponente->imagen; ?>.png" alt="Imagen Ponente">
                </picture>

                <div class="ponente__informacion">
                    <h4 class="ponente__nombre">
                        <?php echo $ponente->nombre . ' ' . $ponente->apellido; ?>
                    </h4>

                    <p class="ponente__ubicacion">
                        <?php echo $ponente->ciudad . ', ' . $ponente->pais; ?>
                    </p>

                    <nav class="ponente-sociales">
                        <?php
                        $redes = json_decode($ponente->redes);
                        ?>

                        <?php if (!empty($redes->facebook)) { ?>

                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->facebook; ?>">
                                <span class="ponente-sociales__ocultar">Facebook</span>
                            </a>

                        <?php } ?>

                        <?php if (!empty($redes->twitter)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->twitter; ?>">
                                <span class="ponente-sociales__ocultar">Twitter</span>
                            </a>

                        <?php } ?>

                        <?php if (!empty($redes->youtube)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->youtube; ?>">
                                <span class="ponente-sociales__ocultar">YouTube</span>
                            </a>

                        <?php } ?>

                        <?php if (!empty($redes->instagram)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->instagram; ?>">
                                <span class="ponente-sociales__ocultar">Instagram</span>
                            </a>
                        <?php } ?>

                        <?php if (!empty($redes->tiktok)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->tiktok; ?>">
                                <span class="ponente-sociales__ocultar">Tiktok</span>
                            </a>
                        <?php } ?>

                        <?php if (!empty($redes->github)) { ?>
                            <a class="ponente-sociales__enlace" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->github; ?>">
                                <span class="ponente-sociales__ocultar">GitHub</span>
                            </a>
                        <?php } ?>

                    </nav>

                    <ul class="ponente__listado-tags">
                        <?php
                        $tags = explode(',', $ponente->tags);
                        foreach ($tags as $tag) {
                        ?>
                            <li class="ponente__tags"><?php echo $tag; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<div id="mapa" class="mapa"></div>

<section class="boletos">
    <h2 class="boletos__heading">Boletos y Precios</h2>
    <p class="boletos__descripcion">Precios para EventConnect</p>

    <div class="boletos__grid" data-aos="<?php aos_animacion(); ?>">
        <div class="boleto boleto--presencial">
            <h4 class="boleto__logo">&#60;EventConnect /></h4>
            <p class="boleto__plan">Presencial</p>
            <p class="boleto__precio">99.99$</p>
        </div>

        <div class="boleto boleto--virtual" data-aos="<?php aos_animacion(); ?>">
            <h4 class="boleto__logo">&#60;EventConnect /></h4>
            <p class="boleto__plan">Virtual</p>
            <p class="boleto__precio">49.99$</p>
        </div>

        <div class="boleto boleto--gratis" data-aos="<?php aos_animacion(); ?>">
            <h4 class="boleto__logo">&#60;EventConnect /></h4>
            <p class="boleto__plan">Gratis</p>
            <p class="boleto__precio">0$</p>
        </div>
    </div>

    <div class="boleto__enlace-contenedor">
        <a href="/pases" class="boleto__enlace">Ver Pases</a>
    </div>
</section>