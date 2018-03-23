<?php

/**
 * The configuration options for Kirki.
 * Change the assets URL for kirki so the customizer styles & scripts are properly loaded.
 */
function promote_customizer_config( $args ) {

	$args['url_path'] = get_template_directory_uri() . '/inc/kirki/';

	return $args;

}




add_filter( 'kirki/config', 'promote_customizer_config' );

function promote_kirki_i10n( $config ) {

    $config['Kirki_l10n'] = array(
        'background-color'      => __( 'Background Color', 'promote' ),
        'background-image'      => __( 'Background Image', 'promote' ),
        'no-repeat'             => __( 'No Repeat', 'promote' ),
        'repeat-all'            => __( 'Repeat All', 'promote' ),
        'repeat-x'              => __( 'Repeat Horizontally', 'promote' ),
        'repeat-y'              => __( 'Repeat Vertically', 'promote' ),
        'inherit'               => __( 'Inherit', 'promote' ),
        'background-repeat'     => __( 'Background Repeat', 'promote' ),
        'cover'                 => __( 'Cover', 'promote' ),
        'contain'               => __( 'Contain', 'promote' ),
        'background-size'       => __( 'Background Size', 'promote' ),
        'fixed'                 => __( 'Fixed', 'promote' ),
        'scroll'                => __( 'Scroll', 'promote' ),
        'background-attachment' => __( 'Background Attachment', 'promote' ),
        'left-top'              => __( 'Left Top', 'promote' ),
        'left-center'           => __( 'Left Center', 'promote' ),
        'left-bottom'           => __( 'Left Bottom', 'promote' ),
        'right-top'             => __( 'Right Top', 'promote' ),
        'right-center'          => __( 'Right Center', 'promote' ),
        'right-bottom'          => __( 'Right Bottom', 'promote' ),
        'center-top'            => __( 'Center Top', 'promote' ),
        'center-center'         => __( 'Center Center', 'promote' ),
        'center-bottom'         => __( 'Center Bottom', 'promote' ),
        'background-position'   => __( 'Background Position', 'promote' ),
        'background-opacity'    => __( 'Background Opacity', 'promote' ),
        'ON'                    => __( 'ON', 'promote' ),
        'OFF'                   => __( 'OFF', 'promote' ),
        'all'                   => __( 'All', 'promote' ),
        'cyrillic'              => __( 'Cyrillic', 'promote' ),
        'cyrillic-ext'          => __( 'Cyrillic Extended', 'promote' ),
        'devanagari'            => __( 'Devanagari', 'promote' ),
        'greek'                 => __( 'Greek', 'promote' ),
        'greek-ext'             => __( 'Greek Extended', 'promote' ),
        'khmer'                 => __( 'Khmer', 'promote' ),
        'latin'                 => __( 'Latin', 'promote' ),
        'latin-ext'             => __( 'Latin Extended', 'promote' ),
        'vietnamese'            => __( 'Vietnamese', 'promote' ),
        'serif'                 => _x( 'Serif', 'font style', 'promote' ),
        'sans-serif'            => _x( 'Sans Serif', 'font style', 'promote' ),
        'monospace'             => _x( 'Monospace', 'font style', 'promote' ),


    );

    return $config;

}
add_filter( 'kirki/config', 'promote_kirki_i10n' );
