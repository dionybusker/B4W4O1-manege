<div class="container">
	<h1>Paard gegevens wijzigen</h1>

	<form class="my-2 p-0" name="update" action="<?php echo URL ?>horses/update/<?php echo $horse["id"] ?>" method="POST">
		<label class="col-5">Naam</label>
		<input class="col-5" id="name" name="name" type="text" value="<?php echo $horse["name"] ?>"> <br>

		<label class="col-5">Leeftijd</label>
		<input class="col-5" id="age" name="age" type="text" value="<?php echo $horse["age"] ?>"> <br>

		<label class="col-5" for="breed">Ras *</label>
		<select class="col-5" name="breed" id="breed">
			<?php foreach ($breeds as $breed) { ?>
				<option value="<?php echo $breed["id"] ?>" <?php if ($breed["id"] == $horse["breed_id"]) { echo "selected"; } ?>>
					<?php echo $breed["breed"] ?>
				</option>
			<?php } ?>
		</select>

		<label class="col-5">Schofthoogte</label>
		<input class="col-5" id="height" name="height" type="text" value="<?php echo $horse["height"] ?>"> <br>

		<label class="col-5">Geschikt voor springsport (ja/nee)</label>
		<input class="col-5" id="showjumping" name="showjumping" type="text" value="<?php echo $horse["show_jumping"] ?>"> <br>

		<input class="col-5 m-2 btn btn-custom-blue text-white rounded-0" type="submit" name="update" value="Updaten!">
	</form>

	<p class="col-12"><span class="font-weight-bold">*</span> Op de vraag wat het verschil tussen een paard en een pony precies maakt is het antwoord van de manegehouder: <br>
	"<span class="font-italic">Of een dier een paard of pony is, is bij onze manege afhankelijk van de gemiddelde volwassen schofthoogte die hoort bij het ras waartoe het dier behoort. Tot 147,5 cm gaat het om een pony ras. Ik weet dat dit door ruiters die zich bezighouden met de springsport per individueel dier wordt bekeken, maar dat is voor het fokken simpelweg niet praktisch. Er bestaat een lijst waarop per ras de gemiddelde schofthoogte staat vermeld.</span>"
	</p>
</div>
