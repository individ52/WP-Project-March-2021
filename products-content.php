<?php
$product_id = get_the_ID(); 
$product_src = get_the_post_thumbnail_url($product_id, 'thumbnail');
?>
<li class="catalog_items_item">
    <img src="<?php echo $product_src; ?>" alt="blackgrey">
    <p class="catalog_items_item_desc"><?php the_title(); ?></p>
    <p class="catalog_items_item_price">135 eur</p>
</li>