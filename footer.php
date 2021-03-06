
<?php $page_id = get_the_ID();  ?>
<footer class="footer" style="display: block;">
        <div class="container">
            <a href="#" class="nav_logo footer_logo">
                <span>seat</span>covers
            </a>
            <div class="footer_wrapper">
                <div class="footer_contacts">
                    <h3><?php echo carbon_get_post_meta($page_id, 'footer_connection'); ?></h3>
                    <a href="tel:<?php echo $GLOBALS['seat_covers']['phone_digits'];?>" class="footer_contacts_tel"><?php echo $GLOBALS['seat_covers']['phone'];?></a>
                    <p><?php echo $GLOBALS['seat_covers']['email'];?></p>
                </div>
                <div class="footer_social">
                    <h3><?php echo carbon_get_post_meta($page_id, 'footer_socials'); ?></h3>
                    <div class="nav_social footer_social_icons">
                        <a href="<?php echo $GLOBALS['seat_covers']['fb_url'];?>" class="nav_social_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/facebook.svg" alt="facebook">
                        </a>
                        <a href="<?php echo $GLOBALS['seat_covers']['insta_url'];?>" class="nav_social_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/instagram.svg" alt="instagram">
                        </a>
                        <a href="<?php echo $GLOBALS['seat_covers']['tg_url'];?>" class="nav_social_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/telegram.svg" alt="telegram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
</footer>   
<!-- Mobile menu -->
<div class="overlay">
            <?php 
                if($page_id == 25) {
                    echo "hihi";
                    wp_nav_menu( [
                        'theme_location'  => 'main_header_menu',
                        'container'       => null, 
                        'menu_class'      => 'menumobile'
                    ] );
                }
                if($page_id == 71) {
                    wp_nav_menu( [
                        'theme_location'  => 'main_header_menu_est',
                        'container'       => null, 
                        'menu_class'      => 'menumobile'
                    ] );
                }
            ?>
        <ul class="nav_lang nav_lang_mobile">
            <li class="nav_lang_item nav_lang_item_mobile<?php if ($page_id == 25) : ?> nav_lang_item_disabled<?php endif; ?>"><a href="<?php echo get_page_link(71); ?>">EST</a></li>
            <li class="nav_lang_item nav_lang_item_mobile<?php if ($page_id == 71) : ?> nav_lang_item_disabled<?php endif; ?>"><a href="<?php echo home_url($page_id); ?>">RUS</a></li>
        </ul>
</div>
<!-- Modal -->
<div class="overback">
    <div id="ex1" class="modal modal_form">
    <div class="close"><span>&times;</span></div>
    <div class="form_modal">
    <h3>Заполните форму</h3>
        <?php echo do_shortcode('[contact-form-7 id="80" title="Modal form"]'); ?>
        <!-- <input type="text" placeholder="Имя" name="modal_name" id="modal_name">
        <input type="tel" name="modal_tel" id="modal_tel" placeholder="Телефон">
        <button type="submit" class="btn btn_modal">Заказать</button> -->
    </div>
</div>


    <?php wp_footer(); ?>
</body>
</html>