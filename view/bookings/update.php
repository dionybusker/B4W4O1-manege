<div class="container">
    <h1>Reservering gegevens wijzigen</h1>

    <form class="my-2 p-0" name="update" action="<?php echo URL ?>bookings/update/<?php echo $booking["id"] ?>" method="POST">
        <label class="col-5">Bezoeker</label>
        <select class="col-5" name="user" id="user">
            <?php foreach ($users as $user) { ?>
                <option value="<?php echo $user["id"] ?>" <?php if ($user["id"] == $booking["user_id"]) { echo "selected"; } ?>>
                    <?php echo $user["first_name"] ?>
                </option>
            <?php } ?>
        </select>

        <label class="col-5">Paard</label>
        <select class="col-5" name="horse" id="horse">
            <?php foreach ($horses as $horse) { ?>
                <option value="<?php echo $horse["id"] ?>" <?php if ($horse["id"] == $booking["horse_id"]) { echo "selected"; } ?>>
                    <?php echo $horse["name"] ?>, <?php echo $horse["breed"] ?>
                </option>
            <?php } ?>
        </select>

        <label class="col-5">Starttijd</label>
        <input class="col-5" type="time" name="starttime" value="<?php echo $booking["starttime"] ?>"> uur

        <label class="col-5">Eindtijd</label>
        <input class="col-5" type="time" name="endtime" value="<?php echo $booking["endtime"] ?>"> uur

        <label class="col-5"></label>
        <input class="col-5" type="date" name="date" value="<?php echo $booking["date"] ?>">

        <input class="col-5 m-2 btn btn-custom-blue text-white rounded-0" type="submit" name="update" value="Updaten!">
    </form>

</div>
