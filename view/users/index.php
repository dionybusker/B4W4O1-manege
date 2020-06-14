<div class="col-3 m-2 p-0">
    <a class="col-12 btn btn-custom-blue text-white rounded-0" href="<?php echo URL ?>users/create">Ruiter registreren</a>
</div>

<div class="row col-9 justify-content-center">
    <table class="table">
        <tr>
            <th>Voornaam</th>
            <th>Volledige naam</th>
            <th>Adres</th>
            <th>Tel. nummer</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user["first_name"] ?></td>
                <td><?php echo $user["full_name"] ?></td>
                <td><?php echo $user["address"] ?></td>
                <td>+31 <?php echo $user["phonenumber"] ?></td>
                <td>
                    <a class="p-1 btn btn-secondary rounded-0" href="<?php echo URL ?>users/edit/<?php echo $user["id"] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a class="p-1 btn btn-danger rounded-0" href="<?php echo URL ?>users/delete/<?php echo $user["id"] ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
