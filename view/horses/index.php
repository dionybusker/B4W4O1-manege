<div class="col-3 m-2 p-0">
    <a class="col-12 btn btn-custom-blue text-white rounded-0" href="<?php echo URL ?>horses/create">Paard toevoegen</a>
</div>

<div class="row col-9 justify-content-center">
    <table class="table">
        <tr>
            <th></th>
            <th>Naam</th>
            <th>Leeftijd</th>
            <th>Ras</th>
            <th>Schofthoogte</th>
            <th>Springsport</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($horses as $horse) { ?>
            <tr>
                <td>
                    <a href="<?php echo URL ?>public/img/<?php echo $horse["img"] ?>" target="_blank" title="<?php echo $horse["breed"] ?>">
                    <img class="img-fluid" src="<?php echo URL ?>public/img/<?php echo $horse["img"] ?>" alt="<?php echo $horse["breed"] ?>">

                    </a>
                </td>
                <td><?php echo $horse["name"] ?></td>
                <td><?php echo $horse["age"] ?></td>
                <td><?php echo $horse["breed"] ?></td>
                <td><?php echo $horse["height"] ?> cm</td>
                <td><?php echo $horse["show_jumping"] ?></td>
                <td>
                    <a class="p-1 btn btn-secondary rounded-0" href="<?php echo URL ?>horses/edit/<?php echo $horse["id"] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="p-1 btn btn-danger rounded-0" href="<?php echo URL ?>horses/delete/<?php echo $horse["id"] ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

        <?php } ?>
    </table>

</div>
