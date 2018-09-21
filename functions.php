<?php 
function add_theme_scripts(){
	wp_enqueue_style('style',get_template_directory_uri()."/vendor/bootstrap-4/css/bootstrap.min.css");
	wp_enqueue_style('plantillautm',get_template_directory_uri()."/css/plantillautm.css");
	wp_enqueue_style('plantillautm-icons',get_template_directory_uri()."/vendor/font/css/open-iconic-bootstrap.css");
	/*wp_enqueue_script('bootstrap',get_template_directory_uri()."/vendor/js");
	wp_enqueue_script('popper',get_template_directory_uri()."/vendor/");*/
}
add_action('wp_enqueue_scripts','add_theme_scripts');

function theme_prefix_setup(){
	add_theme_support('custom-logo',array(
		'height' => 150,
		'width'  => 150,
	));
}
add_action('after_setup_theme','theme_prefix_setup');

add_theme_support( 'post-thumbnails' );

function theme_post_type_advertisments(){
	$labels = array(
		'name' => _X('Anuncios','Post Type General Name','plantillautm'),
		'singular_name' => _X('Anuncio','Post Type General Name','plantillautm'),
		'menu_name' => __('Anuncios','plantillautm'),
		'all_items' => __('Todos Anuncios','plantillautm'),
		'view_item' => __('Ver Anuncio','plantillautm'),
		'add_new_item' => __('Agregar','plantillautm'),
		'add_new' => __('Agregar','plantillautm'),
		'edit_item' => __('Editar','plantillautm'),
		'update_item' => __('Actualizar Anuncio','plantillautm'),
		'search_item' => __('Buscar Anuncio','plantillautm'),
		'not_found' => __('No Encontrado','plantillautm'),
	);

	register_post_type('anuncios',array(
		'label' => __('anuncios','plantillautm'),
		'description' => __('Anuncios para la página principal','plantillautm'),
		'labels' => $labels,
		'supports' => array('title','editor','author','thumbnail','post-formats'),
		'taxonomies' => array('anuncios'),
		'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'menu_icon'			  => 'dashicons-megaphone'
	));

}
add_action('init','theme_post_type_advertisments');

function theme_post_type_news(){
	$labels = array(
		'name' => _X('Noticias','Post Type General Name','plantillautm'),
		'singular_name' => _X('Noticia','Post Type General Name','plantillautm'),
		'menu_name' => __('Noticias','plantillautm'),
		'all_items' => __('Todas Noticias','plantillautm'),
		'view_item' => __('Ver Noticia','plantillautm'),
		'add_new_item' => __('Agregar','plantillautm'),
		'add_new' => __('Agregar','plantillautm'),
		'edit_item' => __('Editar','plantillautm'),
		'update_item' => __('Actualizar Noticia','plantillautm'),
		'search_item' => __('Buscar Noticia','plantillautm'),
		'not_found' => __('No Encontrado','plantillautm'),
	);

	register_post_type('noticias',array(
		'label' => __('noticias','plantillautm'),
		'description' => __('Noticias para la página principal','plantillautm'),
		'labels' => $labels,
		'supports' => array('title','editor','thumbnail','post-formats'),
		'taxonomies' => array('noticias'),
		'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'			  => 'dashicons-welcome-widgets-menus'
	));

}
add_action('init','theme_post_type_news');

function theme_post_type_licenciaturas(){
	$labels = array(
		'name' => _X('Licenciatura','Post Type General Name','plantillautm'),
		'singular_name' => _X('Licenciatura','Post Type General Name','plantillautm'),
		'menu_name' => __('Licenciaturas','plantillautm'),
		'all_items' => __('Todas Licenciaturas','plantillautm'),
		'view_item' => __('Ver Licenciaturas','plantillautm'),
		'add_new_item' => __('Agregar','plantillautm'),
		'add_new' => __('Agregar','plantillautm'),
		'edit_item' => __('Editar','plantillautm'),
		'update_item' => __('Actualizar','plantillautm'),
		'search_item' => __('Buscar','plantillautm'),
		'not_found' => __('No Encontrado','plantillautm'),
	);

	register_post_type('licenciaturas',array(
		'label' => __('licenciaturas','plantillautm'),
		'description' => __('Licenciaturas para la página principal','plantillautm'),
		'labels' => $labels,
		'supports' => array('title','editor','thumbnail','post-formats'),
		'taxonomies' => array('noticias'),
		'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'			  => 'dashicons-welcome-learn-more'
	));

}
add_action('init','theme_post_type_licenciaturas');

function theme_post_type_postgrados(){
	$labels = array(
		'name' => _X('Postgrados','Post Type General Name','plantillautm'),
		'singular_name' => _X('Postgrado','Post Type General Name','plantillautm'),
		'menu_name' => __('Postgrados','plantillautm'),
		'all_items' => __('Todos Postgrados','plantillautm'),
		'view_item' => __('Ver Postgrados','plantillautm'),
		'add_new_item' => __('Agregar','plantillautm'),
		'add_new' => __('Agregar','plantillautm'),
		'edit_item' => __('Editar','plantillautm'),
		'update_item' => __('Actualizar','plantillautm'),
		'search_item' => __('Buscar','plantillautm'),
		'not_found' => __('No Encontrado','plantillautm'),
	);

	register_post_type('postgrados',array(
		'label' => __('postgrados','plantillautm'),
		'description' => __('Postgrados para la página principal','plantillautm'),
		'labels' => $labels,
		'supports' => array('title','editor','thumbnail','post-formats'),
		'taxonomies' => array('noticias'),
		'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'menu_icon'			  => 'dashicons-businessman'
	));

}
add_action('init','theme_post_type_postgrados');

function theme_categories(){

	wp_insert_term(
		'Suneo',
		'category',
		array(
			'description' => 'Noticas del suneo',
			'slug' => 'suneo'
		)
	);

	wp_insert_term(
		'Ligas de Interes',
		'category',
		array(
			'description' => 'Enlaces de ineteres de la universidad',
			'slug' => 'ligas-interes'
		)
	);

	wp_insert_term(
		'Eventos',
		'category',
		array(
			'description' => 'Eventos de la universidad',
			'slug' => 'eventos'
		)
	);

	wp_insert_term(
		'Servicios',
		'category',
		array(
			'description' => 'Servicios por parte de la universidad',
			'slug' => 'servicios'
		)
	);

	register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action('init','theme_categories');

function register_navbar_menu(){
	register_nav_menus(
		array(
			'header-menu' => _('Header Menu')
		)
	);
}
add_action('init','register_navbar_menu');

function add_class_item_menu($classes){
	$classes[] = 'nav-item dropdown-submenu';
	return $classes;
}
add_filter('nav_menu_css_class','add_class_item_menu',10,1);

function add_attr_item_menu($attr){
	$attr['class'] = 'nav-link';
//	$attr['class'] = 'nav-link dropdown-toggle';
//	$attr['type'] = 'button';
//	$attr['data-toggle'] = 'dropdown';
	return $attr;
}
add_filter('nav_menu_link_attributes','add_attr_item_menu',100,1);

//Setting Sub Menu
function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);        
    return $menu;      
}
add_filter('wp_nav_menu','new_submenu_class'); 

function theme_slogan_customizer($wp_customize){
	//Add section in wordpress
	$wp_customize->add_section('slogan_customizer',array(
		'title'		=> 'Eslogan'
	));

	//Add setting for footer textarea
	$wp_customize->add_setting('slogan_setting',array(
		'default'	=> 'Eslogan de la página aquí'
	));
	$wp_customize->add_control('slogan_setting',array(
		'label'	=> 'Eslogan',
		'section' => 'slogan_customizer',
		'type' => 'textarea'
	));
}
add_action('customize_register','theme_slogan_customizer');

function theme_info_footer($wp_customize){
	//Section
	$wp_customize->add_section('info_footer',array(
		'title' => 'Info. Pie (Dirección)'
	));

	//Add setting
	$wp_customize->add_setting('info_footer_setting',array(
		'default' => 'Dirección de la universidad aquí'
	));
	$wp_customize->add_control('info_footer_setting',array(
		'label' => 'Dirección',
		'section' => 'info_footer',
		'type' => 'textarea'
	));
}
add_action('customize_register','theme_info_footer');

function theme_colors_customizer($wp_customize){
	$wp_customize->add_section('colors_customizer',array(
		'title'	=> 'Colores'
	));

	//Background Color
	$wp_customize->add_setting('background_customizer',array(
		'default'	=> '#ffffff'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'background_customizer',array(
		'label'	=> __( 'Color del Fondo', 'plantillautm' ),
		'section' => 'colors_customizer',
		'setting' => 'background_customizer'
	)));

	//BackgoundColor Navbar and Footer
	$wp_customize->add_setting('background_navfoot',array(
		'default' => '#0f0f0f'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'background_navfoot',array(
		'label'	=> __('Color de Menu y Pie','plantillautm'),
		'section' => 'colors_customizer',
		'setting' => 'background_navfoot'
	)));

	//Letter color Navbar and Footer
	$wp_customize->add_setting('font_color_navfoot',array(
		'default' => '#ffffff'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'font_color_navfoot',array(
		'label' => __('Color Letra Menu y Pie','plantillautm'),
		'section' => 'colors_customizer',
		'setting' => 'font_color_navfoot'
	)));

	//Color button
	$wp_customize->add_setting('btn_color',array(
		'default' => '#83a3bf'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'btn_color',array(
		'label' => __('Color Boton','plantillautm'),
		'section' => 'colors_customizer',
		'setting' => 'btn_color'
	)));

	//Color button hover
	$wp_customize->add_setting('btn_color_hover',array(
		'default' => '#83b4bf'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'btn_color_hover',array(
		'label' => __('Color hover','plantillautm'),
		'section' => 'colors_customizer',
		'setting' => 'btn_color_hover'
	)));

	//Color text link
	$wp_customize->add_setting('color_link',array(
		'default' => '#990000'
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_link',array(
		'label' => __('Color de Enlaces','plantillautm'),
		'section' => 'colors_customizer',
		'setting' => 'color_link'
	)));
}
add_action('customize_register','theme_colors_customizer');


function css_customizer(){
?>
	<style type="text/css">

		body{
			background-color: <?php echo get_theme_mod('background_customizer');?>;
		}

		.navbar{
			background: <?php echo get_theme_mod('background_navfoot');?>;
		}

		.nav-link{
			color: <?php echo get_theme_mod('font_color_navfoot');?>;
		}

		footer{
			background: <?php echo get_theme_mod('background_navfoot');?>;
			color: <?php echo get_theme_mod('font_color_navfoot');?>;
		}

		.navbar-toggler{
			color: <?php echo get_theme_mod('font_color_navfoot');?>;
		}

		.btn-primary{
			border: 1px solid <?php echo get_theme_mod('btn_color'); ?>;
			background-color: <?php echo get_theme_mod('btn_color'); ?>;
		}

		.btn-primary:hover{
			border: 1px solid <?php echo get_theme_mod('btn_color_hover'); ?>;
			background-color: <?php echo get_theme_mod('btn_color_hover'); ?>;
		}

		.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
		.show > .btn-primary.dropdown-toggle {
			color: #fff;
			background-color: <?php echo get_theme_mod('btn_color_hover') ?>;
			/*border-color: <?php echo get_theme_mod('btn_color_hover'); ?>;*/
			border: none;
		}

		.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
		.show > .btn-primary.dropdown-toggle:focus {
		  box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0);
		}

		.dropdown:hover{
			background-color: <?php echo get_theme_mod('btn_color_hover') ?>;
		}

		.dropdown-menu{
			background-color: <?php echo get_theme_mod('background_navfoot') ?>;	
		}

		.dropdown-submenu:hover{
			background-color: <?php echo get_theme_mod('btn_color_hover') ?>;	
		}

		.current-menu-item{
			background-color: <?php echo get_theme_mod('btn_color_hover') ?>;		
		}

		h1>a,h2>a,h3>a,h4>a,h5>a,h6>a{
			color: #990000;
		}

	</style>
<?php
}
add_action('wp_head','css_customizer');












?>