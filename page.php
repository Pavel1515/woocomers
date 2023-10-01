<?php get_header(); ?>
<?php global $post;
if ($post) {
    $page_slug = $post->post_name;
    $args = array(
        'post_type' => 'product', // Тип записей для продуктов WooCommerce
        'product_cat' => $post->post_name, // Слаг категории товаров
        'posts_per_page' => -1, // Количество товаров (-1 для вывода всех)
    );
    
    $products = new WP_Query($args);
    
    if ($products->have_posts()) :
        while ($products->have_posts()) : $products->the_post();
            // Здесь выводите содержимое каждого продукта
            the_title(); 
            echo '</br>';// Пример вывода заголовка продукта
          
            // и т.д.
        endwhile;
        wp_reset_postdata();
    else :
        // Если продукты не найдены
        echo 'Продукты не найдены.';
    endif;
    
    
    
}else{
    echo '<div>Товаров в групе не найденно</div>';
}



 ?>
<?php get_footer(); ?>