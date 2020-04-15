
<div class="container">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<?php echo $ok;?>
		<input type="text" name="name"  id="fname" placeholder="Il tuo nome" required>

		<input type="email" name="mit" class="ins" id="fname" placeholder="Es:tuonome@mail.com" required>
		
		<input type="number" name="ogg" class="ins" id="fname" placeholder="Cellulare" required>

		<textarea id="area" name="corpo"  placeholder="Scrivi qui il tuo messaggio" required ></textarea>

		<input type="submit" value="Invia">
	</form>
</div>

