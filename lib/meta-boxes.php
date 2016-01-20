<?php
add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ) {

	$prefix = '_cmb_';

	$meta_boxes[] = array(
		'id'         => 'upcoming_metabox',
		'title'      => 'Upcoming Book',
		'pages'      => array( 'upcoming-book'),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Alternative Title',
				'desc' => '...',
				'id'   => $prefix . 'alt_title',
				'type' => 'wysiwyg',
			),
		),
	);

	$meta_boxes[] = array(
		'id'         => 'postype_metabox',
		'title'      => 'Publication Data',
		'pages'      => array( 'book', 'upcoming-book', 'surjournal'),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => 'Spanish Text',
				'desc' => '...',
				'id'   => $prefix . 'spanish_copy',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Extra Images',
				'desc' => '...',
				'id'   => $prefix . 'images',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Credits',
				'desc' => '...',
				'id'   => $prefix . 'credits',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Price',
				'desc' => 'e.g. 25.50 or 30',
				'id'   => $prefix . 'price',
				'type' => 'text',
			),
			array(
				'name' => 'Footer',
				'desc' => '...',
				'id'   => $prefix . 'footer',
				'type' => 'wysiwyg',
			),
		),
	);

	$meta_boxes[] = array(
		'id' => 'about_metabox',
		'title' => 'About meta',
		'pages' => array('page'),
		'show_on' => array( 'key' => 'id', 'value' => array( 8, 10 ) ),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'fields' => array(
			array(
				'name' => 'Spanish content',
				'desc' => '',
				'id'   => $prefix . 'spanish',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Sur Journal Index Image',
				'desc' => '',
				'id'   => $prefix . 'surindex_img',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Sur Journal Index Copy',
				'desc' => '',
				'id'   => $prefix . 'surindex_copy',
				'type' => 'wysiwyg',
			),
			array(
				'name' => 'Sur Journal Index Copy Esp',
				'desc' => '',
				'id'   => $prefix . 'surindex_copy_esp',
				'type' => 'wysiwyg',
			)
		),
	);

	$meta_boxes[] = array(
		'id' => 'about_metabox',
		'title' => 'About meta',
		'pages' => array('essay'),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true,
		'fields' => array(
			array(
				'name' => 'Essay number',
				'desc' => '',
				'id'   => $prefix . 'number',
				'type' => 'text',
			),
			array(
				'name' => 'Author',
				'desc' => '',
				'id'   => $prefix . 'author',
				'type' => 'text',
			),
			array(
				'name' => 'PDF ENG',
				'desc' => '',
				'id'   => $prefix . 'pdf',
				'type' => 'file',
			),
			array(
				'name' => 'PDF ESP',
				'desc' => '',
				'id'   => $prefix . 'pdf_esp',
				'type' => 'file',
			)
		),
	);

	return $meta_boxes;
}
?>