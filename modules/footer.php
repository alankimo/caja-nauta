	</div> <!-- Close wrapper!! -->

	<div class="menu-expand">
		<span class="close-menu-expand"><i class="fas fa-times"></i></span>
		<?php include 'modules/sidebar.php'; ?>
	</div>

	<div id="formulario-campana" class="pop">
		<div class="pop__box">
			<div class="pop__head">
				<span id="close-form-campana"><i class="fas fa-times"></i></span>
				<h2>Formulario para creación de campaña</h2>
			</div>
			<div class="pop__body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-md-6">

							<label for="facturacion">Nombre de la campaña</label>
							<div class="form-field__input">
								<input id="facturacion" type="text" placeholder="Escribe aquí el nombre">
							</div>

							<label for="facturacion">Descripción de la campaña</label>
							<div class="form-field__input">
								<textarea id="cambios">Escribe una breve descripción</textarea>
							</div>

							<label for="">Tipo de descuento</label>
							<div class="form-field__input">
								<select name="publicar-como" id="publicar-como">
									<option value="">-- Selecciona un tipo de descuento</option>
									<option value="">Total</option>
									<option value="">Parcial</option>
								</select>
								<span class="form-field__icon icon--not-round"><i class="fas fa-chevron-down"></i></span>
							</div>

							<label for="facturacion">Catidad del descuento</label>
							<div class="form-field__input">
								<input id="facturacion" type="text" placeholder="Escribe la cantidad de descuento">
							</div>

						</div>
						<div class="col-xs-12 col-md-6">
							
							<label for="">Tipo</label>
							<div class="form-field__input">
								<select name="publicar-como" id="publicar-como">
									<option value="">-- Selecciona un tipo</option>
									<option value="">Automatica</option>
									<option value="">Manual</option>
								</select>
								<span class="form-field__icon icon--not-round"><i class="fas fa-chevron-down"></i></span>
							</div>

							<label for="">Medios</label>
							<div class="article__toggle">
								<div class="row">
									<div class="col-xs-12 col-md-7">
										<span class="toggle-label">Facebook</span>
									</div>
									<div class="col-xs-12 col-md-5">
										<div class="input__toggle" data-pos="pos-facebook" data-pos-state="deactive">
											<span id="pos-facebook" class="deactive">No</span>
											<input type="checkbox">
										</div>
									</div>
								</div>
							</div>

							<div class="article__toggle">
								<div class="row">
									<div class="col-xs-12 col-md-7">
										<span class="toggle-label">Google Adwords</span>
									</div>
									<div class="col-xs-12 col-md-5">
										<div class="input__toggle" data-pos="pos-google" data-pos-state="active">
											<span id="pos-google" class="active">Si</span>
											<input type="checkbox">
										</div>
									</div>
								</div>
							</div>

							<div class="article__toggle">
								<div class="row">
									<div class="col-xs-12 col-md-7">
										<span class="toggle-label">Mailchimp</span>
									</div>
									<div class="col-xs-12 col-md-5">
										<div class="input__toggle" data-pos="pos-mailchimp" data-pos-state="deactive">
											<span id="pos-mailchimp" class="deactive">No</span>
											<input type="checkbox">
										</div>
									</div>
								</div>
							</div>

							<div class="article__toggle">
								<div class="row">
									<div class="col-xs-12 col-md-7">
										<span class="toggle-label">Ecommerce</span>
									</div>
									<div class="col-xs-12 col-md-5">
										<div class="input__toggle" data-pos="pos-ecommerce" data-pos-state="active">
											<span id="pos-ecommerce" class="active">Si</span>
											<input type="checkbox">
										</div>
									</div>
								</div>
							</div>

							<label for="">Condición del descuento</label>
							<div class="form-field__input">
								<select name="publicar-como" id="publicar-como">
									<option value="">-- Selecciona una condición para aplicar</option>
									<option value="">Compra total</option>
									<option value="">Compra parcial</option>
								</select>
								<span class="form-field__icon icon--not-round"><i class="fas fa-chevron-down"></i></span>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<label for="facturacion">Vigencia de la campaña</label>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="form-field__input">
										<input id="facturacion" type="text" placeholder="Fecha inicial">
										<span class="form-field__icon"><i class="far fa-calendar-alt"></i></span>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="form-field__input">
										<input id="facturacion" type="text" placeholder="Fecha final">
										<span class="form-field__icon"><i class="far fa-calendar-alt"></i></span>
									</div>
								</div>
								<div class="col-xs-12">
									<div class="article__toggle">
										<div class="row">
											<div class="col-xs-12 col-md-7">
												<span class="toggle-label">¿Campaña permanente?</span>
											</div>
											<div class="col-xs-12 col-md-5">
												<div class="input__toggle" data-pos="pos-permanente" data-pos-state="deactive">
													<span id="pos-permanente" class="deactive">No</span>
													<input type="checkbox">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">

							<label for="">Tipo de presupuesto</label>
							<div class="form-field__input">
								<select name="publicar-como" id="publicar-como">
									<option value="">-- Selecciona un tipo de presupuesto</option>
									<option value="">Fijo</option>
									<option value="">Variable</option>
								</select>
								<span class="form-field__icon icon--not-round"><i class="fas fa-chevron-down"></i></span>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<label for="">Goodle Adwords</label>
							<div class="form-field__input">
								<input id="facturacion" type="text" placeholder="Ingresa una cantidad">
								<span class="form-field__icon"><i class="fas fa-dollar-sign"></i></span>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="">Ecommerce</label>
							<div class="form-field__input">
								<input id="facturacion" type="text" placeholder="Ingresa una cantidad">
								<span class="form-field__icon"><i class="fas fa-dollar-sign"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pop__footer">
				<button class="cta cta--half cta--cancel" style="margin-right: -3px;">Cancelar</button>
				<button class="cta cta--half cta--blue">Crear Campaña</button>
			</div>
		</div>
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="assets/app.js"></script>
	</body>
</html>