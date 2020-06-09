<a class="btn btn-outline-dark" href="<?php echo URL ?>horses/create">Paard toevoegen</a>

<div class="row col-12 justify-content-center">
    <?php foreach ($horses as $horse) { ?>
        <ul class="col-3 card navbar-nav m-2 p-0">
            <li>Naam: <?php echo $horse["name"] ?></li>
            <li>Leeftijd: <?php echo $horse["age"] ?></li>
            <li>Ras: <?php echo $horse["breed"] ?></li>
            <li>Schofthoogte: <?php echo $horse["height"] ?> cm</li>
            <li>Geschikt voor springsport: <?php echo $horse["show_jumping"] ?></li> <br>
            <li class="row m-0 p-0">
                <a class="col-6 m-0 p-0 btn btn-info rounded-0" href="<?php echo URL ?>horses/edit/<?php echo $horse["id"] ?>">Gegevens bewerken</a>
                <a class="col-6 m-0 p-0 btn btn-danger rounded-0" href="<?php echo URL ?>horses/delete/<?php echo $horse["id"] ?>">Gegevens verwijderen</a>
            </li>

        </ul>
    <?php } ?>
</div>
