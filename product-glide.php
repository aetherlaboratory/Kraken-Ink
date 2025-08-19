
<div class="glide products my-5">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <?php 
      $args = array(
      'post_type' => 'product',      // Specify the post type as product
      'posts_per_page' => 5,         // Number of products to retrieve
       'order' => 'ASC', // Ascending order
       'orderby' => 'date', // Order by date
      'tax_query' => array(          // WordPress Taxonomy Query
      array(
      'taxonomy' => 'product_cat',  // WooCommerce product category taxonomy
      'field' => 'slug',           // Use category slug to specify the category
      'terms' => 'uncategorized',  // The slug of the category
      ),
      ),
      );
     $query = new WP_Query($args);
     if ($query->have_posts()) : ?>
     <?php while ($query->have_posts()) : $query->the_post(); ?>

      <li class="glide__slide slide"><img src="<?php the_post_thumbnail_url();?>" class="img-fluid"></li>
<?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
  <li class="glide__slide slide"><img src="https://placehold.co/400x300" class="img-fluid"></li>
      <?php endif; ?>
      
    </ul>
  </div>

  <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
  </div>

  </div>