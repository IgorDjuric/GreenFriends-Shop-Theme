<?php get_header();?>


<div class="main">
    <div class="row">
        <div id="gf-image-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#gf-image-slider" data-slide-to="0" class="active"></li>
                <li data-target="#gf-image-slider" data-slide-to="1"></li>
                <li data-target="#gf-image-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/2000x500" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/2000x500" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/2000x500" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#gf-image-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#gf-image-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>







<?php get_footer();?>
