<?php
if (isset($_POST['enregistre']))
    ajoutRoom();
?>
<!-- The Modal -->
<div class="modal" id="myModal45">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ajout Rooms</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($ajouts)) :
                        if ($ajouts) :
                    ?>
                            <div class="annonce">
                                <p class="erreur"><?php echo $ajouts; ?></p>
                            </div>
                        <?php
                        else :
                        ?>
                            <div class="annonce">
                                <p class="mety">Bien Modifier</p>
                            </div>
                    <?php
                        endif;
                    endif;
                    ?>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label"><u>Image:</u></label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label"><u>Ville:</u></label>
                        <input name="villeajout" type="text" class="form-control" id="prx">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label"><u>Pays:</u></label>
                        <input name="paysajout" type="text" class="form-control" id="prx">
                    </div>
                    <button type="submit" class="btn btn-primary" name="enregistre">Enregistrer</button>
                </form>
            </div>



        </div>
    </div>
</div>