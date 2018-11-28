<div class="section-header">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			Marketing & Promociones / Campañas 
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
				<span class="table-head__title">Ultimas campañas registradas</span>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-4">
				<a href="#" id="open-form-campana" class="cta cta--fluid cta--blue">Crear campaña</a>
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
			Nombre
		</div>
		<div class="data-table__item table--label">
			Medios
		</div>
		<div class="data-table__item table--label">
			Vigencia
		</div>
	</div>
	
	<?php foreach ($campaigns as $loop => $campaign): ?>
	<div class="data-table">				
		<div class="data-table__item table--checkbox">
			<span class="status status--<?php print $campaign['estado-handle']; ?>"></span>
		</div>
		<div class="data-table__item hidden-xs">
			<?php print $campaign['estado']; ?>
		</div>
		<div class="data-table__item">
			<?php print $campaign['nombre']; ?>
		</div>
		<div class="data-table__item">
			<?php print $campaign['medios']; ?>
		</div>
		<div class="data-table__item">
			<?php print $campaign['vigencia']; ?> <span class="edit--link edit--float-r trigger-edit-article" data-article-edit="article-box-<?php print $loop; ?>">Ver</span>
		</div>
	</div>

	<div id="article-box-<?php print $loop; ?>" class="article-edit table--border-bottom">

				<div class="data-table">
					<div class="data-table__item">
						<label>Tipo</label>
						<?php print $campaign['tipo']; ?>
					</div>
					<div class="data-table__item">
						<label>Descripción</label>
						<?php print $campaign['descripcion']; ?>
					</div>
					<div class="data-table__item">
						<label>Descuentos</label>
						<?php print $campaign['descuentos']; ?>
					</div>
					<div class="data-table__item">
						<label>Presupuesto</label>
						<?php print $campaign['presupuesto']; ?>
					</div>
				</div>
			
	</div>
	<?php endforeach; ?>
</div>

<?php include 'modules/paginator.php'; ?>