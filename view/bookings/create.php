<div class="container">
    <h2>Reservering maken</h2>

    <form class="my-2 p-0" action="<?php echo URL ?>bookings/store" method="POST">
        <label class="col-5" for="user">Ruiter</label>
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

        <label class="col-5" for="starttime">Starttijd</label>
        <input class="col-5" type="time" name="starttime" required> uur

        <label class="col-5" for="starttime">Eindtijd</label>
        <input class="col-5" type="time" name="endtime" required> uur

        <label class="col-5" for="date">Datum</label>
        <input class="col-5" type="date" name="date" required>

        <input class="col-5 m-2 btn btn-custom-blue text-white rounded-0" type="submit" value="Maak reservering!">


    </form>
</div>