<h1>Reservering gegevens verwijderen</h1>
<p>Reservering van bezoeker <?php echo $booking["full_name"] ?> verwijderen.</p>
<a class="btn btn-danger" href="<?php echo URL ?>bookings/destroy/<?php echo $booking["id"] ?>" onClick="javascript: return confirm('Zeker weten?');">Verwijder!</a>
