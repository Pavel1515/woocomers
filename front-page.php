<?php
// Включаем заголовок страницы WordPress
get_header(); ?>

<main class="content container">
<?php get_sidebar();?>
	<div class="content_left">


		<?php

		// Получаем все товары WooCommerce
		$products = wc_get_products(
			array(
				'status' => 'publish',
				'limit' => -1,
			)
		);

		if (!empty($products)) {
			foreach ($products as $product) {
				$product_link = esc_url(get_permalink($product->get_id()));
				?>
				<a href="<?=$product_link?>" class="cart">
					<?php

					$product_name = esc_html($product->get_name());

					// Получаем идентификатор первой изображения товара
					$image_id = $product->get_image_id();

					// Получаем URL первой изображения товара
					if (!empty($image_id)) {
						$image_url = wp_get_attachment_image_url($image_id, 'full');
					}

					// Получаем ссылку на товар
					$product_link = esc_url(get_permalink($product->get_id()));

					// Получаем цену товара
					$product_price = wc_price($product->get_price());

					// Выводим информацию о товаре
					echo '<div class="cart_photo">
					<img src="' . esc_url($image_url) . '"  alt="" />
				</div>
				<div class="cart-title">' . $product_name . '</div>
				<div class="cart_footer">
					<p class="price"><strike>5555</strike>546</p>
				</div>;'

						?>
				</a>
				<?php

			}
		}
		?>

	</div>
</main>
<?php
// Включаем подвал страницы WordPress
get_footer();
?>