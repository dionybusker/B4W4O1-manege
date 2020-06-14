<div class="container">
    <h1>Paard gegevens verwijderen</h1>
    <p>
        U staat op het punt de gegevens van het paard <span class="font-weight-bold"> <?php echo $horse["name"] ?> </span> te verwijderen. <br>
        Weet u het zeker?
    </p>

    <a class="my-2 btn btn-secondary text-white rounded-0" href="<?php echo URL ?>horses/index">Annuleren!</a>
    <a class="my-2 btn btn-danger text-white rounded-0" href="<?php echo URL ?>horses/destroy/<?php echo $horse["id"] ?>" onClick="javascript: return confirm('Zeker weten?');">Verwijderen!</a>
</div>