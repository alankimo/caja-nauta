<?php
	$login = array(
		"username" => "admin",
		"password" => "asqw1235"
	);

	$articles = array(
		array("nombre" => "Taza amarilla grande", "precio" => "45 MXN", "sku" => "045790-LG", "categoria" => "Hogar", "stock" => "102", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "3.1 m"),
		array("nombre" => "Camisa cuadros leñador", "precio" => "695 MXN", "sku" => "928304-XS", "categoria" => "Ropa", "stock" => "15", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "6.3 m"),
		array("nombre" => "Camisa roja chica", "precio" => "320 MXN", "sku" => "197856-SM", "categoria" => "Ropa", "stock" => "32", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "0.5 m"),
		array("nombre" => "libreta moleskine lego", "precio" => "213 MXN", "sku" => "942012-LE", "categoria" => "Papelería", "stock" => "109", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "4.9 m"),
		array("nombre" => "Taza amarilla grande", "precio" => "45 MXN", "sku" => "045790-LG", "categoria" => "Hogar", "stock" => "102", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "0.8 m"),
		array("nombre" => "Camisa cuadros leñador", "precio" => "695 MXN", "sku" => "928304-XS", "categoria" => "Ropa", "stock" => "15", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "0.2 m"),
		array("nombre" => "Camisa roja chica", "precio" => "320 MXN", "sku" => "197856-SM", "categoria" => "Ropa", "stock" => "32", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "3.3m"),
		array("nombre" => "libreta moleskine lego", "precio" => "320 MXN", "sku" => "197856-SM", "categoria" => "Ropa", "stock" => "32", "talla" => 'XS', "color" => "Rojo-#f01702", "peso" => "0.5 kg", "alto" => "0.75 m", "ancho" => "0.20 m", "largo" => "1.5 m")
	);

	$sells = array(
		array(
			"estado" => "Completada",
			"estado-handle" => "completed",
			"orden" => "#119001",
			"cliente" => "Carla Alejandra",
			"fecha" => "19 de Diciembre 2017",
			"total" => "$ 1,790 MXN",
			"mensaje" => "Orden en proceso de recolección, por favor de empacar los artículos. <br><br> Recolección programada para el 22 de Noviembre 2017 a las 11 am.",
			"articulos" => array(
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				)
			),
			"envio" => "Alberto Torres<br>Del Alguacil 1104<br>66473 San Nicolas de los Garza NL<br>México <br>Tel: 81 1695 9970<br>",
			"recolectado" => "Fedex"
		),
		array(
			"estado" => "En transito",
			"estado-handle" => "progress",
			"orden" => "#119001",
			"cliente" => "Carla Alejandra",
			"fecha" => "19 de Diciembre 2017",
			"total" => "$ 1,790 MXN",
			"mensaje" => "Orden en transito, por favor de comparte el numero de guía con el cliente. <br><br> <strong>Num. de Guía:</strong> 192736-29380.",
			"articulos" => array(
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				)
			),
			"envio" => "Alberto Torres<br>Del Alguacil 1104<br>66473 San Nicolas de los Garza NL<br>México <br>Tel: 81 1695 9970<br>",
			"recolectado" => "Fedex"
		),
		array(
			"estado" => "En conflicto",
			"estado-handle" => "danger",
			"orden" => "#119001",
			"cliente" => "Carla Alejandra",
			"fecha" => "19 de Diciembre 2017",
			"total" => "$ 1,790 MXN",
			"mensaje" => "Orden en conflicto, por favor verifica la situación. <br><br><strong>Situación:</strong> Algunos artículos se encuentran agotados.",
			"articulos" => array(
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				)
			),
			"envio" => "Alberto Torres<br>Del Alguacil 1104<br>66473 San Nicolas de los Garza NL<br>México <br>Tel: 81 1695 9970<br>",
			"recolectado" => "Fedex"
		),
		array(
			"estado" => "En transito",
			"estado-handle" => "progress",
			"orden" => "#119001",
			"cliente" => "Carla Alejandra",
			"fecha" => "19 de Diciembre 2017",
			"total" => "$ 1,790 MXN",
			"mensaje" => "Orden en transito, por favor de comparte el numero de guía con el cliente. <br><br> <strong>Num. de Guía:</strong> 192736-29380.",
			"articulos" => array(
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				)
			),
			"envio" => "Alberto Torres<br>Del Alguacil 1104<br>66473 San Nicolas de los Garza NL<br>México <br>Tel: 81 1695 9970<br>",
			"recolectado" => "Fedex"
		),
		array(
			"estado" => "En transito",
			"estado-handle" => "progress",
			"orden" => "#119001",
			"cliente" => "Carla Alejandra",
			"fecha" => "19 de Diciembre 2017",
			"total" => "$ 1,790 MXN",
			"mensaje" => "Orden en transito, por favor de comparte el numero de guía con el cliente. <br><br> <strong>Num. de Guía:</strong> 192736-29380.",
			"articulos" => array(
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				)
			),
			"envio" => "Alberto Torres<br>Del Alguacil 1104<br>66473 San Nicolas de los Garza NL<br>México <br>Tel: 81 1695 9970<br>",
			"recolectado" => "Fedex"
		),
		array(
			"estado" => "Completada",
			"estado-handle" => "completed",
			"orden" => "#119001",
			"cliente" => "Carla Alejandra",
			"fecha" => "19 de Diciembre 2017",
			"total" => "$ 1,790 MXN",
			"mensaje" => "Orden en proceso de recolección, por favor de empacar los artículos. <br><br> Recolección programada para el 22 de Noviembre 2017 a las 11 am.",
			"articulos" => array(
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				),
				array(
					'titulo' => "Sudadera - Luciernaga Chica",
					"sku" => "OSU-0117S",
					"precio" => "$ 1,200 MXN",
					"cantidad" => "x1",
					"total" => "$ 1,200 MXN"
				)
			),
			"envio" => "Alberto Torres<br>Del Alguacil 1104<br>66473 San Nicolas de los Garza NL<br>México <br>Tel: 81 1695 9970<br>",
			"recolectado" => "Fedex"
		)
	);

	$campaigns = array(
		array("estado" => "Activa", "estado-handle" => "completed", "nombre" => "Regala navidad 2018", "medios" => "Facebook Ads, Google Adwords", "vigencia" => "19 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Inactiva", "estado-handle" => "danger", "nombre" => "Descuentos Buen Fin 2017", "medios" => "Facebook Ads, Google Adwords", "vigencia" => "12 de Diciembre 2017", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Activa", "estado-handle" => "completed", "nombre" => "Cibery Monday", "medios" => "Facebook Ads", "vigencia" => "19 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Pendiente", "estado-handle" => "progress", "nombre" => "Liquidación colección 2018", "medios" => "Google Adwords", "vigencia" => "11 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Activa", "estado-handle" => "completed", "nombre" => "Regala navidad 2018", "medios" => "Facebook Ads, Google Adwords", "vigencia" => "09 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Pendiente", "estado-handle" => "progress", "nombre" => "Campaña día del niño Juguetron", "medios" => "Google Adwords", "vigencia" => "08 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Pendiente", "estado-handle" => "progress", "nombre" => "Outlet productos naturales", "medios" => "Google Adwords", "vigencia" => "25 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Activa", "estado-handle" => "completed", "nombre" => "Dia de las madres 2018", "medios" => "Facebook Ads", "vigencia" => "18 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Activa", "estado-handle" => "completed", "nombre" => "San valentin 2018", "medios" => "Facebook Ads, Google Adwords", "vigencia" => "01 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Pendiente", "estado-handle" => "progress", "nombre" => "Festeja Año del Perro", "medios" => "Google Adwords", "vigencia" => "27 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Inactiva", "estado-handle" => "danger", "nombre" => "Venta promocional", "medios" => "Facebook Ads, Google Adwords", "vigencia" => "02 de Diciembre 2018", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
		array("estado" => "Activa", "estado-handle" => "completed", "nombre" => "Regala navidad 2019", "medios" => "Facebook Ads, Google Adwords", "vigencia" => "24 de Diciembre 2019", "tipo" => "Automatica", "descripcion" => "Do you want to download free song for ipod? If so, reading this article could save you from getting in to a lot of trouble!", "descuentos" => "15% - 30%", "presupuesto" => "7.50 USD/día"),
	);
?>