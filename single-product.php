<?php get_header();
global $product;
?>
<?php while (have_posts()):
  the_post(); ?>
  <main class="container product-container">
    <div class="image-container">
      <?php
      global $product;
      if ($product) {
        $product_image_id = $product->get_image_id();
        $product_image_url = wp_get_attachment_url($product_image_id);

        echo '<img src="' . esc_url($product_image_url) . '" alt="' . esc_attr(get_the_title()) . '" />';
      }
      ?>
    </div>
    <div class="product-info">
      <h2>
        <?php the_title(); ?>
      </h2>
      <div class="brends-info">
        <div class="title-brend">Adidas</div>
      </div>
      <p class="price">
        <?php
        global $product;

        if ($product) {
          echo wc_price($product->get_price());
        }
        ?>
      </p>
      <p class="description_product">
        Engineered with pro-level features and performance, the
        12.3-effective-megapixel D300 combines brand new technologies with
        advanced features inherited from Nikon's newly announced D3
        professional digital SLR camera to offer serious photographers...
      </p>
      <h3>Размер</h3>
      <div class="size-container">
        <a href="">4</a>
        <a href="">5</a>
        <a href="">6</a>
        <a href="">7</a>
        <a href="">8</a>
        <a href="">4</a>
        <a href="">5</a>
        <a href="">6</a>
        <a href="">7</a>
        <a href="">8</a>
        <a href="">4</a>
        <a href="">5</a>
        <a href="">6</a>
        <a href="">7</a>
        <a href="">8</a>
      </div>
      <h3>Цвет</h3>
      <div class="color-container">
        <div style="background-color: red" class="color"></div>
        <div style="background-color: red" class="color"></div>
        <div style="background-color: red" class="color"></div>
        <div style="background-color: red" class="color"></div>
        <div style="background-color: red" class="color"></div>
      </div>
      <h3>Количество</h3>
      <div class="button-product">
        <input type="text" />
        <button>Add to cart</button>
      </div>
    </div>
  </main>

<?php endwhile; ?>
<?php get_footer(); ?>