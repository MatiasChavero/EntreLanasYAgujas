<?php require 'header.php'; ?>
	<section class="contact">
		<div class="container">
			<form class="form-filter" method="POST">
				<div class="form-filter-general">
					<div class="form-filter-description">
						<input type="text" name="name" placeholder="Nombre" required>
					</div>
					<div class="form-filter-description">
						<input type="text" name="surname" placeholder="Apellido" required>
					</div>
				</div>
				<div class="form-filter-description-2">
					<input type="email" name="mail" placeholder="Mail" required>
				</div>
				<div class="form-filter-description-3">
					<textarea id="message" name="msg" placeholder="Mensaje"></textarea>
				</div>
				<div class="form-filter-button">
					<button type="submit" id="button-first" name="enviar">Enviar</button>
				</div>
			</form>
			<?php
				include("contacto-check.php")
			?>
	</section>
<?php require 'footer.php'; ?>