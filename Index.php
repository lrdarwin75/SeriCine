<?php 
	include_once "Views/Templates/Header.php";
    require_once("Config/Config.php");
 ?>

<!-- Contenido -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo FOTOS; ?>Plataformas.jpg" class="d-block w-100" alt="" />  
                <div class="carousel-caption d-none d-md-block">
                    <h5>las mejores plataformas</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo FOTOS; ?>Peliculas.jpg" class="d-block w-100" alt="" />  
                <div class="carousel-caption d-none d-md-block">
                    <h5>Las peliculas galardonadas</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo FOTOS; ?>Series.png" class="d-block w-100" alt="" />  
                <div class="carousel-caption d-none d-md-block">
                    <h5>las series impactantes</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!-- Fin Contenido -->

<?php
    include_once "Views/Templates/Footer.php";
?>