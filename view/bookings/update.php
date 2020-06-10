<h1>Reservering gegevens wijzigen</h1>

<form class="col-12" name="update" action="<?php echo URL ?>bookings/update/<?php echo $booking["id"] ?>" method="POST">
    <label class="col-5" for="user">Bezoeker</label>
    <select class="col-5" name="user" id="user">
        <?php foreach ($users as $user) { ?>
            <option value="<?php echo $user["id"] ?>" <?php if ($user["id"] == $booking["user_id"]) { echo "selected"; } ?>>
                <?php echo $user["first_name"] ?>
            </option>
        <?php } ?>
    </select>

    <label class="col-5" for="horse">Paard</label>
    <select class="col-5" name="horse" id="horse">
        <?php foreach ($horses as $horse) { ?>
            <option value="<?php echo $horse["id"] ?>" <?php if ($horse["id"] == $booking["horse_id"]) { echo "selected"; } ?>>
                <?php echo $horse["name"] ?>, <?php echo $horse["breed"] ?>
            </option>
        <?php } ?>
    </select>

    <label class="col-5" for="time">Welke tijd?</label>
    <input class="col-2" type="time" name="time" value="<?php echo $booking["time"] ?>">
    <input class="col-3" type="date" name="date" value="<?php echo $booking["date"] ?>">

	<input class="btn btn-info" type="submit" name="update" value="Update">
</form>
