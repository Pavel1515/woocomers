<div class="sidebar">
	<aside>
		<h3 class="widget-title"><span>КАТЕГОРИЯ </span></h3>
		<ul class="product-categories">
			<?php
			// Получаем список категорий WooCommerce
			$product_categories = get_terms(
				array(
					'taxonomy' => 'product_cat',
					// Таксономия категорий товаров
					'hide_empty' => false,
					// Показываем пустые категории
				)
			);

			if (!empty($product_categories)) {
				foreach ($product_categories as $category) {
					echo '<li  class="cat-item ">';
					echo '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
					echo '</li>';
				}
			}

			?>
		</ul>
	</aside>
</div>