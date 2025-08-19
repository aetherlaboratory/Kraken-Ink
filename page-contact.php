<?php get_header(); ?>
<?php get_template_part( 'preloader/preloader' );?>

<section class="fdb-block py-0">
      <div class="container my-5" style="background-image: url(imgs/shapes/9.svg);">
        <div class="row">
          <div class="col">
            <div class="fdb-box fdb-touch">
              <div class="row text-center justify-content-center">
                <div class="col-12 col-md-9 col-lg-7">
                  <h1>Contact Us</h1>
                  <p class="lead">Use the Form below to Contact Me directly about important inquires &amp; incase of emergencies, please <u class="text-warning">"Do Not"</u> use this form to request a tattoo appointment, or a consultation, or even a tattoo design, this form is only for general business and website inquiry issues, problems, or emergencies. <br>Instead please visit this link if you: <a class="text-danger" href="<?php echo home_url();?>/new-tattoo">Need A Tattoo</a>.</p>
                </div>
              </div>
    
              <div class="row justify-content-center pt-4">
                <div class="col-12 col-md-8">
                  <form>
                    <div class="row">
                      <div class="col-12 col-md">
                        <input type="text" class="form-control" placeholder="Name">
                      </div>
                      <div class="col-12 col-md mt-4 mt-md-0">
                        <input type="text" class="form-control" placeholder="Email">
                      </div>
                    </div>
    
                    <div class="row mt-4">
                      <div class="col">
                        <input type="email" class="form-control" placeholder="Subject">
                      </div>
                    </div>
    
                    <div class="row mt-4">
                      <div class="col">
                        <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
                      </div>
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