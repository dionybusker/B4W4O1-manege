<a class="btn btn-custom-blue text-white rounded-0" href="<?php echo URL ?>users/create">Ruiter registreren</a>

<div class="row col-12 justify-content-center">
    <?php foreach ($users as $user) { ?>
        <ul class="col-3 card navbar-nav m-2 p-0">
            <li>Voornaam: <?php echo $user["first_name"] ?></li>
            <li>Volledige naam: <?php echo $user["full_name"] ?></li>
            <li>Adres: <?php echo $user["address"] ?></li>
            <li>Tel. nummer: +31 <?php echo $user["phonenumber"] ?> </li> <br>
            <li class="row m-0 p-0">
                <a class="col-6 m-0 p-0 btn btn-info rounded-0" href="<?php echo URL ?>users/edit/<?php echo $user["id"] ?>">Gegevens bewerken</a>
                <a class="col-6 m-0 p-0 btn btn-danger rounded-0" href="<?php echo URL ?>users/delete/<?php echo $user["id"] ?>">Gegevens verwijderen</a>
            </li>

        </ul>
    <?php } ?>
</div>
