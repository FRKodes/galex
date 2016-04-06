<form action="/sendmail-unete.php" method="post" id="joinForm">

	<!-- <div class="form-group">
		<div class="styled-select">
			<select name="puesto" id="puesto" data-validate="required">
				<option value="">¿Cuál es el puesto de tu interés?</option>
				<option value="X">X</option>
				<option value="Y">Y</option>
			</select>
		</div>
	</div> -->
	
	<div class="form-group"><input type="text" data-validate="required" placeholder="Escribe tu nombre completo" name="nombre" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="Escribe tu correo" name="email" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="¿Cuál es tu escolaridad?" name="escolaridad" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="Dirección" name="direccion" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="Cuál es tu teléfono" name="telefono" class="form-control"></div>
	<div class="form-group"><input type="file" name="cv" class="form-control"></div>
	<p>Todos los campos son obligatorios.</p>
	<div class="submit-line"><input type="submit" value="Enviar" class="btn btn-primary"></div>
</form>