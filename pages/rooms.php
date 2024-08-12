<!-- rooms -->
<section class="room" id="rooms">
    <div class="container text-center rooms ">
        <h1>OUR ROOMS</h1>
    </div>
    <div class="article row ">
        <div class="col-md-12 col-lg-3  animahaut">
            <a href="#">
                <div class="root">
                    <img src="../assets/image/ff5489f401d008f38a1eb13960075380.png" alt="">
                    <div class="noir">
                        <h5 class="mb-2">Madagascar</h5>
                        <p>Antananarivo</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-12 col-lg-3 animahaut1">
            <a href="#">
                <div class="root">
                    <img src="../assets/image/hotel_room_2-wallpaper-3840x2160.jpg" alt="">
                    <div class="noir">
                        <h5 class="mb-2">Madagascar</h5>
                        <p>Majunga</p>
                    </div>
                </div>
            </a>
            <div class="text-center br">
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
        <div class="col-md-12 col-lg-3 animahaut ">
            <a href="#">
                <div class="root">
                    <img src="../assets/image/28097-maldives-tropical-underwater-hotel-4k.jpg" alt="">
                    <div class="noir">
                        <h5 class="mb-2">Madagascar</h5>
                        <p>Tamatavy</p>
                    </div>
                </div>
            </a>

        </div>
        <!-- responsive -->
        <!-- <div class="text-center br1">
                <a href="#" class="btn btn-secondary button1">
                    <span class="text text-1">Plus d'info</span>

                    <span class="text text-2" aria-hidden="true">Plus d'info</span>
                </a>
            </div> -->
    </div>
</section>