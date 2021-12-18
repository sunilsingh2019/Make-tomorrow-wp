<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Macadamia_Digital
 */

get_header();

 $id = get_the_ID();

// check if the flexible content field has rows of data
if ( have_rows( 'section_builder', $id ) ) :

    // loop through the selected ACF layouts and display the matching partial
    while ( have_rows( 'section_builder', $id ) ) : the_row();

                get_template_part( 'partials/flexible-layouts/' . get_row_layout() );


    endwhile;

else: 

 endif;


get_footer();
