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
			<input type="checkbox" class="input--checkbox">
		</div>
		<div class="data-table__item table--label">
			Nombre
		</div>
		<div class="data-table__item table--label">
			Precio
		</div>
		<div class="data-table__item table--label hidden-xs">
			SKU
		</div>
		<div class="data-table__item table--label hidden-xs">
			Categoría
		</div>
		<div class="data-table__item table--label">
			Inventario
		</div>
	</div>
	
	<?php foreach ($articles as $loop => $article): ?>
	<div class="data-table">				
		<div class="data-table__item table--checkbox">
			<input type="checkbox" class="input--checkbox">
		</div>
		<div class="data-table__item">
			<?php print $article['nombre']; ?>
		</div>
		<div class="data-table__item">
			<?php print $article['precio']; ?>
		</div>
		<div class="data-table__item hidden-xs">
			<?php print $article['sku']; ?>
		</div>
		<div class="data-table__item hidden-xs">
			<?php print $article['categoria']; ?>
		</div>
		<div class="data-table__item">
			<?php print $article['stock']; ?> <span class="edit--link edit--float-r trigger-edit-article" data-article-edit="article-box-<?php print $loop; ?>">Editar</span>
		</div>
	</div>

	<div id="article-box-<?php print $loop; ?>" class="article-edit table--border-bottom">
		<div class="row">

			<div class="col-xs-12 col-md-4">

				<div class="article__image">
					<img src="assets/image-placeholder.svg" class="img-responsive">
					<span class="edit--link">Cambiar imagen</span>
				</div>

				<div class="article__toggle">
					<div class="row">
						<div class="col-xs-12 col-md-7">
							<span class="toggle-label">Amazon</span>
						</div>
						<div class="col-xs-12 col-md-5">
							<div class="input__toggle" data-pos="pos-amazon-<?php print $loop; ?>" data-pos-state="active">
								<span id="pos-amazon-<?php print $loop; ?>" class="active">Si</span>
								<input type="checkbox">
							</div>
						</div>
					</div>
				</div>

				<div class="article__toggle">
					<div class="row">
						<div class="col-xs-12 col-md-7">
							<span class="toggle-label">Mercado libre</span>
						</div>
						<div class="col-xs-12 col-md-5">
							<div class="input__toggle" data-pos="pos-mercado-libre-<?php print $loop; ?>" data-pos-state="deactive">
								<span id="pos-mercado-libre-<?php print $loop; ?>" class="deactive">No</span>
								<input type="checkbox">
							</div>
						</div>
					</div>
				</div>

				<div class="article__toggle">
					<div class="row">
						<div class="col-xs-12 col-md-7">
							<span class="toggle-label">Linio</span>
						</div>
						<div class="col-xs-12 col-md-5">
							<div class="input__toggle" data-pos="pos-linio-<?php print $loop; ?>" data-pos-state="active">
								<span id="pos-linio-<?php print $loop; ?>" class="active">Si</span>
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
							<div class="input__toggle" data-pos="pos-ecommerce-<?php print $loop; ?>" data-pos-state="deactive">
								<span id="pos-ecommerce-<?php print $loop; ?>" class="deactive">No</span>
								<input type="checkbox">
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="col-xs-12 col-md-8">
				
				<label for="article-nombre">Nombre</label>
				<div class="form-field__input">
					<input type="text" placeholder="" value="<?php print $article['nombre']; ?>">
				</div>

				<div class="row">
					
					<div class="col-xs-12 col-md-4">
						<label for="article-precio">Precio</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['precio']; ?>">
						</div>
						<label for="article-talla">Talla</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['talla']; ?>">
						</div>
						<label for="article-alto">Alto</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['alto']; ?>">
						</div>
					</div>
					
					<div class="col-xs-12 col-md-4">
						<label for="article-sku">SKU</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['sku']; ?>">
						</div>
						<label for="article-color">Color</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['color']; ?>">
						</div>
						<label for="article-ancho">Ancho</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['ancho']; ?>">
						</div>
						<div class="form-field__input hidden-xs">
							<button class="cta cta--fluid cta--small cta--cancel trigger-hide-box" data-close-box="article-box-<?php print $loop; ?>">Eliminar</button>
						</div>
					</div>
					
					<div class="col-xs-12 col-md-4">
						<label for="article-categoria">Categoría</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['categoria']; ?>">
						</div>
						<label for="article-peso">Peso</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['peso']; ?>">
						</div>
						<label for="article-largo">Largo</label>
						<div class="form-field__input">
							<input type="text" placeholder="" value="<?php print $article['largo']; ?>">
						</div>
						<div class="form-field__input">
							<button class="cta cta--fluid cta--small cta--blue trigger-hide-box" data-close-box="article-box-<?php print $loop; ?>">Guardar Cambios</button>
						</div>
						<div class="form-field__input visible-xs">
							<button class="cta cta--fluid cta--small cta--cancel trigger-hide-box" data-close-box="article-box-<?php print $loop; ?>">Eliminar</button>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
	<?php endforeach; ?>
</div>

<?php include 'modules/paginator.php'; ?>