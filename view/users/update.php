<div class="container">
	<h1>Ruiter gegevens wijzigen</h1>

	<form class="my-2 p-0" name="update" action="<?php echo URL ?>users/update/<?php echo $user["id"] ?>" method="POST">
		<label class="col-5" for="name">Voornaam</label>
		<input class="col-5" id="name" name="name" type="text" value="<?php echo $user["first_name"] ?>"> <br>

		<label class="col-5" for="fullname">Volledige naam</label>
		<input class="col-5" id="fullname" name="fullname" type="text" value="<?php echo $user["full_name"] ?>"> <br>

		<label class="col-5" for="address">Adres</label>
		<input class="col-5" id="address" name="address" type="text" value="<?php echo $user["address"] ?>"> <br>

		<label class="col-5" for="phone">Tel. nummer</label>
		<input class="col-5" id="phone" name="phone" type="text" value="<?php echo $user["phonenumber"] ?>"> <br>

		<input class="col-5 m-2 btn btn-custom-blue text-white rounded-0" type="submit" name="update" value="Updaten!">
	</form>
</div>