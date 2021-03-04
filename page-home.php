<?php
/*
    Template Name: Главная
*/
?>
<?php 
    $page_id = get_the_ID(); 
    $catalog_products = carbon_get_post_meta($page_id,'catalog_products');
    $catalog_products_ids = wp_list_pluck($catalog_products ,'id');

    $catalog_products_query_args = [
        'post_type' => 'product',
        'post__in' => $catalog_products_ids,
    ];
    $catalog_products_query = new WP_Query( $catalog_products_query_args ); 
    echo '<pre>';
    // print_r($catalog_products_query);
    echo '</pre>'
?>
<?php get_header(); ?>
<section class="offer">
    <div class="container">
        <div class="offer_wrapper">
            <h1 class="offer_title">
                Автомобильные чехлы для сидений
            </h1>
            <p class="offer_desc">
                Новый салон Вашего автомобиля. Быстро! Красиво! Недорого!
            </p>
            <button class="btn btn_offer">Заказть звонок</button>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/offerbg.svg" alt="background" class="offer_bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car.svg" alt="car" class="offer_car">
            <div class="offer_map">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/map.svg" alt="mapIcon" class="offer_map_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="map" class="offer_map_img">
            </div>
        </div>
    </div>
    <div class="offer_bgwhite"></div>
</section> 
<section id="product" class="product" id="product">
    <div class="container">
        <h2><?php echo carbon_get_post_meta($page_id,'about_title'); ?></h2>
        <ul class="product_wrapper">
            <li class="product_item">
                <div class="product_item_icon first">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/size.svg" alt="icon_size">
                </div>
                <div class="product_item_wrapper">
                    <h3 class="product_item_title"><?php echo carbon_get_post_meta($page_id,'about_1-title'); ?></h3>
                    <?php echo carbon_get_post_meta($page_id, 'about_1-text'); ?>
                </div>
            </li>
            <li class="product_item">
                <div class="product_item_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/safe.svg" alt="icon_safe">
                </div>
                <div class="product_item_wrapper">
                    <h3 class="product_item_title"><?php echo carbon_get_post_meta($page_id,'about_2-title'); ?></h3>
                    <?php echo carbon_get_post_meta($page_id, 'about_2-text'); ?>
                </div>
            </li>
            <li class="product_item">
                <div class="product_item_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/done.svg" alt="icon_done">
                </div>
                <div class="product_item_wrapper">
                    <h3 class="product_item_title"><?php echo carbon_get_post_meta($page_id,'about_3-title'); ?></h3>
                    <div><?php echo carbon_get_post_meta($page_id, 'about_3-text'); ?></div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section id="advantages" class="advantages">
    <div class="container">
            <h2 class="advantages_title"><?php echo carbon_get_post_meta($page_id, 'advantage_title') ?></h2>
            <div class="advantages_desc"><?php echo carbon_get_post_meta($page_id, 'advantage_text') ?></div>
            <div class="advantages_bg"><?php echo carbon_get_post_meta($page_id, 'advantage_bg') ?></div>
    </div>
</section>
<section id="materials" class="materials" id="materials">
    <div class="container">
        <h2 class="materials_title"><?php echo carbon_get_post_meta($page_id, 'materials_title') ?></h2>
        <ul class="materials_card_wrapper">
            <li class="materials_card_item">
                <div class="materials_card_item_number">1</div>
                <h3 class="materials_card_item_title"><?php echo carbon_get_post_meta($page_id, 'materials_1-title') ?></h3>
                <p class="materials_card_item_desc"><?php echo carbon_get_post_meta($page_id, 'materials_1-text') ?></p>
            </li>
            <li class="materials_card_item">
                <div class="materials_card_item_number">2</div>
                <h3 class="materials_card_item_title"><?php echo carbon_get_post_meta($page_id, 'materials_2-title') ?></h3>
                <p class="materials_card_item_desc"><?php echo carbon_get_post_meta($page_id, 'materials_2-text') ?></p>
            </li>
            <li class="materials_card_item">
                <div class="materials_card_item_number">3</div>
                <h3 class="materials_card_item_title"><?php echo carbon_get_post_meta($page_id, 'materials_3-title') ?></h3>
                <p class="materials_card_item_desc"><?php echo carbon_get_post_meta($page_id, 'materials_3-text') ?></p>
            </li>
            <li class="materials_card_item">
                <div class="materials_card_item_number">4</div>
                <h3 class="materials_card_item_title"><?php echo carbon_get_post_meta($page_id, 'materials_4-title') ?></h3>
                <p class="materials_card_item_desc"><?php echo carbon_get_post_meta($page_id, 'materials_4-text') ?></p>
            </li>
        </ul>
        <h2 class="materials_title_centr"><?php echo carbon_get_post_meta($page_id, 'materials-type_title') ?></h2>
        <div class="materials_promo">
            <div class="materials_promo_img">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'materials-type_1-img-url'), 'full'); ?>" alt="alcantara" class="materials_promo_img_item" id="alcimg">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'materials-type_2-img-url'), 'full'); ?>" alt="ecolether" class="materials_promo_img_item active" id="ecoimg">
                <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'materials-type_3-img-url'), 'full'); ?>" alt="ferder" class="materials_promo_img_item " id="ferimg">
            </div>
            <ul class="materials_promo_tabs">
                <li class="materials_promo_tabs_item" id="eco">
                    <h3 class="materials_promo_tabs_item_title"><?php echo carbon_get_post_meta($page_id, 'materials-type_1-title') ?></h3>
                    <p class="materials_promo_tabs_item_descr"><?php echo carbon_get_post_meta($page_id, 'materials-type_1-text') ?></p>
                </li>
                <li class="materials_promo_tabs_item" id="alc">
                    <h3 class="materials_promo_tabs_item_title"><?php echo carbon_get_post_meta($page_id, 'materials-type_2-title') ?></h3>
                    <p class="materials_promo_tabs_item_descr"><?php echo carbon_get_post_meta($page_id, 'materials-type_2-text') ?></p>
                </li>
                <li class="materials_promo_tabs_item" id="fer">
                    <h3 class="materials_promo_tabs_item_title"><?php echo carbon_get_post_meta($page_id, 'materials-type_3-title') ?></h3>
                    <p class="materials_promo_tabs_item_descr"><?php echo carbon_get_post_meta($page_id, 'materials-type_3-text') ?></p>
                </li>
            </ul>
        </div>
        <div class="materials_promo_mobile">
            <div class="materials_promo_mobile_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/textureco.png" alt="ecotext">
            </div>
            <div class="materials_promo_mobile_desc">
                <h3 class="materials_promo_mobile_desc_title">
                    Экокожа "Аригон" с перфорацией
                </h3>
                <p class="materials_promo_mobile_desc_text">
                    Высококачественный автомобильный кожзам с перфорацией
                </p>
            </div>
        </div>
        <div class="materials_promo_mobile">
            <div class="materials_promo_mobile_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/texturalck.svg" alt="alctext">
            </div>
            <div class="materials_promo_mobile_desc">
                <h3 class="materials_promo_mobile_desc_title">
                    Алькантара
                </h3>
                <p class="materials_promo_mobile_desc_text">
                    Искусственная замша. Обладает высокой практичностью и люксовым внешним видом
                </p>
            </div>
        </div>
        <div class="materials_promo_mobile">
            <div class="materials_promo_mobile_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/texturferd.png" alt="ferdtext">
            </div>
            <div class="materials_promo_mobile_desc">
                <h3 class="materials_promo_mobile_desc_title">
                    Ячеистый велюр (федерер)
                </h3>
                <p class="materials_promo_mobile_desc_text">
                    Плотная велюровая ткань с ячеистой структурой.
                </p>
            </div>
        </div>
    </div>
</section>
<section id="slider" class="example">
    <div class="container">
        <h2><?php echo carbon_get_post_meta($page_id, 'examples_title'); ?></h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php 
                $gallary = carbon_get_post_meta($page_id, 'examples_gallery');
                foreach($gallary as $gallary_item_id) :
                        $item_img_url = wp_get_attachment_image_url($gallary_item_id, 'full');
                    ?>
                <div class="swiper-slide"><img src="<?php echo $item_img_url; ?>" alt="seatcovers"></div>
                <?php 
                wp_reset_postdata();    
                endforeach; 
            ?>
            </div>
            <div class="swiper-button swiper-button-n"></div>
            <div class="swiper-button swiper-button-p"></div>
        </div>
    </div>
</section>
<section id="install" class="advantages install">
    <div class="container">
            <h2 class="advantages_title install_title"><?php print_r(carbon_get_post_meta($page_id, 'install_title'));  ?></h2>
            <div class="advantages_desc install_desc"><?php print_r(carbon_get_post_meta($page_id, 'install_text'));  ?></в>
            <div class="advantages_bg install_bg"><?php print_r(carbon_get_post_meta($page_id, 'install_bg'));  ?></div>
    </div>
</section>

<?php 
if($catalog_products_query->have_posts()) : 
?>
<section id="catalog" class="catalog">
    <div class="container">
        <h2>Каталог</h2>
        <ul class="catalog_tabs">
            <?php 
                $catalog_nav_items = get_terms([
                    'taxonomy' => 'product-categories',
                    'parent'   => 0,
                ]);
            ?>
            <?php 
                foreach($catalog_nav_items as $item) :
            ?>
            <li class="catalog_tabs_item" data-categoryName="<?php echo $item->slug; ?>"><?php echo $item->name; ?></li>
            <?php 
            endforeach; 
        ?>
        </ul>
        <ul class="catalog_items">
            <?php 
            while($catalog_products_query->have_posts()) : $catalog_products_query->the_post();
            ?>
            <?php get_template_part('products-content'); ?>
            <?php 
                endwhile; 
            ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</section>
<?php 
endif; 
?>
<section id="order_form" class="order">
    <div class="container">

        <div class="order_block">   
                <h2 class="order_block_title">Оставить заявку</h2>
                <?php 
                    echo do_shortcode('[contact-form-7 id="64" title="Main form"]');
                    // echo do_shortcode('[contact-form-7 id="66" title="control form"]');
                ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
