<?php

$nombre_inmobiliaria = "Inmobiliaria Arrendamos Ya";

//logo empresa
$logo_empresa = [
	$color =[
		"src" => "images/Logo.png",
		"alt" => "Logo Inmobiliaria Arrendamos Ya"
	],
]; 

// boton pse
$pse = [
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE"
];

// redes sociales
$redes_sociales = [
	"facebook" => [
		"link" => "https://www.facebook.com/Arrendamosya-110900666978057/",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	"instagram" => [
		"link" => "https://www.instagram.com/arrendamosya/",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
	"twitter" => [
		"link" => "https://www.twitter.com/",
		"icono" => "fab fa-twitter",
		"imagen" => "images/twitter.png"
	],
	"youtube" => [
		"link" => "https://www.youtube.com/channel/UC7Qs495OzRYG3t3F0NkjlsQ?view_as=subscribe",
		"icono" => "fab fa-youtube",
		"imagen" => "images/youtube.png"
	],
];

//datos de contacto 
$datos_contacto = [
	"direccion" => [
		"direccion" => "Cra. 55 N° 40 A-20, Oficina 311, Medellín", //, Torre nuevo Centro la Alpujarra
		"icono" => "fas fa-map-marker-alt",
	],
	"telefono_fijo" => [
		"link"=> "0342328421",
		"imprimir" => "+57(4) 232 8421",
		"icono" => "fas fa-phone",
	],
	"celular" => [
		"link"=> "+573113155333",
		"imprimir" => "311 315 5333",
		"icono" => "fas fa-mobile-alt",
	],
	"whatsapp" => [
		"link"=> "https://api.whatsapp.com/send?phone=573053251105&text=&source=&data=",
		"imprimir" => "305 325 1105",
		"icono" => "fab fa-whatsapp",
	],
	"correo" => [
		"correo" => "administrador@arrendamosya.com",
		"icono" => "far fa-envelope",
	],
	"horario" => [
		"horario" => "Lunes a viernes de 07:00 am a 05:00 pm",
		"icono" => "fas fa-calendar-alt",
	],	
];

//logos aliados
$logos_aliados = [
	0 => "images/LOGO EL LIBERTADOR.png",
	1 => "images/LOGO SURA.png",
	2 => "images/LOGO SIMI.png",
];


//formularios aseguradoras
$formularios_aseguradoras = [
	0 => [
		'nombre' => 'Libertador Persona Jurídica',
		'ruta' => '/'
	],
	1 => [
		'nombre' => 'Libertador Persona Natural',
		'ruta' => '/'
	],
	2 => [
		'nombre' => 'Sura Persona Natural',
		'ruta' => '/'
	],
	3 => [
		'nombre' => 'Sura Persona Natural',
		'ruta' => '/'
	],
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide_1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide_2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide_3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"quienes_somos" => [
		"titulo" => "Quiénes Somos",
		"parrafos" => [
			0 => "Somos un equipo de trabajo preparado con alta calidad para proporcionarle a todos nuestros clientes la confianza y tranquilidad que sus procesos de administración y arrendamiento gozan de seguridad legal, con estudios jurídicos apropiados y debidamente afianzados por aseguradoras sólidas en el mercado inmobiliario.",
			1 => "Realizamos un acompañamiento personalizado de principio a fin, con un asesor personalizado.",
			2 => "En nuestros procesos realizamos trámites administrativos y jurídicos ante eventualidades que lo ameriten.",
			3 => " Pertenecemos al Gremio Inmobiliario de la Cámara Nacional Inmobiliaria.",
			4 => " Estamos afianzados por las aseguradoras El Libertador y Sura.",
		],	
		"imagen" => "images/",
	],
];

//textos y banner contador de estadisticas seccion home
$texto_contador_estadisticas = [
	"parrafos" => [
		0 => "Años de Experiencia",
		1 => "Total Inmuebles",
		2 => "Inmuebles en Arriendo",
		3 => "Inmuebles en Venta",
		4 => "Inmuebles en Arriendo/Venta",
		],
		"imagen" =>[
			'imagen' => 'images/banner_estadisticas_home.png',
			'alt' => 'Imagen'
		],	
];

// imaganes varias
$imagenes = [
	"documentos_home" => [
		'imagen' => 'images/documentos.png',
		'alt' => 'Imagen'
	],
];

//iconos servicios
$iconos_servicios = [
	"arrendamientos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"avaluos" => "fas fa-balance-scale",
	"administracion" => "fas fa-user-tie",
	"hipotecas" => "fas fa-hand-holding-usd",
	"asesoria_juridica" => "fas fa-gavel",

];
	
//textos servicios
$texto_servicios = [
	"arrendamientos" => [
		"titulo" => "Arrendamientos",
		"parrafos" => [
			0 => "",
			1 => "",
			],
	],
	"ventas" =>[
		"titulo" => "Ventas",
		"parrafos" => [
			0 => "",
			1 => "",
			],
	],
	"avaluos" =>[
			"titulo" => "Avalúos",
			"parrafos" => [
				0 => "",
				1 => "",
				],
		],	
	"administracion" =>[
			"titulo" => "Administración",
			"parrafos" => [
				0 => "",
				1 => "",
				],
		],	
	"hipotecas" =>[
			"titulo" => "Hipotecas",
			"parrafos" => [
				0 => "",
				1 => "",
				],
		],	
	"asesoria_juridica" =>[
			"titulo" => "Asesoría Jurídica",
			"parrafos" => [
				0 => "",
				1 => "",
				],
		],		
];
?>