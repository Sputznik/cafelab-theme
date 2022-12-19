<?php
add_filter( 'orbit_meta_box_vars', function( $meta_box ){

  $meta_box['post'] = array(
		array(
			'id'			=> 'publication-meta-field',
			'title'		=> 'Additional Information',
			'fields'	=> array(
				'author_name'	=> array(
					'type' => 'text',
					'text' => 'Author Name'
				),
				'external_url'	=> array(
					'type' => 'text',
					'text' => 'External URL'
				)
			)
		)
	);

	return $meta_box;

});
