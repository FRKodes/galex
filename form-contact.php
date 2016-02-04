<form action="sendmail-contacto.php" method="post" id="contactForm">
	<div class="form-group"><input type="text" data-validate="required" placeholder="Escribe tu nombre completo" name="nombre" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required|email" placeholder="Escribe tu correo electrónico" name="email" class="form-control"></div>
	<div class="form-group">
		<div class="styled-select">
			<select name="motivo" id="motivo" data-validate="required">
				<option value="">¿Cuál es el motivo de tu mensaje?</option>
				<option value="queja">Queja o sugerencia</option>
				<option value="vacante">Quiero aplicar a una vacante de empleo</option>
			</select>
		</div>
	</div>
	<div class="form-group"><textarea name="mensaje" id="mensaje" data-validate="required" placeholder="Mensaje" class="form-control" cols="30" rows="10"></textarea></div>
	<p>Todos los campos son obligatorios.</p>
	<div class="submit-line"><input type="submit" value="Enviar" class="btn btn-primary"></div>
</form>