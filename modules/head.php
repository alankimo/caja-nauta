</div> <!-- cerramos el container-fluid -->
<div class="header-mobile visible-xs">
	<div class="container-fluid">
	<div class="row">

		<div class="col-xs-9">
			<div class="header-mobile__profile">
				<span class="profile__avatar"><img src="assets/icon-user-4x.png" alt=""></span>
				<span class="profile__label">Hola Juan Diego!</span>
			</div>
		</div>

		<div class="col-xs-3">
			<div class="header-mobile__hamburguer">
				<i class="fas fa-bars"></i>
			</div>
		</div>

	</div>
	</div>
</div>
<div class="container-fluid"> <!-- abrimos el container-fluid -->

<header class="hidden-xs">
<div class="row">
	
	<div class="col-xs-12 col-md-3">
		<div class="head__logo">
			<img src="assets/caja-logo-v-2.svg" alt="Cajanauta.com">
		</div>
	</div>

	<div class="col-xs-12 col-md-9">
		
		<section class="header">
			<div class="header__parent">
				<span class="header__icon"><?php echo file_get_contents("assets/icon-store.svg"); ?></span>
				<span class="header__label">Tiendas</span>
				<span class="header__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>

				<div class="header__child">
					<ul>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Activar</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Usuarios y permisos</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Datos generales</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Ir a tienda</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Avanzado</a></li>
					</ul>
				</div>
			</div>

			<div class="header__parent">
				<span class="header__icon"><?php echo file_get_contents("assets/icon-notification.svg"); ?></span>
				<span class="header__label">Notificaciones</span>
				<span class="header__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>

				<div class="header__child child--notification">
					<ul>
						<li><a href="#"><span class="status status--progress"></span> Pedido realizado</a></li>
						<li><a href="#"><span class="status status--completed"></span> Pedido completado</a></li>
						<li><a href="#"><span class="status status--danger"></span> Inventario agotado</a></li>
						<li><a href="#"><span class="status status--progress"></span> Aprobación requerida</a></li>
						<li><a href="#"><span class="status status--completed"></span> Pedido completado</a></li>
						<li><a href="#"><span class="status status--danger"></span> Inventario agotado</a></li>
					</ul>
				</div>
			</div>

			<div class="header__parent">
				<span class="header__icon"><img src="assets/icon-user.png"></span>
				<span class="header__label">Mi perfil</span>
				<span class="header__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>

				<div class="header__child">
					<ul>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Lenguaje</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Seguridad</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Datos personales</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Vincular cuentas</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Ayuda</a></li>
						<li><a href="#"><i class="fas fa-angle-double-right"></i> Cerrar sesión</a></li>
					</ul>
				</div>
			</div>
		</section>

		
	</div>

</div>
</header>