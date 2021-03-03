<footer class="footer">
        <div class="container">
            <a href="#" class="footer_logo">
                <span>seat</span>covers
            </a>
            <div class="footer_wrapper">
                <div class="footer_contacts">
                    <h3>Как с нами связаться</h3>
                    <a href="tel:<?php echo $GLOBALS['seat_covers']['phone_digits'];?>" class="footer_contacts_tel"><?php echo $GLOBALS['seat_covers']['phone'];?></a>
                    <p><?php echo $GLOBALS['seat_covers']['email'];?></p>
                </div>
                <div class="footer_social">
                    <h3>Мы в социальных сетях</h3>
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
    <?php wp_footer(); ?>
    <!-- Mobile menu -->
    <div class="overlay">
            <ul class="menumobile">
                <li class="menumobile_item"><a href="#product">О продукции</a></li>
                <li class="menumobile_item"><a href="#materials">Материалы</a></li>
                <li class="menumobile_item"><a href="#">Примеры работ</a></li>
                <li class="menumobile_item"><a href="#">Установка</a></li>
                <li class="menumobile_item"><a href="#">Каталог</a></li>
            </ul>
            <ul class="nav_lang nav_lang_mobile">
                <li class="nav_lang_item nav_lang_item_mobile nav_lang_item_disabled"><a href="#">EST</a></li>
                <li class="nav_lang_item nav_lang_item_mobile"><a href="#">RUS</a></li>
            </ul>
    </div>
    <?php wp_footer(); ?>
</body>
</html>