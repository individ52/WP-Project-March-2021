
<?php
add_filter('show_admin_bar', '__return_false');

    remove_action('wp_head',             'print_emoji_detection_script', 7 );
    remove_action('admin_print_scripts', 'print_emoji_detection_script' );
    remove_action('wp_print_styles',     'print_emoji_styles' );
    remove_action('admin_print_styles',  'print_emoji_styles' );

    remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
    remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
    remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
    remove_action('wp_head', 'rsd_link'); // remove EditURI
    remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
    remove_action('wp_head', 'rel_canonical'); //remove canonical
    remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
    remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate

add_action('wp_enqueue_scripts', 'seatcovers_styles');

function seatcovers_styles() {
    $version = "0.0.2.1";
    wp_enqueue_style( 'google-fonts-1', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap", [], $version);
    wp_enqueue_style( 'google-fonts-2', "https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap", [], $version);
    wp_enqueue_style('swiper-bundle', 'https://unpkg.com/swiper/swiper-bundle.min.css', [], $version);
    wp_enqueue_style('jquery-modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css', [], $version);
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), [], $version);
    
    wp_enqueue_script( 'jquery-script', get_template_directory_uri().'/assets/js/jquery-3.5.1.min.js', [], $version, true);
    wp_enqueue_script( 'jquery-modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', array(), $version, true);
    wp_enqueue_script( 'masket', get_template_directory_uri().'/assets/js/jquery.maskedinput.min.js', array('jquery-script'), $version, true);
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), $version, true);
    wp_enqueue_script( 'main-script', get_template_directory_uri().'/assets/js/script.js', array('jquery-script'), $version, true);


}

add_action('after_setup_theme', 'register_menu');
function register_menu() {
    register_nav_menu('main_header_menu', 'Меню в шапке');
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true );

}

add_action('init', 'register_global_variables');
function register_global_variables() {
    global $seat_covers;
    $seat_covers = [
        'email'=> carbon_get_theme_option('site_email'),
        'phone'=> carbon_get_theme_option('site_phone'),
        'phone_digits'=> carbon_get_theme_option('site_phone_digits'),
        'fb_url'=> carbon_get_theme_option('site_link_fb'),
        'insta_url'=> carbon_get_theme_option('site_link_insta'),
        'tg_url'=> carbon_get_theme_option('site_link_tg'),

    ];
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', "register_carbon_fields");
function register_carbon_fields() {
    require_once( 'includes/carbon-fields/carbon-fields-options/theme-options.php' );
    require_once( 'includes/carbon-fields/carbon-fields-options/post-meta.php' );

}

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'product', [
        'labels' => [
            'name'               => 'Товары', // основное название для типа записи
            'singular_name'      => 'Товар', // название для одной записи этого типа
            'add_new'            => 'Добавить товар', // для добавления новой записи
            'add_new_item'       => 'Добавление товара', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование товара', // для редактирования типа записи
            'new_item'           => 'Новое товар', // текст новой записи
            'view_item'          => 'Смотреть товар', // для просмотра записи этого типа.
            'search_items'       => 'Искать товар', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Товары', // название меню
        ],
        'menu_icon'           => 'dashicons-cart',
        'public'              => true,
        'menu_position'       => 5,
        'supports'            => [ 'title', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive'         => true,
        'rewrite'             => ['slug' => 'products']
    ] );

    register_taxonomy( 'product-categories', [ 'product' ], [
        'labels'                             => [
            'name'                           => 'Категория товаров',
            'singular_name'                  => 'Категория товара',
            'search_items'                   => 'Искать категории',
            'popular_items'                  => 'Популярные категории',
            'all_items'                      => 'Все категории',
            'edit_item '                     => 'Изменить категорию',
            'update_item'                    => 'Обновить категорию',
            'add_new_item'                   => 'Добавить новую категорию',
            'new_item_name'                  => 'Новое название категории',
            'separate_items_with_commas'     => 'Отделить категории запятыми',
            'add_or_remove_items'            => 'Добавить или удалить категорию',
            'choose_from_most_used'          => 'Выбрать самую популярную категорию',
            'menu_name'                      => 'Категории',
        ],
        'hierarchical' => true,
    ] );
}

?>