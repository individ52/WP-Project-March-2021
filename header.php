<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPseatcoversWP</title>

<?php wp_head(); ?>
<?php $page_id = get_the_ID();  ?>
<script>
    var form_PH = {};
    form_PH.namePH = "<?php echo carbon_get_post_meta($page_id, "form_name");?>";
    form_PH.phonePH = '<?php echo carbon_get_post_meta($page_id, "form_phone");?>';
    form_PH.markPH = '<?php echo carbon_get_post_meta($page_id, "form_mark");?>';
    form_PH.modelPH = '<?php echo carbon_get_post_meta($page_id, "form_model");?>';
    form_PH.installPH = '<?php echo carbon_get_post_meta($page_id, 'form_install');?>';
    form_PH.seatcoverPH = '<?php echo carbon_get_post_meta($page_id, 'form_seatcover');?>';
    form_PH.btnPH = '<?php echo carbon_get_post_meta($page_id, 'form_btn');?>';
</script>
</head>
<body id="body">
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="nav_wrapper">
                    <div class="nav_logo">
                        <span>seat</span>covers
                    </div>
                    <?php 
                        if($page_id === 25) {
                            wp_nav_menu( [
                                'theme_location'  => 'main_header_menu',
                                'container'       => null, 
                                'menu_class'      => 'nav_menu'
                            ] );
                        }
                        if($page_id === 71) {
                            wp_nav_menu( [
                                'theme_location'  => 'main_header_menu_est',
                                'container'       => null, 
                                'menu_class'      => 'nav_menu'
                            ] );
                        }
                    ?>
                    <ul class="nav_lang">
                        <li class="nav_lang_item<?php if ($page_id === 25) : ?> nav_lang_item_disabled<?php endif; ?>"><a href="<?php echo get_page_link(71); ?>">EST</a></li>
                        <li class="nav_lang_item<?php if ($page_id === 71) : ?> nav_lang_item_disabled<?php endif; ?>"><a href="<?php echo home_url($page_id); ?>">RUS</a></li>
                    </ul>
                    <ul class="nav_social">
                        <li class="nav_social_item"><a href="<?php echo $GLOBALS['seat_covers']['fb_url'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/facebook.svg" alt="facebook"></a></li>
                        <li class="nav_social_item"><a href="<?php echo $GLOBALS['seat_covers']['insta_url'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/instagram.svg" alt="instagram"></a></li>
                        <li class="nav_social_item"><a href="<?php echo $GLOBALS['seat_covers']['tg_url'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/telegram.svg" alt="telegram"></a></li>
                    </ul>
                    <button class="nav_burger">
                        menu
                    </button>
                    <?php 
                        if($page_id === 25) {
                            wp_nav_menu( [
                                'theme_location'  => 'main_header_menu',
                                'container'       => null, 
                                'menu_class'      => 'nav_menu nav_menu_ipad'
                            ] );
                        }
                        if($page_id === 71) {
                            wp_nav_menu( [
                                'theme_location'  => 'main_header_menu_est',
                                'container'       => null, 
                                'menu_class'      => 'nav_menu nav_menu_ipad'
                            ] );
                        }
                    ?>
                </div>

            </nav>
        </div>
    </header>