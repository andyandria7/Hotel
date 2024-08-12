<!-- reservation -->
<section class="colorBg mt-5 ">
    <div id="service" class="container py-5">
        <h2 class="text-center mb-5 mt-5 ani">Our Service</h2>
    </div>
    <div class="container-fluid svg">
        <div class="row ">
            <div class="col-lg-6 col-md-12  ">
                <div class="d-flex gap-3 justify-content-center text-center">
                    <i class="fas fa-bell"></i>
                    <div class="w-50 ">
                        <h5>Service de chambre</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="d-flex gap-3 justify-content-center text-center">
                    <i class="fas fa-mug-hot"></i>
                    <div class="w-50 ">
                        <h5>Petit déjeuner gratuit</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-around align-items-stretch mt-3 ">
            <div class="col-lg-6 col-md-12">
                <div class="d-flex gap-3 justify-content-center text-center">
                    <i class="fas fa-car"></i>
                    <div class="w-50  ">
                        <h5>Parking gratuit</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="d-flex gap-3 justify-content-center text-center">
                    <i class="fas fa-leaf"></i>
                    <div class="w-50 ">
                        <h5>Spa gratuit</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-5">
            <?php
            if (isset($_SESSION['username'])) :
            ?>
                <a href="#" class="btn btn-secondary button1" data-bs-toggle="modal" data-bs-target="#myModal">
                    <span class="text text-1">Réservation</span>
                    <span class="text text-2 text-white " aria-hidden="true">Réservation</span>
                </a>
            <?php else : ?>

            <?php endif ?>
        </div>
    </div>
</section>

