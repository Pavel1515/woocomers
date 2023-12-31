<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>

  <header class="container">
    <div class="container_header">
      <a href="<?=esc_url(home_url());?>">
        <div class="container_logo"></div>
      </a>
      <div class="flex-left">
        <div class="container_menu">
          <?php wp_nav_menu(); ?>
        </div>
        <div class="menu_mobile">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="container_info_icons">
          <div class="card">
            <a href="<?php echo wc_get_cart_url(); ?>">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/icons8-cart-64.png" alt="cart" /><span>
                <?php
                $cart_count = WC()->cart->get_cart_contents_count();
                echo $cart_count;
                ?>
              </span></a>
          </div>
        </div>
      </div>
    </div>
    <?php woocommerce_breadcrumb() ?>
  </header>