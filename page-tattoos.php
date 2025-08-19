<?php get_header();?>
<?php get_template_part('preloader/preloader');?>

<article>
<div class="my-3"></div>


<?php get_template_part('sub-menu');?>

<h1 class="text-center">Tattoos</h1>

<div class="container">
<div class="content">
	
	
	

	
	
	
	
<div class="grid">
	
	
   <?php
	   $args = array(
  'post_type' => 'tattoo', // Assuming 'tattoo' is your CPT
  'posts_per_page' => 8,
   'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
   'order' => 'ASC', // Ascending order
   'orderby' => 'date' // Order by date
);

$query = new WP_Query($args);

	
	if ($query->have_posts()) :
	 while ($query->have_posts()) : $query->the_post(); ?>
	
<div class="grid__item card" data-size="1280x857">
<a href="<?php the_post_thumbnail_url();?>" class="img-wrap"><img src="<?php the_post_thumbnail_url();?>" alt="img06" />
<div class="card-body description description--grid">
<h3><?php the_title();?></h3>
<p><?php the_content(); ?></p>
<div class="details">
<ul>
<li><i class="icon fas fa-palette"></i><span>Black & Grey</span></li>
<li><i class="icon fas fa-hand"></i><span>Freehand</span></li>
<li><i class="icon fas fa-clock"></i><span>5 Hours</span></li>


</ul>
</div>
</div>
</a>
</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>




</div><!-- /grid -->
<div class="preview">
<button class="action action--close"><i class="fa-solid fa-times"></i><span class="text-hidden">Close</span></button>
<div class="description description--preview"></div>
</div>
<!-- /preview -->
</div>
<!-- /content -->





















</article>



<?php
// Pagination
$total_pages = $query->max_num_pages; // Use the custom query's max_num_pages
$current_page = max(1, get_query_var('paged'));

if ($total_pages > 1): ?>
<nav aria-label="Page navigation example">
<ul class="pagination pagination-lg justify-content-center">
<li class="page-item <?= ($current_page <= 1) ? 'disabled' : '' ?>">
<a class="page-link" href="<?= get_pagenum_link($current_page - 1) ?>" aria-label="Previous">
<span aria-hidden="true">Prev</span>
</a>
</li>
<?php for ($i = 1; $i <= $total_pages; $i++): ?>
<li class="page-item <?= ($i == $current_page) ? 'active' : '' ?>"><a class="page-link" href="<?= get_pagenum_link($i) ?>"><?= $i ?></a></li>
<?php endfor; ?>
<li class="page-item <?= ($current_page >= $total_pages) ? 'disabled' : '' ?>">
<a class="page-link" href="<?= get_pagenum_link($current_page + 1) ?>" aria-label="Next">
<span aria-hidden="true">Next</span>
</a>
</li>
</ul>
</nav>
<?php endif; ?>





<section class="fdb-block bg-gray text-light py-5 my-1">
   <div class="container">
	 <div class="row justify-content-center">
	   <div class="col-12  col-md-10 col-lg-8 col-xl-6 text-center">
	   <svg height="80" class="icon my-3">
		 <use xlink:href="#ship-1"></use>
	   </svg>
		 <h1>Join Our Newsletter!</h1>
		 <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
		 <div class="input-group mt-4 mb-4">
		   <input type="text" class="form-control" placeholder="Enter your email address">
		   <div class="input-group-append">
			 <button class="btn btn-primary" type="button">Submit</button>
		   </div>
		 </div>
		 <p class="h5"><em>*Your email address is safe with us. We never share your email address.</em></p>
	   </div>
	 </div>
   </div>
 </section>



<?php get_footer('tattoos');?>