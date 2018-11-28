<?php
	include 'modules/header.php';
?>

<div class="login-template">
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">

				<div class="login">

					<div class="login__header">
						<img src="assets/caja-logo-v-2.svg" alt="Logotipo - Cajanauta.com" class="img-responsive center-block">
					</div>

					<div class="login__body">
						<h1 class="text-center">Iniciar Sesión</h1>
						<p class="text-center">Ingresa tu usuario y contraseña para entrar al portal administrativo.</p>
						<form action="dashboard.php" class="form-field">
							<div class="form-field__input">
								<input type="text" placeholder="Usuario">
								<span class="form-field__icon"><i class="fas fa-user"></i></span>
							</div>
							<div class="form-field__input">
								<input type="password" placeholder="Contraseña">
								<span class="form-field__icon"><i class="fas fa-key"></i></span>
							</div>
							<div class="form-field__input">
								<button class="cta cta--fluid cta--blue">Iniciar Sesión</button>
								<div class="text-center">
									<a href="#" class="anchor--secondary">¿Olvidaste tu contraseña?</a>
								</div>
							</div>
						</form>
					</div>

				</div>

			</div>
		</div>
	</div>

</div>

<?php
	include 'modules/footer.php';
?>