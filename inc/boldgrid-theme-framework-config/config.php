<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-haven';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = '1';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary', '[widget]boldgrid-widget-1' ),
		'5' => array( '[menu]social' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'9' => array( '[action]boldgrid_site_identity', '[widget]boldgrid-widget-2' ),
	);

	// Enable BoldGrid Color Palette System.
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;

	// Set default color palettes for theme.
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#999999',
				'#3a6e8c',
				'#333333',
				'#3f7899',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#260729',
				'#2a2344',
				'#495168',
				'#c9aa74',
				'#d8ccb2',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#fbc599',
				'#465b3c',
				'#e0c76b',
				'#478e84',
				'#f35f55',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#8e9e82',
				'#332e25',
				'#414d5e',
				'#9fd179',
				'#607890',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#063940',
				'#195e63',
				'#547175',
				'#8ebdb6',
				'#8e9b65',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key']  ) {
		case 'Property Management':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Roboto Slab';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Montserrat';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font site-description';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Montserrat';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Roboto Slab';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="col-sm-12 col-md-12">
			<div class="call-to-action">
				<p class="mod-space">&nbsp;</p>
				<p class="p-button-primary">
					<a class="button-primary" href="contact-us">CONTACT US TODAY</a>
				</p>
			</div>
		</div>
HTML;

	// Widget 2.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-2'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Montserrat';
	$controls['logo_font_size']['default'] = 66;

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
