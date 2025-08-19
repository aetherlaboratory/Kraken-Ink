<?php
function get_category_svg_icon($post_id) {
	// Get all categories for the post
	$categories = get_the_terms($post_id, 'category');

	// Check if any categories were found
	if ( !empty($categories) && !is_wp_error($categories) ) {
		// Loop through each category and check if it matches your defined categories
		foreach ( $categories as $category ) {
			switch ($category->slug) {
				case 'japanese':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#japanese"></use></svg>';
				case 'traditional':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#traditional"></use></svg>';
				case 'neo-traditional':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#neo-traditional"></use></svg>';
				case 'realism':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#realism"></use></svg>';
				case 'portrait':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#portraits"></use></svg>';
				case 'pinup':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#pinups"></use></svg>';
				case 'anime-cartoon':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#anime-cartoon"></use></svg>';
				case 'newschool':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#newschool"></use></svg>';
				case 'illustrative':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#illustrative"></use></svg>';
				case 'watercolor':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#watercolor"></use></svg>';
				case 'folk':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#folk"></use></svg>';
				case 'tribal':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#tribal"></use></svg>';
				case 'abstract':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#abstract"></use></svg>';
				case 'bio-mech':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#bio-mech1"></use></svg>';
				case 'schematic':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#schematic"></use></svg>';
				case 'typography':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#typography"></use></svg>';
				case 'lineart':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#lineart"></use></svg>';
				case 'stippling':
					return '<svg width="2em" height="2em" fill="white"><use xlink:href="#stippling"></use></svg>';
				// Add more cases as needed for each category
			}
		}
	}

	// Default icon if no specific category is matched
	return '<svg width="2em" height="2em" fill="white"><use xlink:href="#default"></use></svg>';
}
?>
