<?php

$prefix = 'YOUR_PREFIX_';
global $meta_boxes;
$meta_boxes = array();

$meta_boxes[] = array(
    'id' => 'video',
    'title' => 'Video Settings',
    'pages' => array('videos'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
     array(
        'name' => 'Vimeo ID',
        'id' => 'vimeoID',
        'type' => 'text',
        ),
     ),
    );

$meta_boxes[] = array(
    'id' => 'landingpage',
    'title' => 'Landing Page Content',
    'pages' => array('landingpages'),
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
     array(
        'name' => 'Panel 1 Headline',
        'id' => 'p1headline',
        'type' => 'text',
        ),
     array(
        'name' => 'Panel 1 Content',
        'id' => 'p1content',
        'type' => 'textarea',
        ),
     array(
        'name' => 'Panel 1 Main Image',
        'id' => 'p1image',
        'type' => 'thickbox_image',
        'max_file_uploads' => 1,
        ),
     array(
        'name' => 'divider',
        'id' => 'divy',
        'type' => 'divider',
        ),
     array(
        'name' => 'divider',
        'id' => 'divy',
        'type' => 'divider',
        ),
     array(
        'name' => 'Panel 3 Headline',
        'id' => 'p3headline',
        'type' => 'text',
        ),
     array(
        'name' => 'Panel 3 Content',
        'id' => 'p3content',
        'type' => 'wysiwyg',
        ),
     array(
        'name' => 'Panel 3 Button Link',
        'id' => 'p3buttonlink',
        'type' => 'text',
        ),
     array(
        'name' => 'Panel 3 Vimeo ID',
        'id' => 'vimeoID',
        'type' => 'text',
        ),
     array(
        'name' => 'divider',
        'id' => 'divy',
        'type' => 'divider',
        ),
     array(
        'name' => 'Panel 4 Headline',
        'id' => 'p4headline',
        'type' => 'text',
        ),
     array(
        'name' => 'Panel 4 Content',
        'id' => 'p4content',
        'type' => 'wysiwyg',
        ),
     array(
        'name' => 'Panel 4 Button Link',
        'id' => 'p4buttonlink',
        'type' => 'text',
        ),
     ),
);

/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');
?>