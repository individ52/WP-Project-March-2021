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
            <li class="catalog_tabs_item" data-category-name="<?php echo $item->slug; ?>"><?php echo $item->name; ?></li>
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
<section id="order" class="order">
    <div class="container">
        <div class="order_wrapper">
            <h2>Оформить заказ</h2>
            <form action="#" class="order_form">
                <input type="text" placeholder="Имя" required>
                <input id="phone" type="text" placeholder="Телефон" required>
                <select name="mark" id="markID" required>
                    <option disabled="" value="" selected>Выберите марку авто</option>
                    <option value="AUDI">AUDI</option>
                    <option value="BMW">BMW</option>
                    <option value="BRILLIANCE">BRILLIANCE</option>
                    <option value="BYD">BYD</option>
                    <option value="CHANGAN">CHANGAN</option>
                    <option value="CHERY">CHERY</option>
                    <option value="CHEVROLET">CHEVROLET</option>
                    <option value="CITROEN">CITROEN</option>
                    <option value="DAEWOO">DAEWOO</option>
                    <option value="DATSUN">DATSUN</option>
                    <option value="DODGE">DODGE</option>
                    <option value="FAW">FAW</option>
                    <option value="FIAT">FIAT</option>
                    <option value="FORD">FORD</option>
                    <option value="GEELY">GEELY</option>
                    <option value="GREATWALL">GREAT WALL</option>
                    <option value="HONDA">HONDA</option>
                    <option value="HYUNDAI">HYUNDAI</option>
                    <option value="KIA">KIA</option>
                    <option value="LADA">LADA</option>
                    <option value="LANDROVER">LAND ROVER</option>
                    <option value="LEXUS">LEXUS</option>
                    <option value="LIFAN">LIFAN</option>
                    <option value="MAZDA">MAZDA</option>
                    <option value="MERCEDES">MERCEDES</option>
                    <option value="MINI">MINI</option>
                    <option value="MITSUBISHI">MITSUBISHI</option>
                    <option value="NISSAN">NISSAN</option>
                    <option value="OPEL">OPEL</option>
                    <option value="PEUGEOT">PEUGEOT</option>
                    <option value="RENAULT">RENAULT</option>
                    <option value="SEAT">SEAT</option>
                    <option value="SKODA">SKODA</option>
                    <option value="SMART">SMART</option>
                    <option value="SsangYong">SsangYong</option>
                    <option value="SUBARU">SUBARU</option>
                    <option value="SUZUKI">SUZUKI</option>
                    <option value="TOYOTA">TOYOTA</option>
                    <option value="UAZ">UAZ</option>
                    <option value="VOLVO">VOLVO</option>
                    <option value="VW">VW</option>
                    <option value="GAZ">ГАЗ</option>
                    <option value="GAZEL">Газель</option>
                    <option value="OTHER">Другая</option>
                </select>
                <div class="models">
                    <select name="model" data-attribu="AUDI" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="A1 Hb 5-ти дв. с 10г.">A1 Hb 5-ти дв. с 10г.</option>
                        <option value="A3 (8L) Hb 3-х дв. с 96-03г.">A3 (8L) Hb 3-х дв. с 96-03г.</option>
                        <option value="A3 (8P) Hb 3-х дв. с 03-13г.">A3 (8P) Hb 3-х дв. с 03-13г.</option>
                        <option value="A3 (8V) Sd/Hb c 13г.">A3 (8V) Sd/Hb c 13г.</option>
                        <option value="80 B-3 (8A) с 86-91г. без подголовников">80 B-3 (8A) с 86-91г. без подголовников</option>
                        <option value="80 В-3 (8А) с 86-91г. задн. подголов-ки горбы">80 В-3 (8А) с 86-91г. задн. подголов-ки горбы</option>
                        <option value="80 B-4 (8С) (40/60) с 91-96г.">80 B-4 (8С) (40/60) с 91-96г.</option>
                        <option value="A4 (B5) Sd (40/60) 94-01г.">A4 (B5) Sd (40/60) 94-01г.</option>
                        <option value="A4 (B5) Sd (сплошн.) с 94-01г.">A4 (B5) Sd (сплошн.) с 94-01г.</option>
                        <option value="A4 (B5) Wag с 94-01г.">A4 (B5) Wag с 94-01г.</option>
                        <option value="A4 (B6 / B7) Sd (40/60) с 00-07г.">A4 (B6 / B7) Sd (40/60) с 00-07г.</option>
                        <option value="A4 (B6 / B7) Sd (сплошн.) с 00-07г.">A4 (B6 / B7) Sd (сплошн.) с 00-07г.</option>
                        <option value="A4 (B8) Sd/Wag (40/60) с 07-15г.">A4 (B8) Sd/Wag (40/60) с 07-15г.</option>
                        <option value="А5 Coupe 2-х дв. с 07г.">А5 Coupe 2-х дв. с 07г.</option>
                        <option value="100 Sd /45-й кузов/ (С4) с 90-95г.">100 Sd /45-й кузов/ (С4) с 90-95г.</option>
                        <option value="100 Sd /45-й кузов/ (С4) с 90-95г. (передние кресла RECARO)">100 Sd /45-й кузов/ (С4) с 90-95г. (передние кресла RECARO)</option>
                        <option value="100 Wag /45-й кузов/ (С4) с 90-95г.">100 Wag /45-й кузов/ (С4) с 90-95г.</option>
                        <option value="А6 (С4) Sd с 94-97г. / 100 Sd (45-й кузов (С4)) с 90-95г.">А6 (С4) Sd с 94-97г. / 100 Sd (45-й кузов (С4)) с 90-95г.</option>
                        <option value="A6 (С5) Sd (40/60) с 97-04г.">A6 (С5) Sd (40/60) с 97-04г.</option>
                        <option value="A6 (С5) Sd (сплошн.) с 97-04г.">A6 (С5) Sd (сплошн.) с 97-04г.</option>
                        <option value="A6 (С6) Sd/Wag (40/60) c 04-10г.">A6 (С6) Sd/Wag (40/60) c 04-10г.</option>
                        <option value="А6 (C7) Sd с 11-18г.">А6 (C7) Sd с 11-18г.</option>
                        <option value="Q3 с 2011г.в.">Q3 с 2011г.в.</option>
                        <option value="Q5 с 08-17г.">Q5 с 08-17г.</option>
                        <option value="Q5 с 08-17г. (комплектация S-Line)">Q5 с 08-17г. (комплектация S-Line)</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="BMW" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="(Е81) Hb 3-х дв. с 04-11г.">(Е81) Hb 3-х дв. с 04-11г.</option>
                        <option value="(Е87) Hb 5-ти дв. с 04-11г.">(Е87) Hb 5-ти дв. с 04-11г.</option>
                        <option value="(F20) Hb 5-ти дв. с 11г.">(F20) Hb 5-ти дв. с 11г.</option>
                        <option value="(E36) Sd (сплошн.) 90-00г.">(E36) Sd (сплошн.) 90-00г.</option>
                        <option value="(Е46) Sd (40/60) с 98-06г.">(Е46) Sd (40/60) с 98-06г.</option>
                        <option value="(Е46) Sd (сплошн.) с 98-06г.">(Е46) Sd (сплошн.) с 98-06г.</option>
                        <option value="(E46) Sd (сплошн.) с 98-06г. (пер.кресла спорт)">(E46) Sd (сплошн.) с 98-06г. (пер.кресла спорт)</option>
                        <option value="(Е90) Sd (40/60) с 05-11г. спорт сиденья">(Е90) Sd (40/60) с 05-11г. спорт сиденья</option>
                        <option value="(E34) Sd (40/60) с 88-96г.">(E34) Sd (40/60) с 88-96г.</option>
                        <option value="(E34) Sd (сплошн.) с 88-96г.">(E34) Sd (сплошн.) с 88-96г.</option>
                        <option value="(E39) Sd (40/60) с 95-03г.">(E39) Sd (40/60) с 95-03г.</option>
                        <option value="(E39) Sd (сплошн.) с 95-03г.">(E39) Sd (сплошн.) с 95-03г.</option>
                        <option value="(E60) Sd (сплошн.) с 03-10г.">(E60) Sd (сплошн.) с 03-10г.</option>
                        <option value="B(E84) с 09-15г.">B(E84) с 09-15г.</option>
                        <option value="B(E83) с 03-10г.">B(E83) с 03-10г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="BRILLIANCE" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="M2 с 05-12г.">M2 с 05-12г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="BYD" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="F3 с 06-13г.">F3 с 06-13г.</option>
                        <option value="Flyer с 05-08г.">Flyer с 05-08г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="CHANGAN" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="CS35 с 13г.">CS35 с 13г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="CHERY" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Amulet (А15) с 03-13г.">Amulet (А15) с 03-13г.</option>
                        <option value="QQ6 (S21) с 06-10г.">QQ6 (S21) с 06-10г.</option>
                        <option value="Bonus (A13) с 11-14г.">Bonus (A13) с 11-14г.</option>
                        <option value="CrossEastar (В14) 7 мест с 08-14г.">CrossEastar (В14) 7 мест с 08-14г.</option>
                        <option value="Fora (А21) / Vortex Estina с 08г.">Fora (А21) / Vortex Estina с 08г.</option>
                        <option value="Kimo (A1) с 08-13г.">Kimo (A1) с 08-13г.</option>
                        <option value="Tiggo Т11 (50/50) с 05-12г.">Tiggo Т11 (50/50) с 05-12г.</option>
                        <option value="Tiggo FL (40/60) / Vortex Tingo с 12г.">Tiggo FL (40/60) / Vortex Tingo с 12г.</option>
                        <option value="Tiggo 5 c 14 г.">Tiggo 5 c 14 г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="CHEVROLET" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Aveo Hb с 03-12г.">Aveo Hb с 03-12г.</option>
                        <option value="Aveo Sd с 03-12г.">Aveo Sd с 03-12г.</option>
                        <option value="Captiva">Captiva</option>
                        <option value="Cobalt с 11г.">Cobalt с 11г.</option>
                        <option value="Cruze Sd/Hb/Wag">Cruze Sd/Hb/Wag</option>
                        <option value="Lacetti">Lacetti</option>
                        <option value="Lanos / ZAZ Chance">Lanos / ZAZ Chance</option>
                        <option value="Niva с 02-13г.">Niva с 02-13г.</option>
                        <option value="Niva с 14-16г.">Niva с 14-16г.</option>
                        <option value="Niva с 16г.">Niva с 16г.</option>
                        <option value="Orlando 5 мест с 11г. (пасс. спинка простая)">Orlando 5 мест с 11г. (пасс. спинка простая)</option>
                        <option value="Orlando 7 мест с 11г. (пасс. спинка простая)">Orlando 7 мест с 11г. (пасс. спинка простая)</option>
                        <option value="Orlando 5 мест с 13г. (пасс. спинка трансформер)">Orlando 5 мест с 13г. (пасс. спинка трансформер)</option>
                        <option value="Orlando 7 мест с 13г. (пасс. спинка трансформер)">Orlando 7 мест с 13г. (пасс. спинка трансформер)</option>
                        <option value="Rezzo">Rezzo</option>
                        <option value="Spark II с 05-10г.">Spark II с 05-10г.</option>
                        <option value="Spark III с 10г.">Spark III с 10г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="CITROEN" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="С-4 Hb 3-х дв. с 04-11г.">С-4 Hb 3-х дв. с 04-11г.</option>
                        <option value="С-4 Hb 5-ти дв. с 04-11г.">С-4 Hb 5-ти дв. с 04-11г.</option>
                        <option value="C-4 Hb II с 11г.">C-4 Hb II с 11г.</option>
                        <option value="C-4 Sd c 13г.">C-4 Sd c 13г.</option>
                        <option value="C-4 Airсross с 12-15г.">C-4 Airсross с 12-15г.</option>
                        <option value="С-5 (полная компл.) с подлокотником с 07г.">С-5 (полная компл.) с подлокотником с 07г.</option>
                        <option value="С-5 (простая компл.) без подлокотника с 07г.">С-5 (простая компл.) без подлокотника с 07г.</option>
                        <option value="C-Crosser с 07-13г.">C-Crosser с 07-13г.</option>
                        <option value="C-Elysee / Peugeot 301 (40/60) с 12г.">C-Elysee / Peugeot 301 (40/60) с 12г.</option>
                        <option value="Berlingo I (2 места) с 96-12г.">Berlingo I (2 места) с 96-12г.</option>
                        <option value="Berlingo I (5 мест) с 96-12г.">Berlingo I (5 мест) с 96-12г.</option>
                        <option value="Berlingo II (2 места) с 08г.">Berlingo II (2 места) с 08г.</option>
                        <option value="Berlingo II (5 мест) с 08г.">Berlingo II (5 мест) с 08г.</option>
                        <option value="Jumper (3 места) с 06г.">Jumper (3 места) с 06г.</option>
                        <option value="Jumpy II (8 мест) с 07г.">Jumpy II (8 мест) с 07г.</option>
                        <option value="Space Tourer I (8 мест) с 16г.">Space Tourer I (8 мест) с 16г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="DAEWOO" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Gentra">Gentra</option><option value="Lanos">Lanos</option>
                        <option value="Matiz">Matiz</option>
                        <option value="Nexia (горбы) с 94-08г.">Nexia (горбы) с 94-08г.</option>
                        <option value="Nexia (с подголовниками) с 08г.">Nexia (с подголовниками) с 08г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="DATSUN" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="on-Do / mi-Do">on-Do / mi-Do</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="DODGE" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Caliber (горбы) с 06-11г.">Caliber (горбы) с 06-11г.</option>
                        <option value="Caravan 7 мест (офис) с 01-07г. ">Caravan 7 мест (офис) с 01-07г. </option>
                        <option value="Caravan IV 7 мест с 01-07г.">Caravan IV 7 мест с 01-07г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="FAW" class="add active">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Besturn X80 с 13г.">Besturn X80 с 13г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="FIAT" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Albea (Base) Sd сплошн. с 02г.">Albea (Base) Sd сплошн. с 02г.</option>
                        <option value="Albea (Classic) Sd 40/60 (простые подголовники) с 02г.">Albea (Classic) Sd 40/60 (простые подголовники) с 02г.</option>
                        <option value="Albea (Comfort) Sd 40/60 (Г-образные подголовники) с 02г.">Albea (Comfort) Sd 40/60 (Г-образные подголовники) с 02г.</option>
                        <option value="Bravo II (198) Hb 07-14г.">Bravo II (198) Hb 07-14г.</option>
                        <option value="Doblo I/II 5 мест с 01г.">Doblo I/II 5 мест с 01г.</option>
                        <option value="Ducato 3 места с 06г.">Ducato 3 места с 06г.</option>
                        <option value="Ducato 9 мест">Ducato 9 мест</option>
                        <option value="Scudo II 8 мест с 07г.">Scudo II 8 мест с 07г.</option>
                        <option value="Sedici c 05-14г.">Sedici c 05-14г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="FORD" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="C-Max I минивэн с 03-10г.">C-Max I минивэн с 03-10г.</option>
                        <option value="C-Max II Grand минивэн 5 мест с 10г.">C-Max II Grand минивэн 5 мест с 10г.</option>
                        <option value="EcoSport рестайлинг с 17г.">EcoSport рестайлинг с 17г.</option>
                        <option value="EcoSport с 14г.">EcoSport с 14г.</option>
                        <option value="Escape II 40/60 с 07-12г.">Escape II 40/60 с 07-12г.</option><option value="Explorer V c 10г.">Explorer V c 10г.</option>
                        <option value="Fiesta V Hb с 01-08г.">Fiesta V Hb с 01-08г.</option>
                        <option value="Fiesta VI Sd/Hb с 08г.">Fiesta VI Sd/Hb с 08г.</option>
                        <option value="Focus I Sd/Hb/Wag с 98-05г.">Focus I Sd/Hb/Wag с 98-05г.</option>
                        <option value="Focus II Comfort Sd/Hb/Wag с 05-11г.">Focus II Comfort Sd/Hb/Wag с 05-11г.</option>
                        <option value="Focus II Ghia/Titanium Sd/Hb/Wag с 05-11г. ">Focus II Ghia/Titanium Sd/Hb/Wag с 05-11г. </option>
                        <option value="Kuga I Trend с 08-13г.">Kuga I Trend с 08-13г.</option>
                        <option value="Focus III Ambiente/Trend Sd/Hb/Wag с 11г.">Focus III Ambiente/Trend Sd/Hb/Wag с 11г.</option>
                        <option value="Focus III Sport/Titanium Sd/Hb/Wag с 11г.">Focus III Sport/Titanium Sd/Hb/Wag с 11г.</option>
                        <option value="Fusion Hb с 02-12г.">Fusion Hb с 02-12г.</option>
                        <option value="Galaxy I с 95-05г.">Galaxy I с 95-05г.</option>
                        <option value="Galaxy II c 06-15г.">Galaxy II c 06-15г.</option>
                        <option value="Ka I с 96-08г.">Ka I с 96-08г.</option>
                        <option value="Kuga I Titanium с 08-13г.">Kuga I Titanium с 08-13г.</option>
                        <option value="Kuga II c 12г.">Kuga II c 12г.</option>
                        <option value="Mondeo III Sd с 00-07г.">Mondeo III Sd с 00-07г.</option>
                        <option value="Mondeo III Wag с 00-07г.">Mondeo III Wag с 00-07г.</option>
                        <option value="Mondeo IV Sd/Hb/Wag с 07-15г.">Mondeo IV Sd/Hb/Wag с 07-15г.</option>
                        <option value="Mondeo IV Titanium Sd/Hb/Wag с 07-15г.">Mondeo IV Titanium Sd/Hb/Wag с 07-15г.</option>
                        <option value="Mondeo V с 15г.">Mondeo V с 15г.</option>
                        <option value="S-Max минивэн с 06г.">S-Max минивэн с 06г.</option>
                        <option value="Tourneo I (2 места) с 03-13г.">Tourneo I (2 места) с 03-13г.</option>
                        <option value="Tourneo I (5 мест) с 03-13г.">Tourneo I (5 мест) с 03-13г.</option>
                        <option value="Transit VII (3 места) с 06-15г.">Transit VII (3 места) с 06-15г.</option>
                        <option value="Transit VIII (3 места) с 14г.">Transit VIII (3 места) с 14г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="GEELY" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Atlas I c 16г.">Atlas I c 16г.</option>
                        <option value="Emgrand EC7 Sd c 09-16г.">Emgrand EC7 Sd c 09-16г.</option>
                        <option value="Emgrand X7 c 13г.">Emgrand X7 c 13г.</option>
                        <option value="FC (Vision) Sd c 06-11г.">FC (Vision) Sd c 06-11г.</option>
                        <option value="MK Cross Hb с 10-14г.">MK Cross Hb с 10-14г.</option>
                        <option value="MK Sd с 08-14г.">MK Sd с 08-14г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="GREATWALL" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="G-3 Deer (сплошн.) пикап">G-3 Deer (сплошн.) пикап</option>
                        <option value="G-5 SUV (50/50) пикап">G-5 SUV (50/50) пикап</option>
                        <option value="Hover H3 с 05-11г.">Hover H3 с 05-11г.</option>
                        <option value="Hover H5 с 11г.">Hover H5 с 11г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="HONDA" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Accord VII Sd с 02-07г.">Accord VII Sd с 02-07г.</option>
                        <option value="Accord VIII Sd с 08-13г.">Accord VIII Sd с 08-13г.</option>
                        <option value="Civic VII Sd (сплошн.) с 00-05г.">Civic VII Sd (сплошн.) с 00-05г.</option>
                        <option value="Civic VII Hb с 01-05г.">Civic VII Hb с 01-05г.</option>
                        <option value="Civic VIII Sd с 06-12г.">Civic VIII Sd с 06-12г.</option>
                        <option value="Civic VIII Hb с 06-12г.">Civic VIII Hb с 06-12г.</option>
                        <option value="Civic IX Sd c 12г.">Civic IX Sd c 12г.</option>
                        <option value="Civic IX Hb с 12г.">Civic IX Hb с 12г.</option>
                        <option value="CR-V I с 97-01г.">CR-V I с 97-01г.</option>
                        <option value="CR-V II с 02-07г.">CR-V II с 02-07г.</option>
                        <option value="CR-V III с 07-12г.">CR-V III с 07-12г.</option>
                        <option value="CR-V IV с 12г.">CR-V IV с 12г.</option>
                        <option value="HR-V (5-ти дверн.) с 98-06г.">HR-V (5-ти дверн.) с 98-06г.</option>
                        <option value="Jazz I c 01-08г.">Jazz I c 01-08г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="HYUNDAI" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Accent с 99-11г.">Accent с 99-11г.</option>
                        <option value="Creta с 16г.">Creta с 16г.</option>
                        <option value="Elantra III (XD) c 00-07г.">Elantra III (XD) c 00-07г.</option>
                        <option value="Elantra IV (HD) с 06-10г.">Elantra IV (HD) с 06-10г.</option>
                        <option value="Elantra V (MD) c 11-16г.">Elantra V (MD) c 11-16г.</option>
                        <option value="Elantra VI (AD) с 15г.">Elantra VI (AD) с 15г.</option>
                        <option value="Getz GL с 02-11г. (задн. сид. сплошное)">Getz GL с 02-11г. (задн. сид. сплошное)</option>
                        <option value="Getz GLS с 02-11г. (задн. сид. 40/60)">Getz GLS с 02-11г. (задн. сид. 40/60)</option>
                        <option value="H-1 (8 мест) c 07г.">H-1 (8 мест) c 07г.</option>
                        <option value="H-1 Grand Starex (9-12 мест) с 07г.">H-1 Grand Starex (9-12 мест) с 07г.</option>
                        <option value="i20 Hb с 08-14г.">i20 Hb с 08-14г.</option>
                        <option value="i30 I Hb с 07-12г.">i30 I Hb с 07-12г.</option>
                        <option value="i30 II Hb/Wag с 12-16г.">i30 II Hb/Wag с 12-16г.</option>
                        <option value="i40 Sd/Wag с 11г.">i40 Sd/Wag с 11г.</option>
                        <option value="ix-35 с 10-15г.">ix-35 с 10-15г.</option>
                        <option value="Matrix с 01-10г.">Matrix с 01-10г.</option>
                        <option value="Porter I (3 места)">Porter I (3 места)</option>
                        <option value="Santa Fe I (Classic) с 00-12г.">Santa Fe I (Classic) с 00-12г.</option>
                        <option value="Santa Fe II с 06-12г.">Santa Fe II с 06-12г.</option>
                        <option value="Santa Fe III c 12г.">Santa Fe III c 12г.</option>
                        <option value="Solaris I Hb с 10г.">Solaris I Hb с 10г.</option>
                        <option value="Solaris I Sd (40/60) с 10г.">Solaris I Sd (40/60) с 10г.</option>
                        <option value="Solaris I Sd (сплошн.) с 10г.">Solaris I Sd (сплошн.) с 10г.</option>
                        <option value="Solaris II Sd ">Solaris II Sd </option>
                        <option value="Sonata (EF) с 01-12г.">Sonata (EF) с 01-12г.</option>
                        <option value="Sonata (NF) с 04-10г.">Sonata (NF) с 04-10г.</option>
                        <option value="Sonata (YF) с 09-14г.">Sonata (YF) с 09-14г.</option>
                        <option value="Sonata (LF) с 14г.">Sonata (LF) с 14г.</option>
                        <option value="Terracan I c 01-07г.">Terracan I c 01-07г.</option>
                        <option value="Tradget 7 мест с 00-09г.">Tradget 7 мест с 00-09г.</option>
                        <option value="Tucson I c 04-10г.">Tucson I c 04-10г.</option>
                        <option value="Tucson III с 15г.">Tucson III с 15г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="KIA" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Carens III c 06-12г.">Carens III c 06-12г.</option>
                        <option value="Ceed I c 07-12г.">Ceed I c 07-12г.</option>
                        <option value="Ceed I Hb 3-х дв. c 07-12г.">Ceed I Hb 3-х дв. c 07-12г.</option>
                        <option value="Ceed II Hb 3-х дв. с 12г.">Ceed II Hb 3-х дв. с 12г.</option>
                        <option value="Ceed II с 12г.">Ceed II с 12г.</option>
                        <option value="Ceed III с 18г. (40/60) комплектация Classic/Comfort/Luxe">Ceed III с 18г. (40/60) комплектация Classic/Comfort/Luxe</option>
                        <option value="Ceed III с 18г. (три отдельных спинки) комплектация Prestige">Ceed III с 18г. (три отдельных спинки) комплектация Prestige</option>
                        <option value="Cerato I Hb с 04-09г.">Cerato I Hb с 04-09г.</option>
                        <option value="Cerato I Sd с 04-09г.">Cerato I Sd с 04-09г.</option>
                        <option value="Cerato II Coupe 2-х дв. c 09-13г.">Cerato II Coupe 2-х дв. c 09-13г.</option>
                        <option value="Cerato II Sd c 09-13г.">Cerato II Sd c 09-13г.</option>
                        <option value="Cerato III Sd с 13г.">Cerato III Sd с 13г.</option>
                        <option value="Cerato IV Sd с 18г.">Cerato IV Sd с 18г.</option>
                        <option value="Magentis II с 06-10г.">Magentis II с 06-10г.</option>
                        <option value="Optima III с 10-15г.">Optima III с 10-15г.</option>
                        <option value="Optima IV с 16г.">Optima IV с 16г.</option>
                        <option value="Picanto I с 04-11г.">Picanto I с 04-11г.</option>
                        <option value="Picanto II c 11-17г.">Picanto II c 11-17г.</option>
                        <option value="Picanto III c 17г.">Picanto III c 17г.</option>
                        <option value="Rio I Hb c 00-05г.">Rio I Hb c 00-05г.</option>
                        <option value="Rio I Sd с 00-05г.">Rio I Sd с 00-05г.</option>
                        <option value="Rio II Hb с 05-11г.">Rio II Hb с 05-11г.</option>
                        <option value="Rio II Sd с 05-11г.">Rio II Sd с 05-11г.</option>
                        <option value="Rio III Hb с 11г.">Rio III Hb с 11г.</option>
                        <option value="Rio III Sd c 11г.">Rio III Sd c 11г.</option>
                        <option value="Rio IV Sd/Hb (X-Line) с 17г.">Rio IV Sd/Hb (X-Line) с 17г.</option>
                        <option value="Sorento I (5мест) с 02-09г.">Sorento I (5мест) с 02-09г.</option>
                        <option value="Sorento II c 09г.">Sorento II c 09г.</option>
                        <option value="Soul I с 09-14г.">Soul I с 09-14г.</option>
                        <option value="Soul II с 14г.">Soul II с 14г.</option>
                        <option value="Spectra">Spectra</option>
                        <option value="Sportage I (50/50) с 94-05г.">Sportage I (50/50) с 94-05г.</option>
                        <option value="Sportage I Grand (50/50) с 99-04г.">Sportage I Grand (50/50) с 99-04г.</option>
                        <option value="Sportage II c 04-08г.">Sportage II c 04-08г.</option>
                        <option value="Sportage II (рестайл.) c 09-10г.">Sportage II (рестайл.) c 09-10г.</option>
                        <option value="Sportage III c 10-16г.">Sportage III c 10-16г.</option>
                        <option value="Sportage IV с 15г.">Sportage IV с 15г.</option>
                        <option value="Venga c 09г.">Venga c 09г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="LADA" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="1111 (Ока)">1111 (Ока)</option>
                        <option value="2107">2107</option>
                        <option value="2114-15 (09,099,13 / 2131 Нива 5дв.)">2114-15 (09,099,13 / 2131 Нива 5дв.)</option>
                        <option value="21213-21214 (Niva) 3-х дверн. с 93г.">21213-21214 (Niva) 3-х дверн. с 93г.</option>
                        <option value="Granta Sd/Hb (40/60)">Granta Sd/Hb (40/60)</option>
                        <option value="Granta Sd/Hb (сплошная)">Granta Sd/Hb (сплошная)</option>
                        <option value="Kalina I и II Sd/Hb/Wag с 04-14г.">Kalina I и II Sd/Hb/Wag с 04-14г.</option>
                        <option value="Kalina I (Sport) с 04-14г.">Kalina I (Sport) с 04-14г.</option>
                        <option value="Kalina II Hb/Wag с 15г.">Kalina II Hb/Wag с 15г.</option>
                        <option value="Largus (2 места)">Largus (2 места)</option>
                        <option value="Largus (5 мест) 40/60">Largus (5 мест) 40/60</option>
                        <option value="Largus (7 мест) 40/60 (3 ряд - 50/50)">Largus (7 мест) 40/60 (3 ряд - 50/50)</option>
                        <option value="Largus (5 мест) сплошной">Largus (5 мест) сплошной</option>
                        <option value="Largus (7 мест) сплошной (3 ряд - 50/50)">Largus (7 мест) сплошной (3 ряд - 50/50)</option>
                        <option value="Priora Sd / 2110 (до рестайлинга) с 96 и с 07-14г.">Priora Sd / 2110 (до рестайлинга) с 96 и с 07-14г.</option>
                        <option value="Priora Hb/Wag / 2112-11 (до рестайлинга) с 96 и с 07-14г.">Priora Hb/Wag / 2112-11 (до рестайлинга) с 96 и с 07-14г.</option>
                        <option value="Priora Sd (рестайлинг) c 14г.">Priora Sd (рестайлинг) c 14г.</option>
                        <option value="Priora Hb/Wag (рестайлинг) с 14г.">Priora Hb/Wag (рестайлинг) с 14г.</option>
                        <option value="Vesta / Vesta SW Cross">Vesta / Vesta SW Cross</option>
                        <option value="XRAY">XRAY</option>
                        <option value="2120 Надежда">2120 Надежда</option>
                        <option value="XRAY Cross (пассажирская спинка складывается)">XRAY Cross (пассажирская спинка складывается)</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="LANDROVER" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Freelander II с 06-12г.">Freelander II с 06-12г.</option>
                        <option value="Freelander II (рестайл.) с 12г.">Freelander II (рестайл.) с 12г.</option>
                        <option value="Discovery III 04-09г. (три отдельных кресла)">Discovery III 04-09г. (три отдельных кресла)</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="LEXUS" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="IS II Sd с 05-13г.">IS II Sd с 05-13г.</option>
                        <option value="RX III с 09-15г.">RX III с 09-15г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="LIFAN" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Breez">Breez</option><option value="X60 с 12г.">X60 с 12г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="MAZDA" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="3 Sd c 04-13г. (Hb с 04-09г.)">3 Sd c 04-13г. (Hb с 04-09г.)</option>
                        <option value="3 Hb c 10-13г.">3 Hb c 10-13г.</option>
                        <option value="3 Sd c 13г.">3 Sd c 13г.</option>
                        <option value="3 Hb c 13г.">3 Hb c 13г.</option>
                        <option value="5 (7 мест) с 05-15г.">5 (7 мест) с 05-15г.</option>
                        <option value="6 Sd 02-07г.">6 Sd 02-07г.</option>
                        <option value="6 Hb 02-07г.">6 Hb 02-07г.</option>
                        <option value="6 Sd c 07-12г.">6 Sd c 07-12г.</option>
                        <option value="6 Hb c 07-12г.">6 Hb c 07-12г.</option>
                        <option value="6 Sd с 12г.">6 Sd с 12г.</option>
                        <option value="6 Sd с 18г.">6 Sd с 18г.</option>
                        <option value="CX-5 (три отд. кресла) Touring, Active с 11-17г.">CX-5 (три отд. кресла) Touring, Active с 11-17г.</option>
                        <option value="CX-5 (40/60) Direct, Drive с 11-17г.">CX-5 (40/60) Direct, Drive с 11-17г.</option>
                        <option value="CX-5 II Active, Supreme с 17г.">CX-5 II Active, Supreme с 17г.</option>
                        <option value="CX-5 II Drive с 17г.">CX-5 II Drive с 17г.</option>
                        <option value="CX-7 с 06-13г.">CX-7 с 06-13г.</option>
                        <option value="BT-50 / Ford Ranger II с 06-12г.">BT-50 / Ford Ranger II с 06-12г.</option>
                        <option value="MPV II (7мест) с 99-06г.">MPV II (7мест) с 99-06г.</option>
                        <option value="626">626</option>
                        <option value="Tribute I c 00-07г.">Tribute I c 00-07г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="MERCEDES" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="A-klasse (W168) с 97-04 г. (простая комплектация)">A-klasse (W168) с 97-04 г. (простая комплектация)</option>
                        <option value="A-klasse (W168) с 97-04г. (заднее сиденье с механизмом для детских кресел)">A-klasse (W168) с 97-04г. (заднее сиденье с механизмом для детских кресел)</option>
                        <option value="A-klasse (W169) с 04-12г.">A-klasse (W169) с 04-12г.</option>
                        <option value="B-klasse (W245) с 05-11г.">B-klasse (W245) с 05-11г.</option>
                        <option value="C-klasse (W201) с 82-93г.">C-klasse (W201) с 82-93г.</option>
                        <option value="C-klasse (W202) Sd с 93-00г.">C-klasse (W202) Sd с 93-00г.</option>
                        <option value="C-klasse (W203) Sd (40/60) с 00-07г.">C-klasse (W203) Sd (40/60) с 00-07г.</option>
                        <option value="C-klasse (W203) Sd (сплошной) с 00-07г.">C-klasse (W203) Sd (сплошной) с 00-07г.</option>
                        <option value="C-klasse (W204) Sd (сплошной) с 07-15г.">C-klasse (W204) Sd (сплошной) с 07-15г.</option>
                        <option value="C-klasse (W204) Wag с 07-15г.">C-klasse (W204) Wag с 07-15г.</option>
                        <option value="E-klasse (W124) Sd с 85-95г.">E-klasse (W124) Sd с 85-95г.</option>
                        <option value="E-klasse (W124) Wag с 85-95г.">E-klasse (W124) Wag с 85-95г.</option>
                        <option value="E-klasse (W210) Sd с 95-02г.">E-klasse (W210) Sd с 95-02г.</option>
                        <option value="E-klasse (W212) Sd с 09г.">E-klasse (W212) Sd с 09г.</option>
                        <option value="Sprinter (3 места) с 06-13г.">Sprinter (3 места) с 06-13г.</option>
                        <option value="Sprinter (3 места) с 95-05г.">Sprinter (3 места) с 95-05г.</option>
                        <option value="Viano (W639) 7 мест с 04г.">Viano (W639) 7 мест с 04г.</option>
                        <option value="Vito III (W447) с 14г.">Vito III (W447) с 14г.</option>
                        <option value="Vito L (3 места)">Vito L (3 места)</option>
                        <option value="Vito L (8 мест)">Vito L (8 мест)</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="MINI" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="(F56) Cooper S Hatch 3-door с 13г.">(F56) Cooper S Hatch 3-door с 13г.</option>
                        <option value="Другая">Другая</option>
                    </select>                      
                    <select name="model" data-attribu="MITSUBISHI" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="ASX с 10г. с 12г.">ASX с 10г. с 12г.</option>
                        <option value="Carizma Hb c 95-03г.">Carizma Hb c 95-03г.</option>
                        <option value="Carizma Sd с 95-05г.">Carizma Sd с 95-05г.</option>
                        <option value="Colt c 04-12г.">Colt c 04-12г.</option>
                        <option value="Eclipse Cross c 17г.">Eclipse Cross c 17г.</option>
                        <option value="Eclipse III с 99-06г.">Eclipse III с 99-06г.</option>
                        <option value="Galant VIII с 96-06г.">Galant VIII с 96-06г.</option>
                        <option value="Grandis (7 мест) с 03-09г.">Grandis (7 мест) с 03-09г.</option>
                        <option value="L200 IV c 07-13г.">L200 IV c 07-13г.</option>
                        <option value="L200 IV (рестайлинг) с 13-15г.">L200 IV (рестайлинг) с 13-15г.</option>
                        <option value="L200 V с 15г.">L200 V с 15г.</option>
                        <option value="Lancer 9 Sd с 03-11г.">Lancer 9 Sd с 03-11г.</option>
                        <option value="Lancer 9 Sd (с 2-х литровым дв.) с 03-11г.">Lancer 9 Sd (с 2-х литровым дв.) с 03-11г.</option>
                        <option value="Lancer 9 Wag с 03-11г.">Lancer 9 Wag с 03-11г.</option>
                        <option value="Lancer 9 Wag (с 2-х литровым дв.) с 03-11г.">Lancer 9 Wag (с 2-х литровым дв.) с 03-11г.</option>
                        <option value="Lancer 10 Sd с 07-11г. (комплектация invite)">Lancer 10 Sd с 07-11г. (комплектация invite)</option>
                        <option value="Lancer 10 Sd с 07-11г. (комплектация intence)">Lancer 10 Sd с 07-11г. (комплектация intence)</option>
                        <option value="Lancer 10 Hb с 07-11г. (комплектация invite)">Lancer 10 Hb с 07-11г. (комплектация invite)</option>
                        <option value="Lancer 10 Hb с 07-11г. (комплектация intence)">Lancer 10 Hb с 07-11г. (комплектация intence)</option>
                        <option value="Lancer 10 Sd с 12г. (зад. спинка без надкрыльников)">Lancer 10 Sd с 12г. (зад. спинка без надкрыльников)</option>
                        <option value="Lancer 10 Sd (с 2-х литровым дв.) с 12г. (без надкрыльников)">Lancer 10 Sd (с 2-х литровым дв.) с 12г. (без надкрыльников)</option>
                        <option value="Montero Sport с 96-08г.">Montero Sport с 96-08г.</option>
                        <option value="Outlander I с 03-07г.">Outlander I с 03-07г.</option>
                        <option value="Outlander XL с 07-12г. с 07-13г.">Outlander XL с 07-12г. с 07-13г.</option>
                        <option value="Outlander III с 12г.">Outlander III с 12г.</option>
                        <option value="Pajero 3-4 (3-х дверн.) с 00г.">Pajero 3-4 (3-х дверн.) с 00г.</option>
                        <option value="Pajero 3-4 (5-ти дверн.) с 00г.">Pajero 3-4 (5-ти дверн.) с 00г.</option>
                        <option value="Pajero Sport I с 96-08г.">Pajero Sport I с 96-08г.</option>
                        <option value="Pajero Sport II с 08-13г.">Pajero Sport II с 08-13г.</option>
                        <option value="Pajero Sport II (рестайлинг) с 13г.">Pajero Sport II (рестайлинг) с 13г.</option>
                        <option value="Pajero Sport III с 15г.">Pajero Sport III с 15г.</option>
                        <option value="Space Star">Space Star</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="NISSAN" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Almera Classic (горбы) с 06-13г.">Almera Classic (горбы) с 06-13г.</option>
                        <option value="Almera Classic (с подголовниками) с 06-13г.">Almera Classic (с подголовниками) с 06-13г.</option>
                        <option value="Almera III (G15) 40/60 с 13г.">Almera III (G15) 40/60 с 13г.</option>
                        <option value="Almera III (G15) сплошная с 13г.">Almera III (G15) сплошная с 13г.</option>
                        <option value="Almera N16 Sd/Hb с 00-06г.">Almera N16 Sd/Hb с 00-06г.</option>
                        <option value="Juke с 10г.">Juke с 10г.</option>
                        <option value="Micra III (K12) 40/60 с 03-11г.">Micra III (K12) 40/60 с 03-11г.</option>
                        <option value="Navara III (D40) с 05-15г.">Navara III (D40) с 05-15г.</option>
                        <option value="Note с 05-14г.">Note с 05-14г.</option>
                        <option value="Pathfinder III (пасс. спинка трансформер) с 04-14г.">Pathfinder III (пасс. спинка трансформер) с 04-14г.</option>
                        <option value="Pathfinder III (передние спинки одинаковые) с 04-14г.">Pathfinder III (передние спинки одинаковые) с 04-14г.</option>
                        <option value="Patrol (Y61) с 97-10г.">Patrol (Y61) с 97-10г.</option>
                        <option value="Primera P12 Sd/Hb/Wag с 02-07г.">Primera P12 Sd/Hb/Wag с 02-07г.</option>
                        <option value="Qashqai I +2 (7 мест) с 08-15г.">Qashqai I +2 (7 мест) с 08-15г.</option>
                        <option value="Qashqai I с 06-13г.">Qashqai I с 06-13г.</option>
                        <option value="Qashqai II с 14г.">Qashqai II с 14г.</option>
                        <option value="Sentra VII (B17) с 14-17г.">Sentra VII (B17) с 14-17г.</option>
                        <option value="Tiida (С11) Hb с 04-14г.">Tiida (С11) Hb с 04-14г.</option>
                        <option value="Tiida (С11) Sd с 04-14г.">Tiida (С11) Sd с 04-14г.</option>
                        <option value="Tiida (С13) Hb c 15г.">Tiida (С13) Hb c 15г.</option>
                        <option value="X-Trail T30 с 00-07г.">X-Trail T30 с 00-07г.</option>
                        <option value="X-Trail T31 с 07-15г.">X-Trail T31 с 07-15г.</option>
                        <option value="X-Trail T32 с 15г.">X-Trail T32 с 15г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="OPEL" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Antara с 06-18г.">Antara с 06-18г.</option>
                        <option value="Astra H Sd/Hb с 04-14г.">Astra H Sd/Hb с 04-14г.</option>
                        <option value="Astra H Wag с 04-14г.">Astra H Wag с 04-14г.</option>
                        <option value="Astra J Sd/Hb с 09г.">Astra J Sd/Hb с 09г.</option>
                        <option value="Astra J Wag с 09г.">Astra J Wag с 09г.</option>
                        <option value="Corsa D Hb (40/60) с 06-14г.">Corsa D Hb (40/60) с 06-14г.</option>
                        <option value="Corsa D Hb (сплошн.) с 06-14г.">Corsa D Hb (сплошн.) с 06-14г.</option>
                        <option value="Insignia Sd/Hb/Wag с 08г.">Insignia Sd/Hb/Wag с 08г.</option>
                        <option value="Meriva I с 03-10г.">Meriva I с 03-10г.</option>
                        <option value="Meriva II c 10г.">Meriva II c 10г.</option>
                        <option value="Mokka с 12г. 13г.">Mokka с 12г. 13г.</option>
                        <option value="Vectra B Sd с 95-02г.">Vectra B Sd с 95-02г.</option>
                        <option value="Vectra C Sd с 02-08г.">Vectra C Sd с 02-08г.</option>
                        <option value="Zafira B (5 мест) с 05-14г.">Zafira B (5 мест) с 05-14г.</option>
                        <option value="Zafira C (5 мест) c 11г.">Zafira C (5 мест) c 11г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="PEUGEOT" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="107 (сплошн.) с 05-14г.">107 (сплошн.) с 05-14г.</option>
                        <option value="206 Sd с 98-12г.">206 Sd с 98-12г.</option>
                        <option value="206 Нb 5-ти дв. с 98-12г.">206 Нb 5-ти дв. с 98-12г.</option>
                        <option value="207 Hb с 06-13г.">207 Hb с 06-13г.</option>
                        <option value="3008 I (полная комплектация) с 09-16г.">3008 I (полная комплектация) с 09-16г.</option>
                        <option value="3008 I (простая комплектация) с 09-16г.">3008 I (простая комплектация) с 09-16г.</option>
                        <option value="301 c 12г. (смотрите раздел Citroen C-Elysee)">301 c 12г. (смотрите раздел Citroen C-Elysee)</option>
                        <option value="307 Hb c 01-08г.">307 Hb c 01-08г.</option>
                        <option value="307 Wag с 01-08г.">307 Wag с 01-08г.</option>
                        <option value="308 I Hb с 08-15г.">308 I Hb с 08-15г.</option>
                        <option value="308 Wag с 08-15г.">308 Wag с 08-15г.</option>
                        <option value="4007 с 07-12г.">4007 с 07-12г.</option>
                        <option value="4008 c 12г.">4008 c 12г.</option>
                        <option value="406 Sd c 95-04г.">406 Sd c 95-04г.</option>
                        <option value="408 c 12г.">408 c 12г.</option>
                        <option value="508 с 11г.">508 с 11г.</option>
                        <option value="Boxer с 06г.">Boxer с 06г.</option>
                        <option value="Expert (8 мест) с 07г.">Expert (8 мест) с 07г.</option>
                        <option value="Partner Original с 96-12г.">Partner Original с 96-12г.</option>
                        <option value="Partner Original с 96-12г.">Partner Original с 96-12г.</option>
                        <option value="Partner Tepee (2 места) с 08г.">Partner Tepee (2 места) с 08г.</option>
                        <option value="Partner Tepee (5 мест) с 08г.">Partner Tepee (5 мест) с 08г.</option>
                        <option value="Partner Tepee Family (3 отдельных кресла) с 08г.">Partner Tepee Family (3 отдельных кресла) с 08г.</option><option value="Traveller I 8 мест с 16г.">Traveller I 8 мест с 16г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="RENAULT" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Arkana c 2019">Arkana c 2019</option>
                        <option value="Dokker">Dokker</option>
                        <option value="Duster (40/60) с 11-14г. ">Duster (40/60) с 11-14г. </option>
                        <option value="Duster I (40/60) рестайлинг с 15 г.">Duster I (40/60) рестайлинг с 15 г.</option>
                        <option value="Duster I (сплошной) рестайлинг с 15 г.">Duster I (сплошной) рестайлинг с 15 г.</option>
                        <option value="Fluence (40/60) с 09г.">Fluence (40/60) с 09г.</option>
                        <option value="Fluence (сплошной) с 09г.">Fluence (сплошной) с 09г.</option>
                        <option value="Kangoo II (2 места) с 08г.">Kangoo II (2 места) с 08г.</option>
                        <option value="Kangoo II (5 мест) пасс. спинка простая с 08г.">Kangoo II (5 мест) пасс. спинка простая с 08г.</option>
                        <option value="Kangoo II (5 мест) полная комплектация с 08г.">Kangoo II (5 мест) полная комплектация с 08г.</option>
                        <option value="Kaptur с 16г.">Kaptur с 16г.</option>
                        <option value="Koleos (пасс. спинка простая) с 08г.">Koleos (пасс. спинка простая) с 08г.</option>
                        <option value="Koleos (пасс. спинка трансформер) с 08г.">Koleos (пасс. спинка трансформер) с 08г.</option>
                        <option value="Logan I с 04-15г.">Logan I с 04-15г.</option>
                        <option value="Logan II (сплошной) c 14г.">Logan II (сплошной) c 14г.</option>
                        <option value="Logan II 40/60 / Sandero II (без подушек безопасности) c 14г.">Logan II 40/60 / Sandero II (без подушек безопасности) c 14г.</option>
                        <option value="Master (3 места) c 13г.">Master (3 места) c 13г.</option>
                        <option value="Megane I (сплошной) с 98-03г.">Megane I (сплошной) с 98-03г.</option>
                        <option value="Megane II Classic (40/60) с 03-09г.">Megane II Classic (40/60) с 03-09г.</option>
                        <option value="Megane II Classic (сплошной) с 03-09г.">Megane II Classic (сплошной) с 03-09г.</option>
                        <option value="Megane II Extreme (40/60) с 03-09г.">Megane II Extreme (40/60) с 03-09г.</option>
                        <option value="Megane II Extreme (сплошной) с 03-09г.">Megane II Extreme (сплошной) с 03-09г.</option>
                        <option value="Sandero I (40/60) с 09-14г. с 12г. (без подушкек безопасности)">Sandero I (40/60) с 09-14г. с 12г. (без подушкек безопасности)</option>
                        <option value="Sandero I (сплошной) с 09-14г. (без подушкек безопасности)">Sandero I (сплошной) с 09-14г. (без подушкек безопасности)</option>
                        <option value="Sandero II / Logan II (с подушками безопасности) с 14г.">Sandero II / Logan II (с подушками безопасности) с 14г.</option>
                        <option value="Scenic II (5 мест) c 03-09г. (простая комплектация)">Scenic II (5 мест) c 03-09г. (простая комплектация)</option>
                        <option value="Scenic II (Grand/Lux) 5 мест c 03-09г. (полная комплектация)">Scenic II (Grand/Lux) 5 мест c 03-09г. (полная комплектация)</option>
                        <option value="Scenic III (5 мест) с 09-16г. (простая комплектация)">Scenic III (5 мест) с 09-16г. (простая комплектация)</option>
                        <option value="Scenic III (Grand/Lux) 5 мест c 09-16г. (полная комплектация)">Scenic III (Grand/Lux) 5 мест c 09-16г. (полная комплектация)</option>
                        <option value="Symbol Sd с 98-12г.">Symbol Sd с 98-12г.</option>
                        <option value="Trafic X83 (8 мест) с 01-14г.">Trafic X83 (8 мест) с 01-14г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="SEAT" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Ibiza IV Hb (5-ти дверный) сплошной с 08-17г.">Ibiza IV Hb (5-ти дверный) сплошной с 08-17г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="SKODA" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Fabia I Sd/Hb/Wag (40/60) c 99-07г.">Fabia I Sd/Hb/Wag (40/60) c 99-07г.</option>
                        <option value="Fabia II Hb (сплошная) с 07-14г.">Fabia II Hb (сплошная) с 07-14г.</option>
                        <option value="Fabia II Hb/Wag (40/60) с 07-14г.">Fabia II Hb/Wag (40/60) с 07-14г.</option>
                        <option value="Fabia II Sport (RS) Hb c 10г.">Fabia II Sport (RS) Hb c 10г.</option>
                        <option value="Kodiaq (Active) без подлокотника с 16г.">Kodiaq (Active) без подлокотника с 16г.</option>
                        <option value="Kodiaq (Ambition, Scout) с задним подлокотником с 16г.">Kodiaq (Ambition, Scout) с задним подлокотником с 16г.</option>
                        <option value="Octavia A-5 Ambiente (сплошная) с 07-13г.">Octavia A-5 Ambiente (сплошная) с 07-13г.</option>
                        <option value="Octavia A-5 Elegance (40/60) Hb/Wag с 07-13г.">Octavia A-5 Elegance (40/60) Hb/Wag с 07-13г.</option>
                        <option value="Octavia A-7 (пердн. кресла Sport) Hb/Wag с 13г.">Octavia A-7 (пердн. кресла Sport) Hb/Wag с 13г.</option>
                        <option value="Octavia A-7 Ambiente (без подлокотника) Hb/Wag с 13г.">Octavia A-7 Ambiente (без подлокотника) Hb/Wag с 13г.</option>
                        <option value="Octavia A-7 Elegance (с подлокотником) Hb/Wag с 13г.">Octavia A-7 Elegance (с подлокотником) Hb/Wag с 13г.</option>
                        <option value="Octavia Tour Hb/Wag с 96-10г.">Octavia Tour Hb/Wag с 96-10г.</option>
                        <option value="Octavia Tour Sport Hb с 96-10г.">Octavia Tour Sport Hb с 96-10г.</option>
                        <option value="Rapid (40/60) c 14г.">Rapid (40/60) c 14г.</option>
                        <option value="Rapid (сплошной) c 14г.">Rapid (сплошной) c 14г.</option>
                        <option value="Rapid Sport с 14г.">Rapid Sport с 14г.</option>
                        <option value="Roomster с 06-15г.">Roomster с 06-15г.</option>
                        <option value="Superb II (Ambiente) Hb с 08-13г.">Superb II (Ambiente) Hb с 08-13г.</option>
                        <option value="Superb II (Elegance) Hb с 08-13г.">Superb II (Elegance) Hb с 08-13г.</option>
                        <option value="Superb II (рестайлинг) Hb c 13-15г.">Superb II (рестайлинг) Hb c 13-15г.</option>
                        <option value="Superb III c 15г.">Superb III c 15г.</option>
                        <option value="Yeti (пасс. спинка трансформер) с 13г.">Yeti (пасс. спинка трансформер) с 13г.</option>
                        <option value="Yeti (передние спинки одинаковые) с 09г.">Yeti (передние спинки одинаковые) с 09г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="SMART" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Fortwo II Hb (3-х дв.) с 07-15г.">Fortwo II Hb (3-х дв.) с 07-15г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="SsangYong" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Actyon I с 06-09г.">Actyon I с 06-09г.</option>
                        <option value="Actyon I (рестайлинг) с 09-11г.">Actyon I (рестайлинг) с 09-11г.</option>
                        <option value="Actyon II с 10г.">Actyon II с 10г.</option>
                        <option value="Actyon Sports">Actyon Sports</option>
                        <option value="Kyron">Kyron</option><option value="Musso">Musso</option>
                        <option value="Rexton II с 07-12г.">Rexton II с 07-12г.</option>
                        <option value="Rexton III с 12г.">Rexton III с 12г.</option>
                        <option value="Staviс (7 мест) с 13г.">Staviс (7 мест) с 13г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="SUBARU" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Forester II c 02-08г.">Forester II c 02-08г.</option>
                        <option value="Forester III с 08-13г.">Forester III с 08-13г.</option>
                        <option value="Forester IV с 13г.">Forester IV с 13г.</option>
                        <option value="Impreza Sd/Hb с 07-11г.">Impreza Sd/Hb с 07-11г.</option>
                        <option value="XV с 11г.">XV с 11г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="SUZUKI" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Grand Vitara (50/50) с 96-06г.">Grand Vitara (50/50) с 96-06г.</option>
                        <option value="Grand Vitara (3-х дверн.) c 05-15г.">Grand Vitara (3-х дверн.) c 05-15г.</option>
                        <option value="Grand Vitara (5-ти дверн.) c 05-15г.">Grand Vitara (5-ти дверн.) c 05-15г.</option>
                        <option value="SX-4 I Hb (задн.сид 40/60) с 06-14г.">SX-4 I Hb (задн.сид 40/60) с 06-14г.</option>
                        <option value="SX-4 I (рестайл.) Hb (зад.сид сплошное) c 06-14г.">SX-4 I (рестайл.) Hb (зад.сид сплошное) c 06-14г.</option>
                        <option value="SX-4 Sd с 07-14г.">SX-4 Sd с 07-14г.</option>
                        <option value="SX-4 II Hb. / VITARA II с 15г.">SX-4 II Hb. / VITARA II с 15г.</option>
                        <option value="Jimny с 98г.">Jimny с 98г.</option>
                        <option value="Ignis I с 00-06г.">Ignis I с 00-06г.</option>
                        <option value="Liana Sd с 01-08г.">Liana Sd с 01-08г.</option>
                        <option value="Liana Wag c 01-08г.">Liana Wag c 01-08г.</option>
                        <option value="Splash I с 08г.">Splash I с 08г.</option>
                        <option value="Swift III с 04-10г.">Swift III с 04-10г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="TOYOTA" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Auris I Hb с 07-12г.">Auris I Hb с 07-12г.</option>
                        <option value="Auris II Hb с 12г.">Auris II Hb с 12г.</option>
                        <option value="Avensis I Sd с 97-03г.">Avensis I Sd с 97-03г.</option>
                        <option value="Avensis II Sd (40/60) с 03-09г.">Avensis II Sd (40/60) с 03-09г.</option>
                        <option value="Avensis II Sd (сплошной) с 03-09г.">Avensis II Sd (сплошной) с 03-09г.</option>
                        <option value="Avensis II Wag с 03-09г.">Avensis II Wag с 03-09г.</option>
                        <option value="Avensis III Sd/Wag c 09г.">Avensis III Sd/Wag c 09г.</option>
                        <option value="Camry XV30 Sd с 02-06г.">Camry XV30 Sd с 02-06г.</option>
                        <option value="Camry XV40 Sd с 06-11г.">Camry XV40 Sd с 06-11г.</option>
                        <option value="Camry XV50 / 55 Sd с 11-17г.">Camry XV50 / 55 Sd с 11-17г.</option>
                        <option value="Camry XV70 Sd с 17г.">Camry XV70 Sd с 17г.</option>
                        <option value="Corolla Sd с 00-07г.">Corolla Sd с 00-07г.</option>
                        <option value="Corolla Hb/Wag с 00-07г.">Corolla Hb/Wag с 00-07г.</option>
                        <option value="Corolla Sd c 07-13г.">Corolla Sd c 07-13г.</option>
                        <option value="Corolla Sd с 13г.">Corolla Sd с 13г.</option>
                        <option value="Fortuner II (5 мест) с 15г.">Fortuner II (5 мест) с 15г.</option>
                        <option value="Highlander I (за водительским креслом 40%) с 01-07г.">Highlander I (за водительским креслом 40%) с 01-07г.</option>
                        <option value="Highlander I (за водительским креслом 60%) с 01-07г.">Highlander I (за водительским креслом 60%) с 01-07г.</option>
                        <option value="Highlander II (U40) с 07-13г.">Highlander II (U40) с 07-13г.</option>
                        <option value="Hilux VII с 04-15г.">Hilux VII с 04-15г.</option>
                        <option value="Hilux VIII с 15г.">Hilux VIII с 15г.</option>
                        <option value="Land Cruiser Prado 90 с 96-02г.">Land Cruiser Prado 90 с 96-02г.</option>
                        <option value="Land Cruiser 100 с 97-07г.">Land Cruiser 100 с 97-07г.</option>
                        <option value="Land Cruiser Prado 120 (5 мест) с 02-09г.">Land Cruiser Prado 120 (5 мест) с 02-09г.</option>
                        <option value="Land Cruiser Prado 150 (5 мест) с 09г.">Land Cruiser Prado 150 (5 мест) с 09г.</option>
                        <option value="Land Cruiser Prado 150 рестайлинг 2 с 17г.">Land Cruiser Prado 150 рестайлинг 2 с 17г.</option>
                        <option value="Matrix / Pontiac Vibe с 02-08г.">Matrix / Pontiac Vibe с 02-08г.</option>
                        <option value="Prius II с 03-09г.">Prius II с 03-09г.</option>
                        <option value="Prius III с 09-15г.">Prius III с 09-15г.</option>
                        <option value="Rav-4 с 00-05г.">Rav-4 с 00-05г.</option>
                        <option value="Rav-4 с 06-13г.">Rav-4 с 06-13г.</option>
                        <option value="Rav-4 c 13г.">Rav-4 c 13г.</option>
                        <option value="Verso I с 09-12г.">Verso I с 09-12г.</option>
                        <option value="Yaris II Hb c 05-11г.">Yaris II Hb c 05-11г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="UAZ" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Hunter (1 выпуск)">Hunter (1 выпуск)</option>
                        <option value="Hunter (2 выпуск)">Hunter (2 выпуск)</option>
                        <option value="Hunter (3 выпуск) подгол. трапеция">Hunter (3 выпуск) подгол. трапеция</option>
                        <option value="Patriot c 07-14г.">Patriot c 07-14г.</option>
                        <option value="Patriot (рестайлинг 2) с 14г.">Patriot (рестайлинг 2) с 14г.</option>
                        <option value="Pickup с 08-14г.">Pickup с 08-14г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="VOLVO" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="C30 с 06-13г.">C30 с 06-13г.</option>
                        <option value="S40 II (40/60) с 04-12г.">S40 II (40/60) с 04-12г.</option>
                        <option value="S60 II с 10г.">S60 II с 10г.</option>
                        <option value="XC60 I c 08-17г.">XC60 I c 08-17г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="VW" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="Volkswagen Amarok с 10г.">Volkswagen Amarok с 10г.</option>
                        <option value="Beetle I (A4) (ЖУК) с 98-10г.">Beetle I (A4) (ЖУК) с 98-10г.</option>
                        <option value="Caddy (2 места) с 04г.">Caddy (2 места) с 04г.</option>
                        <option value="Caddy (5 мест) с 04г.">Caddy (5 мест) с 04г.</option>
                        <option value="Caddy (5 мест) IV с 15г.">Caddy (5 мест) IV с 15г.</option>
                        <option value="Crafter (3 места) с 06г. c 06-13г.">Crafter (3 места) с 06г. c 06-13г.</option>
                        <option value="Golf III Hb с 91-97г.">Golf III Hb с 91-97г.</option>
                        <option value="Golf IV / Bora c 97-04г.">Golf IV / Bora c 97-04г.</option>
                        <option value="Golf VII Hb с 13г.">Golf VII Hb с 13г.</option>
                        <option value="Golf Plus с 04-14г. (без столиков).">Golf Plus с 04-14г. (без столиков).</option>
                        <option value="Jetta V Sd c 05-11г. / Golf V и VI с 03-12г.">Jetta V Sd c 05-11г. / Golf V и VI с 03-12г.</option>
                        <option value="Jetta VI c 11г.">Jetta VI c 11г.</option>
                        <option value="Jetta VI (комплектация Life) c 17г.">Jetta VI (комплектация Life) c 17г.</option>
                        <option value="Passat B3-B4 Sd/Wag (40/60) c 88-97г.">Passat B3-B4 Sd/Wag (40/60) c 88-97г.</option>
                        <option value="Passat B3-B4 Sd (сплошной) с 88-97г.">Passat B3-B4 Sd (сплошной) с 88-97г.</option>
                        <option value="Passat B5-B5+ Sd с 97-05г.">Passat B5-B5+ Sd с 97-05г.</option>
                        <option value="Passat B5-B5+ Wag с 97-05г.">Passat B5-B5+ Wag с 97-05г.</option>
                        <option value="Passat B6-B7 Sd (TrendLine) c 05-15г.">Passat B6-B7 Sd (TrendLine) c 05-15г.</option>
                        <option value="Passat B6-B7 Wag (TrendLine) с 05-15г.">Passat B6-B7 Wag (TrendLine) с 05-15г.</option>
                        <option value="Passat B6-B7 Sd (SportLine/ComfortLine) с 05-15г.">Passat B6-B7 Sd (SportLine/ComfortLine) с 05-15г.</option>
                        <option value="Polo Sd (40/60) с 09г.">Polo Sd (40/60) с 09г.</option>
                        <option value="Polo Sd (сплошной) с 09г.">Polo Sd (сплошной) с 09г.</option>
                        <option value="Polo Hb (40/60) с 09г.">Polo Hb (40/60) с 09г.</option>
                        <option value="Polo Hb (сплошной) с 09г.">Polo Hb (сплошной) с 09г.</option>
                        <option value="Sharan I (5 мест) с 95-00г.">Sharan I (5 мест) с 95-00г.</option>
                        <option value="Sharan I (7мест) с 95-00г.">Sharan I (7мест) с 95-00г.</option>
                        <option value="Sharan I (рестайл.) 5 мест с 00-10г.">Sharan I (рестайл.) 5 мест с 00-10г.</option>
                        <option value="Sharan I (рестайл.) 7 мест с 00-10г.">Sharan I (рестайл.) 7 мест с 00-10г.</option>
                        <option value="T-4 (2 места) с 90-03г.">T-4 (2 места) с 90-03г.</option>
                        <option value="T-4 (3 места) с 90-03г.">T-4 (3 места) с 90-03г.</option>
                        <option value="T-4 (8 мест) с 90-03г.">T-4 (8 мест) с 90-03г.</option>
                        <option value="T-4 (9 мест) с 90-03г.">T-4 (9 мест) с 90-03г.</option>
                        <option value="T-5 (2 места) до рестайлинга с 03-09г.">T-5 (2 места) до рестайлинга с 03-09г.</option>
                        <option value="T-5 (3 места) до рестайлинга с 03-09г.">T-5 (3 места) до рестайлинга с 03-09г.</option>
                        <option value="T-5 (8 мест) до рестайлинга с 03-09г.">T-5 (8 мест) до рестайлинга с 03-09г.</option>
                        <option value="T-5 (9 мест) до рестайлинга с 03-09г.">T-5 (9 мест) до рестайлинга с 03-09г.</option>
                        <option value="Т-5 / Т-6 (2 места) рестайлинг с 09г.">Т-5 / Т-6 (2 места) рестайлинг с 09г.</option>
                        <option value="Т-5 / Т-6 (3 места) рестайлинг с 09г.">Т-5 / Т-6 (3 места) рестайлинг с 09г.</option>
                        <option value="T-5 / Т-6 (8 мест) рестайлинг с 09г.">T-5 / Т-6 (8 мест) рестайлинг с 09г.</option>
                        <option value="T-5 / Т-6 (9 мест) рестайлинг с 09г.">T-5 / Т-6 (9 мест) рестайлинг с 09г.</option>
                        <option value="T-5 (7 мест) Multivan c 03г.">T-5 (7 мест) Multivan c 03г.</option>
                        <option value="Tiguan I (со столиками) с 07-16г.">Tiguan I (со столиками) с 07-16г.</option>
                        <option value="Tiguan II trendline (без столиков) c 17г.">Tiguan II trendline (без столиков) c 17г.</option>
                        <option value="Tiguan II comfortline/highline (со столиками) c 17г.">Tiguan II comfortline/highline (со столиками) c 17г.</option>
                        <option value="Touareg I (за водителем 40%) с 02-10г.">Touareg I (за водителем 40%) с 02-10г.</option>
                        <option value="Touareg I рестайл. (за водителем 60%) с 07-10г.">Touareg I рестайл. (за водителем 60%) с 07-10г.</option>
                        <option value="Touareg II c 10г.">Touareg II c 10г.</option>
                        <option value="Touran I / II (TrendLine) с 03-15г.">Touran I / II (TrendLine) с 03-15г.</option>
                        <option value="Touran I / II (HighLine) с 03-15г.">Touran I / II (HighLine) с 03-15г.</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="ГАЗ" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="3110-105">3110-105</option>
                        <option value="Volga Siber / Chrysler Sebring / Dodge Stratus">Volga Siber / Chrysler Sebring / Dodge Stratus</option>
                        <option value="Другая">Другая</option>
                    </select>
                    <select name="model" data-attribu="ГАЗЕЛЬ" class="add">
                        <option disabled="" selected="">Выберите модель авто</option>
                        <option value="3 места">3 места</option>
                        <option value="7 мест">7 мест</option>
                        <option value="NEXT (3 места) c 14г.">NEXT (3 места) c 14г.</option>
                        <option value="NEXT (3 места) удлиненная спинка c 16г.">NEXT (3 места) удлиненная спинка c 16г.</option>
                        <option value="Баргузин">Баргузин</option>
                        <option value="Другая">Другая</option>
                    </select>
                </div>
                <input name="seatcover" type="text" id="seatcover" disabled placeholder="Модель чехла">
                <h3 class="order_form_install"><input type="checkbox" name="install" id="installID">+ Установка чехлов 70 EUR <a href="#">?</a></h3>
                <button class="btn order_form_btn" type="submit">Заказать</button>
            </form>
            <div class="order_cardselected">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catalog/carcaver.png" alt="orderimg" class="orderimg" id="orderimgID">
                <p class="catalog_items_item_desc">Серый-Серый</p>
                <p class="catalog_items_item_price">135 eur</p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
