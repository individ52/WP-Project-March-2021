<?php 
    if(!defined('ABSPATH')) {
        exit;
    }

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    Container::make( 'theme_options', 'Настройка сайта' )
        ->add_tab('Общие настройки', [
            Field::make( 'image', 'site_logo', 'Логотип сайта' ),
        ])    
        ->add_tab('Контакты', [
            Field::make( 'text', 'site_email', 'Почта' ),
            Field::make( 'text', 'site_phone', 'Телефон(с "+")' ),
            Field::make( 'text', 'site_phone_digits', 'Телефон(с "+" и без пробелов)' ),
            Field::make( 'text', 'site_link_fb', 'Facebook' ),
            Field::make( 'text', 'site_link_insta', 'Instagram' ),
            Field::make( 'text', 'site_link_tg', 'Telegram' )
        ])    
?>