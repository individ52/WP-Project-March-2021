<?php 
    if(!defined('ABSPATH')) {
        exit;
    }

    use Carbon_Fields\Container;
    use Carbon_Fields\Field;

    Container::make( 'post_meta', 'Контент сайта' )
        ->show_on_page(25)
        ->add_tab('Первая секция', [
            Field::make( 'text', 'top_title', 'Заголовок' ),
            Field::make( 'text', 'top_subtitle', 'Подзаголовок' ),
            Field::make( 'text', 'top_btn_text', 'Текст кнопки' ),
        ])
        ->add_tab('О продукции', [
            Field::make( 'text', 'about_title', 'Заголовок' ),
            Field::make( 'text', 'about_1-title', 'Заголовок первый блок' ),
            Field::make( 'rich_text', 'about_1-text', 'Текст первый блок' ),
            Field::make( 'text', 'about_2-title', 'Заголовок второй блок' ),
            Field::make( 'rich_text', 'about_2-text', 'Текст второй блок' ),
            Field::make( 'text', 'about_3-title', 'Заголовок третий блок' ),
            Field::make( 'rich_text', 'about_3-text', 'Текст третий блок' ),
        ])
        ->add_tab('Преимущество', [
            Field::make( 'text', 'advantage_title', 'Заголовок' ),
            Field::make( 'rich_text', 'advantage_text', 'Текст' ),
            Field::make( 'text', 'advantage_bg', 'Текст заднего фона' ),
        ])
        ->add_tab('Материалы', [
            Field::make( 'text', 'materials_title', 'Заголовок' ),
            Field::make( 'text', 'materials_1-title', 'Заголовок первый блок' ),
            Field::make( 'rich_text', 'materials_1-text', 'текст первый блок' ),
            Field::make( 'text', 'materials_2-title', 'Заголовок второй блок' ),
            Field::make( 'rich_text', 'materials_2-text', 'текст второй блок' ),
            Field::make( 'text', 'materials_3-title', 'Заголовок третий блок' ),
            Field::make( 'rich_text', 'materials_3-text', 'текст третий блок' ),
            Field::make( 'text', 'materials_4-title', 'Заголовок четвертый блок' ),
            Field::make( 'rich_text', 'materials_4-text', 'текст четрвертый блок' ),
        ])
        ->add_tab('виды материалов', [
            Field::make( 'text', 'materials-type_title', 'Заголовок' ),
            Field::make( 'text', 'materials-type_1-title', 'Заголовок первый блок' ),
            Field::make( 'rich_text', 'materials-type_1-text', 'Текст первый блок' ),
            Field::make( 'image', 'materials-type_1-img-url', 'Картинка первый блок' ),
            Field::make( 'text', 'materials-type_2-title', 'Заголовок второй блок' ),
            Field::make( 'rich_text', 'materials-type_2-text', 'Текст второй блок' ),
            Field::make( 'image', 'materials-type_2-img-url', 'Картинка второй блок' ),
            Field::make( 'text', 'materials-type_3-title', 'Заголовок третий блок' ),
            Field::make( 'rich_text', 'materials-type_3-text', 'Текст третий блок' ),
            Field::make( 'image', 'materials-type_3-img-url', 'Картинка третий блок' ),
            

        ])
        ->add_tab('Примеры работ', [
            Field::make( 'text', 'examples_title', 'Заголовок' ),
            Field::make( 'media_gallery', 'examples_gallery', 'Галерея' ),
        ])
        ->add_tab('Установка', [
            Field::make( 'text', 'install_title', 'Заголовок' ),
            Field::make( 'rich_text', 'install_text', 'Текст' ),
            Field::make( 'text', 'install_bg', 'Текст заднего фона' ),
        ])
        ->add_tab( 'Каталог', [ 
            Field::make( 'text', 'catalog_title', 'Заголовок' ),
            Field::make( 'association', 'catalog_products',  'товары' )
            ->set_types( [
                [
                    'type'      => 'post',
                    'post_type' => 'product',
                ]
            ] )
        ] )
        ->add_tab('Форма', [
            Field::make( 'text', 'form_title', 'Заголовок формы' ),
            Field::make( 'text', 'form_name', 'Поле имя' ),
            Field::make( 'text', 'form_phone', 'Поле телефон' ),
            Field::make( 'text', 'form_mark', 'Поле выбора марки' ),
            Field::make( 'text', 'form_model', 'Поле выбора модели' ),
            Field::make( 'text', 'form_install', 'Поле установки' ),
            Field::make( 'text', 'form_seatcover', 'Поле выбора чехла' ),
            Field::make( 'text', 'form_btn', 'Текст кнопки' ),

        ])
        ->add_tab('Футер', [
            Field::make( 'text', 'footer_connection', 'Надзаголовок телефона и почты' ),
            Field::make( 'text', 'footer_socials', 'Надзаголовок соц. сетей' ),
            Field::make( 'text', 'modal_form', 'Заголовок модального окна' ),
            Field::make( 'text', 'modal_bdn', 'Кнопка заказать' ),
        ]);
    Container::make( 'post_meta', 'Контент сайта' )
        ->show_on_page(71)
        ->add_tab('Первая секция', [
            Field::make( 'text', 'top_title', 'Заголовок' ),
            Field::make( 'text', 'top_subtitle', 'Подзаголовок' ),
            Field::make( 'text', 'top_btn_text', 'Текст кнопки' ),
        ])
        ->add_tab('О продукции', [
            Field::make( 'text', 'about_title', 'Заголовок' ),
            Field::make( 'text', 'about_1-title', 'Заголовок первый блок' ),
            Field::make( 'rich_text', 'about_1-text', 'Текст первый блок' ),
            Field::make( 'text', 'about_2-title', 'Заголовок второй блок' ),
            Field::make( 'rich_text', 'about_2-text', 'Текст второй блок' ),
            Field::make( 'text', 'about_3-title', 'Заголовок третий блок' ),
            Field::make( 'rich_text', 'about_3-text', 'Текст третий блок' ),
        ])
        ->add_tab('Преимущество', [
            Field::make( 'text', 'advantage_title', 'Заголовок' ),
            Field::make( 'rich_text', 'advantage_text', 'Текст' ),
            Field::make( 'text', 'advantage_bg', 'Текст заднего фона' ),
        ])
        ->add_tab('Материалы', [
            Field::make( 'text', 'materials_title', 'Заголовок' ),
            Field::make( 'text', 'materials_1-title', 'Заголовок первый блок' ),
            Field::make( 'rich_text', 'materials_1-text', 'текст первый блок' ),
            Field::make( 'text', 'materials_2-title', 'Заголовок второй блок' ),
            Field::make( 'rich_text', 'materials_2-text', 'текст второй блок' ),
            Field::make( 'text', 'materials_3-title', 'Заголовок третий блок' ),
            Field::make( 'rich_text', 'materials_3-text', 'текст третий блок' ),
            Field::make( 'text', 'materials_4-title', 'Заголовок четвертый блок' ),
            Field::make( 'rich_text', 'materials_4-text', 'текст четрвертый блок' ),
        ])
        ->add_tab('виды материалов', [
            Field::make( 'text', 'materials-type_title', 'Заголовок' ),
            Field::make( 'text', 'materials-type_1-title', 'Заголовок первый блок' ),
            Field::make( 'rich_text', 'materials-type_1-text', 'Текст первый блок' ),
            Field::make( 'image', 'materials-type_1-img-url', 'Картинка первый блок' ),
            Field::make( 'text', 'materials-type_2-title', 'Заголовок второй блок' ),
            Field::make( 'rich_text', 'materials-type_2-text', 'Текст второй блок' ),
            Field::make( 'image', 'materials-type_2-img-url', 'Картинка второй блок' ),
            Field::make( 'text', 'materials-type_3-title', 'Заголовок третий блок' ),
            Field::make( 'rich_text', 'materials-type_3-text', 'Текст третий блок' ),
            Field::make( 'image', 'materials-type_3-img-url', 'Картинка третий блок' ),
            

        ])
        ->add_tab('Примеры работ', [
            Field::make( 'text', 'examples_title', 'Заголовок' ),
            Field::make( 'media_gallery', 'examples_gallery', 'Галерея' ),
        ])
        ->add_tab('Установка', [
            Field::make( 'text', 'install_title', 'Заголовок' ),
            Field::make( 'rich_text', 'install_text', 'Текст' ),
            Field::make( 'text', 'install_bg', 'Текст заднего фона' ),
        ])
        ->add_tab( 'Каталог', [ 
            Field::make( 'text', 'catalog_title', 'Заголовок' ),
            Field::make( 'association', 'catalog_products',  'товары' )
            ->set_types( [
                [
                    'type'      => 'post',
                    'post_type' => 'product',
                ]
            ] )
        ] )
        ->add_tab('Форма', [
            Field::make( 'text', 'form_title', 'Заголовок формы' ),
            Field::make( 'text', 'form_name', 'Поле имя' ),
            Field::make( 'text', 'form_phone', 'Поле телефон' ),
            Field::make( 'text', 'form_mark', 'Поле выбора марки' ),
            Field::make( 'text', 'form_model', 'Поле выбора модели' ),
            Field::make( 'text', 'form_install', 'Поле установки' ),
            Field::make( 'text', 'form_seatcover', 'Поле выбора чехла' ),
            Field::make( 'text', 'form_btn', 'Текст кнопки' ),
        ])
        ->add_tab('Футер', [
            Field::make( 'text', 'footer_connection', 'Надзаголовок телефона и почты' ),
            Field::make( 'text', 'footer_socials', 'Надзаголовок соц. сетей' ),
            Field::make( 'text', 'modal_form', 'Заголовок модального окна' ),
            Field::make( 'text', 'modal_bdn', 'Кнопка заказать' ),
        ]);
?>