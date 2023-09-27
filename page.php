<?php
// Включаем заголовок страницы WordPress
get_header();

// Выводим контент
echo '<main class="content container">';

get_sidebar(); // Вставляем сайдбар из файла sidebar.php

echo '<div class="content_left">';

// Выводим заголовок страницы
echo '<h1>' . get_the_title() . '</h1>';

// Выводим содержимое страницы
if (have_posts()) {
    while (have_posts()) {
        the_post();

        // Проверяем, является ли текущий пост продуктом WooCommerce
        if (function_exists('wc_get_product') && wc_get_product(get_the_ID())) {
            // Получаем объект продукта WooCommerce
            $product = wc_get_product(get_the_ID());

            // Получаем информацию о продукте
            $product_title = $product->get_name(); // Заголовок продукта
            $product_price = $product->get_price(); // Цена продукта
            $product_url = get_permalink(); // URL продукта

            // Вывод информации о продукте
            echo '<h2>' . $product_title . '</h2>';
            echo '<p>Ценауу: ' . wc_price($product_price) . '</p>';
            echo '<a href="' . $product_url . '">Подробнее</a>';
        } else {
            // Если текущая запись не является продуктом WooCommerce, выведите стандартный контент
            the_title('<h2>', '</h2>');
            the_content();
        }
    }
}


// Здесь можно продолжить вывод другого контента или товаров

echo '</div>';
echo '</main>';

// Включаем подвал страницы WordPress
get_footer();
?>
