<h1>Ruiter gegevens wijzigen</h1>

<form name="update" action="<?php echo URL ?>users/update/<?php echo $user["id"] ?>" method="POST">
    <label for="name">Voornaam</label>
	<input id="name" name="name" type="text" value="<?php echo $user["first_name"] ?>"> <br>

	<label for="fullname">Volledige naam</label>
	<input id="fullname" name="fullname" type="text" value="<?php echo $user["full_name"] ?>"> <br>

    <label for="address">Adres</label>
	<input id="address" name="address" type="text" value="<?php echo $user["address"] ?>"> <br>

    <label for="phone">Tel. nummer</label>
	<input id="phone" name="phone" type="text" value="<?php echo $user["phonenumber"] ?>"> <br>

	<input class="btn btn-info" type="submit" name="update" value="Update">
</form>