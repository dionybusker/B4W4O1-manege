<a class="btn btn-outline-dark" href="<?php echo URL ?>bookings/create">Maak een reservering</a>

<div class="row col-12 justify-content-center">
    <?php foreach ($bookings as $booking) { ?>
        <ul class="col-3 card navbar-nav m-2 p-0">
            <li>Bezoeker: <?php echo $booking["full_name"] ?></li>
            <li>Paard: <?php echo $booking["name"] ?></li>
            <li>Tijd: <?php echo $booking["time"] ?></li>
            <li>Datum: <?php echo $booking["date"] ?></li>
            <li class="row m-0 p-0">
                <a class="col-6 m-0 p-0 btn btn-info rounded-0" href="<?php echo URL ?>bookings/edit/<?php echo $booking["id"] ?>">Gegevens bewerken</a>
                <a class="col-6 m-0 p-0 btn btn-danger rounded-0" href="<?php echo URL ?>bookings/delete/<?php echo $booking["id"] ?>">Gegevens verwijderen</a>
            </li>
        </ul>
    <?php } ?>
</div>