<div class="section-header">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			Articulos / Ver artículos
		</div>
		<div class="col-xs-12 col-md-4 hidden-xs">
			<div class="search-input">
				<input type="text" placeholder="Buscar...">
				<i class="fas fa-search"></i>
			</div>
		</div>
	</div>
</div>

<div class="box-content">

	<div class="table-head">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-8 hidden-xs">
				<span class="table-head__title">Ultimos artículos registrados</span>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4">
				<a href="#" class="cta cta--fluid cta--blue">Agregar articulo</a>
			</div>
		</div>
	</div>

	<div class="data-table">
		<div class="data-table__item table--label table--checkbox">
			<span class="status"></span>
		</div>
		<div class="data-table__item table--label hidden-xs">
			Estado
		</div>
		<div class="data-table__item table--label">
			Orden
		</div>
		<div class="data-table__item table--label hidden-xs">
			Cliente
		</div>
		<div class="data-table__item table--label hidden-xs">
			Fecha
		</div>
		<div class="data-table__item table--label">
			Total
		</div>
	</div>
	
	<?php foreach ($sells as $loop => $sell): ?>
	<div class="data-table">				
		<div class="data-table__item table--checkbox">
			<span class="status status--<?php print $sell['estado-handle']; ?>"></span>
		</div>
		<div class="data-table__item hidden-xs">
			<?php print $sell['estado']; ?>
		</div>
		<div class="data-table__item">
			<?php print $sell['orden']; ?>
		</div>
		<div class="data-table__item hidden-xs">
			<?php print $sell['cliente']; ?>
		</div>
		<div class="data-table__item hidden-xs">
			<?php print $sell['fecha']; ?>
		</div>
		<div class="data-table__item">
			<?php print $sell['total']; ?> <span class="edit--link edit--float-r trigger-edit-article" data-article-edit="article-box-<?php print $loop; ?>">Ver</span>
		</div>
	</div>

	<div id="article-box-<?php print $loop; ?>" class="article-edit table--border-bottom">
		<div class="row">

			<div class="col-xs-12 col-md-4">
				<div class="widget-resumen text-left">
					<span class="widget-resumen__label"><?php print $sell['estado']; ?></span>
					<span class="widget-resument__small"><?php print $sell['mensaje']; ?></span>
				</div>
			</div>

			<div class="col-xs-12 col-md-8">
				<label>Detalles del Pedido</label>
				
				<?php foreach ($sell['articulos'] as $loop => $articulo): ?>
					
					<div class="row order-detail--item">
						
						<div class="col-xs-12 col-md-1">
							<img src="assets/image-placeholder.svg" class="img-responsive">
						</div>

						<div class="col-xs-12 col-md-4">
							<div><?php print $articulo['titulo']; ?></div>
							<div><?php print $articulo['sku']; ?></div>
						</div>
						<div class="col-xs-12 col-md-3"><?php print $articulo['precio']; ?></div>
						<div class="col-xs-12 col-md-1"><?php print $articulo['cantidad']; ?></div>
						<div class="col-xs-12 col-md-3"><?php print $articulo['total']; ?></div>

					</div>
					
				<?php endforeach; ?>

			</div>

		</div>
	</div>
	<?php endforeach; ?>
</div>

<?php include 'modules/paginator.php'; ?>