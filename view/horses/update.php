<h1>Paard gegevens wijzigen</h1>

<form name="update" action="<?php echo URL ?>horses/update/<?php echo $horse["id"] ?>" method="POST">
    <label for="name">Naam</label>
	<input id="name" name="name" type="text" value="<?php echo $horse["name"] ?>"> <br>

	<label for="age">Leeftijd</label>
	<input id="age" name="age" type="text" value="<?php echo $horse["age"] ?>"> <br>

    <label for="breed">Ras</label>
	<input id="breed" name="breed" type="text" value="<?php echo $horse["breed"] ?>"> <br>

    <label for="height">Schofthoogte</label>
	<input id="height" name="height" type="text" value="<?php echo $horse["height"] ?>"> <br>

    <label for="showjumping">Geschikt voor springsport (ja/nee)</label>
	<input id="showjumping" name="showjumping" type="text" value="<?php echo $horse["show_jumping"] ?>"> <br>

	<input class="btn btn-info" type="submit" name="update" value="Update">
</form>