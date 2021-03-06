<?php
$product_id = get_the_ID(); 
$product_src = get_the_post_thumbnail_url($product_id, 'thumbnails');
$product_categories = get_the_terms($product_id, 'product-categories');
$product = get_post();
echo "<pre>";
echo "</pre>";
$product_categories_slugs = '';
$product_categories_descr = '';
foreach($product_categories as $category) {
    $product_categories_slugs .= "$category->slug,";
    $product_categories_descr .= "$category->description";
}
$product_categories_slugs = substr($product_categories_slugs, 0, -1);
?>
<li class="catalog_items_item" data-category="<?php echo $product_categories_slugs; ?>">
    <img src="<?php echo $product_src; ?>" alt="blackgrey">
    
    <div class="catalog_items_item_desc"><?php echo ($page_id == 25) ? the_title() : the_excerpt(); ?></div>
    <p class="catalog_items_item_price"><?php echo $product_categories_descr ?></p>
</li>