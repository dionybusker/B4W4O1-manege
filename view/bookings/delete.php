<div class="container">
    <h1>Reservering gegevens verwijderen</h1>
    <p>
        U staat op het punt de reservering van <span class="font-weight-bold"> <?php echo $booking["full_name"] ?> </span> te verwijderen. <br>
        Weet u het zeker?
    </p>

    <a class="my-2 btn btn-secondary text-white rounded-0" href="<?php echo URL ?>bookings/index">Annuleren!</a>
    <a class="my-2 btn btn-danger text-white rounded-0" href="<?php echo URL ?>bookings/destroy/<?php echo $booking["id"] ?>" onClick="javascript: return confirm('Zeker weten?');">Verwijderen!</a>

</div>
