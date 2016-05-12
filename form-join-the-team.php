<form action="/sendmail-unete.php" method="post" id="joinForm">
	
	<div class="form-group"><input type="text" data-validate="required" placeholder="Escribe tu nombre completo" name="nombre" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="Escribe tu correo" name="email" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="¿Cuál es tu escolaridad?" name="escolaridad" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="Dirección" name="direccion" class="form-control"></div>
	<div class="form-group"><input type="text" data-validate="required" placeholder="Cuál es tu teléfono" name="telefono" class="form-control"></div>
	<div class="form-group"><input type="file" name="cv" class="form-control"></div>
	<p>Todos los campos son obligatorios.</p>
	<div class="submit-line"><input type="submit" value="Enviar" class="btn btn-primary"></div>
	<div class="sent_mail_alert">GRACIAS! <br> Tus mensaje se ha enviado con éxito. Nos pondremos en contacto contigo a la brevedad.</div>
</form>