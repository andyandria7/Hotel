<!-- story -->
<section class="story">
    <div id="service" class="container py-5">
        <h2 class="text-center mb-5 mt-5">
            <div class="quality">
                <h1>OUR STORY</h1>
                <h1>OUR STORY</h1>
            </div>
        </h2>
    </div>
    <div class="row my-5 ">
        <div class="col-lg-6  col-sm-12">
            <img src="../assets/image/costa-adeje-gran-hotel-4k-hd-computer-desktop-wallpaper-preview.jpg" alt="" class="img-fluid w-100 mx-5 mx-md-3">
        </div>
        <div class="col-lg-6 col-sm-12  mt-5">
            <div class="d-flex justify-content-center align-items-center gap-3 ">
                <div>
                    <img src="../assets/image/stars.svg" alt="bagde" class="badge1">
                </div>
                <div class="w-50  ">
                    <h3 class="text-decoration-underline">L'histoire de la vie</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis voluptas veritatis
                        dolor cum excepturi, alias magnam ducimus eveniet debitis beatae vitae adipisci quo
                        porro pariatur sit quos. Fuga, incidunt deserunt! Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Quaerat incidunt cumque voluptates? Nisi adipisci rerum quibusdam!
                        Accusantium asperiores ex!</p>
                    <div class="text-center ">
                        <?php
                        if (isset($_SESSION['username'])) :
                        ?>
                            <a href="#" class="btn btn-secondary button1">
                                <span class="text text-1">Lire plus</span>

                                <span class="text text-2 text-white " aria-hidden="true">Lire plus</span>
                            </a>
                        <?php else : ?>

                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>