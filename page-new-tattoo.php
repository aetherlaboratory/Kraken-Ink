<?php get_header(); ?>
<?php get_template_part( 'preloader/preloader' );?>

<section class="fdb-block py-0">
	  <div class="container my-5" style="background-image: url(imgs/shapes/9.svg);">
		<div class="row">
		  <div class="col">
			<div class="fdb-box fdb-touch">
			  <div class="row text-center justify-content-center">
				<div class="col-12 col-md-9 col-lg-7">
				  <h1>Need A Tattoo?...</h1>
				  <p class="lead">Use the Form below to request a tattoo consultation or a tattoo appointment, or even a tattoo design. This form is only for clients seeking new tattoo work. Please <u class="text-warning">"Do Not"</u> use this form for general business and website inquiry issues, problems, or emergencies. Instead please visit the <a class="text-danger" href="<?php echo home_url();?>/contact">Contact Us</a> page.</p>
				</div>
			  </div>
	
			  <div class="row justify-content-center pt-4">
				<div class="col-12 col-md-8">
				  <form>
					<div class="row">
					  <div class="col-12 col-md">
						<input type="text" class="form-control" placeholder="Full Legal Name">
					  </div>
					  <div class="col-12 col-md mt-4 mt-md-0">
						<input type="text" class="form-control" placeholder="Email">
					  </div>
					</div>
					
					
					<div class="row mt-4">
					  <div class="col">
						<input type="phone" class="form-control" placeholder="Phone Number">
					  </div>
					</div>
					
	
					<div class="row mt-4">
					  <div class="col">
						<input type="email" class="form-control" placeholder="Title This Message">
					  </div>
					</div>
	
					<div class="row mt-4">
					  <div class="col">
						<textarea class="form-control" name="message" rows="3" placeholder="Describe Your Tattoo."></textarea>
					  </div>
					</div>
					
					<br>
					
					<div class="mb-3">
					  <label for="formFileMultiple" class="form-label">Add Reference Image(s) Of Your Tattoo</label>
					  <input class="form-control" type="file" id="formFileMultiple" multiple>
					</div>
					
					<div class="row mt-4">
					  <div class="col text-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
				  </form>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>


	  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 
		<?php the_content(); ?>
	  <?php endwhile; endif; ?>
 
	  <?php get_sidebar(); ?>


<?php get_footer(); ?>