<?php

if (!is_admin()) {
	function wpb_search_filter($query) {
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
	return $query;
	}
add_filter('pre_get_posts','wpb_search_filter');
}

// Wordpress Titles
add_theme_support( 'title-tag' );

function puskar_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bulma', 'https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css' );
    wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/js/all.js', true );
}

add_action( 'wp_enqueue_scripts', 'puskar_scripts' );

// Custom settings
function custom_settings_add_menu() {
    add_menu_page( 'Sosial Media Settings', 'Sosial Media Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
    <div class="wrap">
        <h1>Sosial Media Settings</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'section' );
            do_settings_sections( 'theme-options' );
            submit_button();
            ?>
        </form>
    </div>
<?php }

// Facebook
function setting_facebook() { ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>"
           placeholder="https://facebook.com"/>
<?php }
// Twitter
function setting_twitter() { ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>"
           placeholder="https://twitter.com"/>
<?php }
// Instagram
function setting_instagram() { ?>
    <input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>"
           placeholder="https://instagram.org"/>
<?php }
// Youtube
function setting_youtube() { ?>
    <input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>"
           placeholder="https://youtube.com" />
<?php }
function setting_website() { ?>
    <input type="text" name="website" id="website" value="<?php echo get_option('website'); ?>"
           placeholder="https://website.com"/>
<?php }

function custom_settings_page_setup() {
    add_settings_section( 'section', 'Sosmed Settings', null, 'theme-options' );
    add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
    add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
    add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
    add_settings_field( 'youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section' );
    add_settings_field( 'website', 'Website URL', 'setting_website', 'theme-options', 'section' );

    register_setting( 'section', 'facebook' );
    register_setting( 'section', 'twitter' );
    register_setting( 'section', 'instagram' );
    register_setting( 'section', 'youtube' );
    register_setting( 'section', 'website' );

}
add_action( 'admin_init', 'custom_settings_page_setup');

// Custom Fields
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e3820d890c23',
        'title' => 'Keterangan Karya',
        'fields' => array(
            array(
                'key' => 'field_5e3820e2baeb0',
                'label' => 'Poster',
                'name' => 'poster',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5e382129baeb1',
                'label' => 'Nama Perlombaan',
                'name' => 'nama_perlombaan',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Informasi tidak tersedia',
                'placeholder' => 'ex: GEMASTIK XII',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e382168baeb2',
                'label' => 'Penyelenggara',
                'name' => 'penyelenggara',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Informasi tidak tersedia',
                'placeholder' => 'ex: KEMENRISTEKDIKTI',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e382129baeb3',
                'label' => 'Nama Team',
                'name' => 'nama_team',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Informasi tidak tersedia',
                'placeholder' => 'ex: The Black Lotus',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e382129baeb4',
                'label' => 'Kontak',
                'name' => 'kontak',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'idline:@hmsiits',
                'placeholder' => 'ex: idline:rochim.noviyan, wa:081234606307',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;