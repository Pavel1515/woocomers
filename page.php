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
        the_content();
    }
}

// Здесь можно продолжить вывод другого контента или товаров

echo '</div>';
echo '</main>';

// Включаем подвал страницы WordPress
get_footer();
?>
