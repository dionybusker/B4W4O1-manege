<h1>Paard gegevens wijzigen</h1>

<form class="col-12" name="update" action="<?php echo URL ?>horses/update/<?php echo $horse["id"] ?>" method="POST">
    <label class="col-5" for="name">Naam</label>
	<input class="col-5" id="name" name="name" type="text" value="<?php echo $horse["name"] ?>"> <br>

	<label class="col-5" for="age">Leeftijd</label>
	<input class="col-5" id="age" name="age" type="text" value="<?php echo $horse["age"] ?>"> <br>

    <label class="col-5" for="breed">Ras</label>
	<select class="col-5" name="breed" id="breed">
		<?php foreach ($breeds as $breed) { ?>
			<option value="<?php echo $breed["id"] ?>" <?php if ($breed["id"] == $horse["breed_id"]) { echo "selected"; } ?>>
				<?php echo $breed["breed"] ?>
			</option>
		<?php } ?>
	</select>

	<!-- <input id="breed" name="breed" type="text" value="<?php echo $horse["breed"] ?>"> <br> -->

    <label class="col-5" for="height">Schofthoogte</label>
	<input class="col-5" id="height" name="height" type="text" value="<?php echo $horse["height"] ?>"> <br>

    <label class="col-5" for="showjumping">Geschikt voor springsport (ja/nee)</label>
	<input class="col-5" id="showjumping" name="showjumping" type="text" value="<?php echo $horse["show_jumping"] ?>"> <br>

	<input class="btn btn-info" type="submit" name="update" value="Update">
</form>