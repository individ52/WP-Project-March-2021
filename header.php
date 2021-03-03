<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPseatcoversWP</title>

<?php wp_head(); ?>

</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="nav_wrapper">
                    <div class="nav_logo">
                        <span>seat</span>covers
                    </div>
                    <?php 
                        wp_nav_menu( [
                            'theme_location'  => 'menu_main_header',
                            'container'       => null, 
                            'menu_class'      => 'nav_menu'
                        ] );
                    ?>
                    <ul class="nav_lang">
                        <li class="nav_lang_item nav_lang_item_disabled"><a href="#">EST</a></li>
                        <li class="nav_lang_item"><a href="#">RUS</a></li>
                    </ul>
                    <ul class="nav_social">
                        <li class="nav_social_item"><a href="<?php echo $GLOBALS['seat_covers']['fb_url'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/facebook.svg" alt="facebook"></a></li>
                        <li class="nav_social_item"><a href="<?php echo $GLOBALS['seat_covers']['insta_url'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/instagram.svg" alt="instagram"></a></li>
                        <li class="nav_social_item"><a href="<?php echo $GLOBALS['seat_covers']['tg_url'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/telegram.svg" alt="telegram"></a></li>
                    </ul>
                    <button class="nav_burger">
                        menu
                    </button>
                </div>
                <ul class="nav_menu nav_menu_ipad">
                    <li class="nav_menu_item"><a href="#product">О продукции</a></li>
                    <li class="nav_menu_item"><a href="#materials">Материалы</a></li>
                    <li class="nav_menu_item"><a href="#">Примеры работ</a></li>
                    <li class="nav_menu_item"><a href="#">Установка</a></li>
                    <li class="nav_menu_item"><a href="#">Каталог</a></li>
                </ul>
            </nav>
        </div>
    </header>