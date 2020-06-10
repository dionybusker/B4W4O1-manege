<h2>Reservering maken</h2>

<form class="col-12" action="<?php echo URL ?>bookings/store" method="POST">
    <label class="col-5" for="user">Bezoeker</label>
    <select class="col-5" name="user" id="user">
        <?php foreach ($users as $user) { ?>
            <option value="<?php echo $user["id"] ?>"><?php echo $user["first_name"] ?></option>
        <?php } ?>
    </select>

    <label class="col-5" for="horse">Paard</label>
    <select class="col-5" name="horse" id="horse">
        <?php foreach ($horses as $horse) { ?>
            <option value="<?php echo $horse["id"] ?>"><?php echo $horse["name"] ?>, <?php echo $horse["breed"] ?></option>
        <?php } ?>
    </select>

    <label class="col-5" for="time">Welke tijd?</label>
    <input class="col-2" type="time" name="time">
    <input class="col-3" type="date" name="date">

    <input class="col-5" type="submit" value="Maak reservering!">


</form>