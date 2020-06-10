<h1>Bezoeker gegevens verwijderen</h1>
<p>Gegevens van <?php echo $user["first_name"] ?> verwijderen.</p>
<a class="btn btn-danger" href="<?php echo URL ?>users/destroy/<?php echo $user["id"] ?>" onClick="javascript: return confirm('Zeker weten?');">Verwijder!</a>
