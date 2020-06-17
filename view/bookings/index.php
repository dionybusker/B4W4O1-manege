<div class="col-3 m-2 p-0">
    <a class="col-12 btn btn-custom-blue text-white rounded-0" href="<?php echo URL ?>bookings/create">Maak een reservering</a>
</div>

<div class="row col-9 justify-content-center">
    <table class="table">
        <tr>
            <th>Ruiter</th>
            <th>Paard</th>
            <th>Begintijd</th>
            <th>Eindtijd</th>
            <th>Datum</th>
            <th>Totaalprijs</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($bookings as $booking) { ?>
            <tr>
                <td><?php echo $booking["full_name"] ?></td>
                <td><?php echo $booking["name"] ?></td>
                <td><?php echo $booking["starttime"] ?> uur</td>
                <td><?php echo $booking["endtime"] ?> uur</td>
                <td><?php echo $booking["date"] ?></td>
                <td>€ <?php echo $booking["price"] ?></td>
                <td>
                    <a class="p-1 btn btn-secondary rounded-0" href="<?php echo URL ?>bookings/edit/<?php echo $booking["id"] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="p-1 btn btn-danger rounded-0" href="<?php echo URL ?>bookings/delete/<?php echo $booking["id"] ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>