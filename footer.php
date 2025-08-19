</div> <!--#Wrapper-->


<footer>
<div class="col-auto mx-auto text-center copyright p-3 m-1 fs-h1 wht"><span>&copy; 2023 Kraken Ink NYC. All Rights Reserved.</span></div>

</footer>

<?php wp_footer(); ?>








<?php
	// You can add or change the conditions here depending on your needs
	if (is_front_page()) {
		// Code for the front page
	} elseif (is_page('artwork')) {
		// Code for the woodwork page
	} elseif (is_page('videos')) {
		// Code for the sculptures page
?>

<?php
	} elseif (is_page('merch')) {
		// Code for the collection page
	
?>
<script src="<?php bloginfo('template_url'); ?>/glides/glide.min.js"></script>

<script>
 var glide = new Glide('.glide', {
  type: 'carousel',
  perView: 4,
  focusAt: 'center',
  breakpoints: {
	800: {
	  perView: 2
	},
	480: {
	  perView: 1
	}
  }
})

glide.mount()
</script>




<?php
	} elseif (is_page('single-product')) {
		// Code for the collection page
	
?>
<script src="<?php bloginfo('template_url'); ?>/glides/glide.min.js"></script>

<script>
 var glide = new Glide('.glide', {
  type: 'carousel',
  perView: 4,
  focusAt: 'center',
  breakpoints: {
	800: {
	  perView: 2
	},
	480: {
	  perView: 1
	}
  }
})

glide.mount()
</script>
<?php
} else {
	// Code for all other pages
}
?>
	
</body>
</html>
