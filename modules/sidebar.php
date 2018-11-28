<div class="sidebar">

	<div class="sidebar__logo visible-xs">
		<img src="assets/caja-logo-v-2.svg" alt="Cajanauta.com">
	</div>
	
	<div class="sidebar__menu">

		<div class="main-menu">

			<!-- Dashboard -->
			<div class="main-menu__parent" data-open-child="child-dashboard">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-dashboard.svg"); ?></span>
				<span class="menu-parent__title">Dashboard</span>
				<span class="menu-parent__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>
			</div>

			<div data-related-menu="child-dashboard" class="main-menu__child">
				<a href="dashboard.php" class="main-menu__option main-menu--option-active">Marketplaces</a>
				<a href="#" class="main-menu__option">Ecommerce</a>
				<a href="#" class="main-menu__option">Nautilus</a>
				<a href="#" class="main-menu__option">Añadir atajo</a>
			</div>
			<!-- End Dashboard -->

			<!-- Artículos -->
			<div class="main-menu__parent" data-open-child="child-articulos">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-articulos.svg"); ?></span>
				<span class="menu-parent__title">Artículos</span>
				<span class="menu-parent__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>
			</div>

			<div data-related-menu="child-articulos" class="main-menu__child">
				<a href="articulos.php" class="main-menu__option main-menu--option-active">Ver artículos</a>
				<a href="#" class="main-menu__option">Ver categorías</a>
				<a href="#" class="main-menu__option">Exportar</a>
				<a href="#" class="main-menu__option">Importar</a>
			</div>
			<!-- End Artículos -->

			<!-- Ventas -->
			<div class="main-menu__parent" data-open-child="child-ventas">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-ventas.svg"); ?></span>
				<span class="menu-parent__title">Ventas</span>
				<span class="menu-parent__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>
			</div>

			<div data-related-menu="child-ventas" class="main-menu__child">
				<a href="ventas.php" class="main-menu__option main-menu--option-active">Pedidos</a>
				<a href="#" class="main-menu__option">Aprobaciones</a>
				<a href="#" class="main-menu__option">Nautilus</a>
				<a href="#" class="main-menu__option">Balance</a>
				<a href="#" class="main-menu__option">Transferencias</a>
			</div>
			<!-- End Ventas -->

			<!-- POS -->
			<div class="main-menu__parent" data-open-child="child-POS">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-pos.svg"); ?></span>
				<span class="menu-parent__title">Puntos de venta</span>
				<span class="menu-parent__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>
			</div>

			<div data-related-menu="child-POS" class="main-menu__child">
				<a href="pos.php" class="main-menu__option main-menu--option-active">Marketplaces</a>
				<a href="#" class="main-menu__option">Ecommerce</a>
				<a href="#" class="main-menu__option">Retail (proximamente)</a>
			</div>
			<!-- End POS -->

			<!-- Marketing -->
			<div class="main-menu__parent" data-open-child="child-marketing">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-marketing.svg"); ?></span>
				<span class="menu-parent__title">Marketing</span>
				<span class="menu-parent__chevron"><?php echo file_get_contents("assets/icon-chevron.svg"); ?></span>
			</div>

			<div data-related-menu="child-marketing" class="main-menu__child">
				<a href="marketing.php" class="main-menu__option main-menu--option-active">Campañas</a>
				<a href="#" class="main-menu__option">Descuentos</a>
				<a href="#" class="main-menu__option">Social media</a>
				<a href="#" class="main-menu__option">Mail marketing</a>
				<a href="#" class="main-menu__option">Google ads</a>
				<a href="#" class="main-menu__option">Presupuestos</a>
				<a href="#" class="main-menu__option">Resultados</a>
			</div>
			<!-- End Marketing -->

			<!-- Configuración -->
			<div class="main-menu__parent" data-open-child="child-configuracion">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-settings.svg"); ?></span>
				<span class="menu-parent__title">Configuración</span>
			</div>
			<!-- End Configuración -->

			<!-- Apps -->
			<div class="main-menu__parent" data-open-child="child-apps">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-apps.svg"); ?></span>
				<span class="menu-parent__title">Apps</span>
			</div>
			<!-- End Apps -->

			<!-- Soporte -->
			<div class="main-menu__parent" data-open-child="child-soporte">
				<span class="menu-parent__icon"><?php echo file_get_contents("assets/icon-soporte.svg"); ?></span>
				<span class="menu-parent__title">Soporte</span>
			</div>
			<!-- End Soporte -->

		</div>

	</div>

</div>