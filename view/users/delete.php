<div class="container">
    <h1>Ruiter gegevens verwijderen</h1>
    <p>
        U staat op het punt de gegevens van de ruiter <span class="font-weight-bold"> <?php echo $user["full_name"] ?> </span> te verwijderen. <br>
        Weet u het zeker?
    </p>

    <a class="my-2 btn btn-secondary rounded-0" href="<?php echo URL ?>users/index">Annuleren!</a>
    <a class="my-2 btn btn-danger rounded-0" href="<?php echo URL ?>users/destroy/<?php echo $user["id"] ?>" onClick="javascript: return confirm('Zeker weten?');">Verwijderen!</a>

</div>
