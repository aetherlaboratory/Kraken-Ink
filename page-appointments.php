<?php get_header();?>
<?php get_template_part('preloader/preloader');?>


<article>

    
</article>
 <h1 class="page-title text-center my-3">Appointments</h1>
 <h4 class="text-secondary col-lg-7 mx-auto text-center">Below is an appointment booking calendar that allows you to see when my books are open and pick a time slot.</h4>

 <div class="container my-5">
 <?php echo do_shortcode('[booked-calendar]'); ?>
 </div>
 
      <?php get_sidebar(); ?>

<?php get_footer();?>