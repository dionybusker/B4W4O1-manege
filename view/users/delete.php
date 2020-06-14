<h1 class="col-12">Ruiter gegevens verwijderen</h1>
<p class="col-12">Gegevens van <?php echo $user["first_name"] ?> verwijderen.</p>
<a class="btn btn-danger text-white rounded-0" href="<?php echo URL ?>users/destroy/<?php echo $user["id"] ?>">Verwijder!</a>
<a class="btn btn-custom-blue text-white rounded-0" href="<?php echo URL ?>users/index">Nee, toch niet!</a>