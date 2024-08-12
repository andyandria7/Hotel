<!-- slide -->
<main class="slider">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-interval="1000">

        <!-- Indicators/dots -->
        <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div> -->

        <!-- The slideshow/carousel -->
        <div class="carousel-inner hauteur">
        <div class="background-wrap">
                <video id="background-video" loop muted autoplay>
                    <source src="../assets/Music/Hotel Cinematic  - Boutique Hotel Port Elizabeth - Trim.mp4" type="video/mp4">
                </video>
                <div class="overlay"></div>
            </div>
            <?php foreach ($affichage as $key => $aff) { ?>
                <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                    <div class="carousel-caption d-md-block resp">
                        <h5><?php echo $aff['titre'] ?></h5>
                        <p><?php echo $aff['description'] ?></p>
                        <?php
                        if (isset($_SESSION['username'])) :
                        ?>
                            <a href="#" class="btn btn-secondary button1">
                                <span class="text text-1">Plus d'info</span>
                                <span class="text text-2 text-white" aria-hidden="true">Plus d'info</span>
                            </a>
                        <?php else : ?>
                            
                        <?php endif ?>
                    </div>
                </div>
            <?php } ?>
        </div>


        <!-- Left and right controls/icons -->
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button> -->
    </div>
</main>