<?php
/**
 * Color scheme, style variations for core blocks, sample content, and post formats setup
 *
 * @package c9
 */

 // Registers a style variation for separators
register_block_style(
    'core/separator',
    array(
        'name'         => 'black-bar',
        'label'        => __( 'Full Width Black Bar' ),
    )
);

register_block_style(
    'c9-blocks/grid',
    array(
        'name'         => 'gray-diagonal',
        'label'        => __( 'Gray Diagonal Background' ),
	)

);

register_block_style(
    'c9-blocks/grid',
	array(
			'name'		  => 'dark-gradient-left',
			'label'		  => __( 'Left Side Dark Gradient Background' ),
	)
);

register_block_style(
    'core/image',
	array(
			'name'		  => 'img-shadow',
			'label'		  => __( 'Shadow Below' ),
	)
);

register_block_style(
    'c9-blocks/heading',
	array(
			'name'		  => 'abel-heading',
			'label'		  => __( 'Second Heading' ),
	)
);

register_block_style(
    'core/paragraph',
	array(
			'name'		  => 'black-bar',
			'label'		  => __( 'Black Bar Behind' ),
	)
);

if (!function_exists('c9_client_setup')) {
    function c9_client_setup() {

		add_theme_support('starter-content',
			array(
				'attachments'	=> array(
					'c9work-home-img'	=> array(
						'post_title'	=> 'C9 Work Home Img',
						'post_content'	=> 'C9 Work Sample Home Photo',
						'file'			=> 'client/client-assets/img/clark-young-fQxMGkYXqFU-unsplash.jpg'
					),
					'c9work-about-img'	=> array(
						'post_title'	=> 'C9 Work About Img',
						'post_content'	=> 'C9 Work Sample About Photo',
						'file'			=> 'client/client-assets/img/jezael-melgoza-HYQvV8wWX18-unsplash.jpg'
					),
					'c9work-contact-img'	=> array(
						'post_title'	=> 'C9 Work Contact Img',
						'post_content'	=> 'C9 Work Sample Contact Photo',
						'file'			=> 'client/client-assets/img/set-of-tool-wrench-162553.jpg'
					),
					'c9work-services-img'	=> array(
						'post_title'	=> 'C9 Work News Img',
						'post_content'	=> 'C9 Work Sample News Photo',
						'file'			=> 'client/client-assets/img/krzysztof-kowalik-djdoRnnKLyo-unsplash.jpg'
					),
				),
				'posts'	=> array(
					'home'			=> array(
						'comment_status'	=> 'closed',
						'post_content'		=> '
<div class="c9-grid gray-diagonal p-5 c9-scroll c9-grid-has-background" style="min-height:100vh;background-color:rgba(0,0,0,1)"><div class="c9-image-container c9-image-mobile-center-center c9-image-mobile-size-cover" style="background-position:50% 100%;background-image:url(https://c9.covertnine.com/wp-content/uploads/2020/07/clark-young-fQxMGkYXqFU-unsplash.jpg);background-repeat:no-repeat;background-size:cover"></div><div class="c9-overlay-container" style="background-color:rgba(0,0,0,.6);mix-blend-mode:normal"></div>
<div class="container c9-column-container c9-scroll c9-layout-columns-1 c9-is-vertically-aligned-bottom one-column" style="min-height:53vh"><div class="c9-layout-column-wrap c9-block-layout-column-gap-1 c9-is-responsive-column">
<div class="c9-block-layout-column c9-column text-left c9-is-vertically-aligned-bottom"><div class="c9-column-innner">
<div style="height:98px" aria-hidden="true" class="wp-block-spacer"></div>



<div class="section-heading c9-heading text-left"><h2 class="c9-sh subhead-h3" style="color:#FEC50A">The hardest parts known to mankind</h2></div>



<div class="section-heading c9-heading text-left"><h1 class="c9-txl display-3" style="color:#ffffff">backed by Sasquatch Hunters<br>designed by explosives experts</h1></div>



<p style="font-size:10px" class="has-text-color has-color-white-color">Download this WordPress Theme for free along with the blocks plugin that makes the layouts possible from COVERT NINE by clicking on the link in the footer</p>
</div></div>
</div></div>



<div class="container c9-column-container c9-scroll c9-layout-columns-1 one-column"><div class="c9-layout-column-wrap c9-block-layout-column-gap-2 c9-is-responsive-column">
<div class="c9-block-layout-column c9-column text-left"><div class="c9-column-innner">
<div class="c9-horizontal-tabs" data-tab-active="tab-featured"><ul class="nav nav-tabs d-flex justify-content-center" role="tablist"><li class="nav-item"><a data-toggle="tab" role="tab" href="#htab-tab-featured-0" class="nav-link active" id="tab-button-tab-featured">Featured</a></li><li class="nav-item"><a data-toggle="tab" role="tab" href="#htab-tab-tools-0" class="nav-link" id="tab-button-tab-tools">TOOLS</a></li><li class="nav-item"><a data-toggle="tab" role="tab" href="#htab-tab-on-sale-0" class="nav-link" id="tab-button-tab-on-sale">On Sale</a></li></ul><div class="c9-tabs-content tab-content" style="background-color:#ffffff">
<div class="c9-horizontal-tabs-tab tab-pane fade show active" role="tabpanel" id="htab-tab-featured-0" aria-labelledby="tab-featured">
						<div class="container-narrow">
						<h2>Tab One</h2>
						<p>Maecenas viverra dignissim euismod. Sed finibus dolor a dolor volutpat tempor. Phasellus vehicula varius tellus nec mattis. Curabitur ut diam ut quam tempus vehicula. </p>
						<p>Mauris sed eros sed augue facilisis tempus. Duis vulputate gravida eros, in cursus massa. Vivamus at gravida elit. Nulla facilisi</p>
						</div>
</div>



<div class="c9-horizontal-tabs-tab tab-pane fade" role="tabpanel" id="htab-tab-tools-0" aria-labelledby="tab-tools">
						<div class="container-narrow">

						<h2>Tab Two</h2>
						<p>Maecenas viverra dignissim euismod. Sed finibus dolor a dolor volutpat tempor. Phasellus vehicula varius tellus nec mattis. Curabitur ut diam ut quam tempus vehicula. </p>
						<p>Mauris sed eros sed augue facilisis tempus. Duis vulputate gravida eros, in cursus massa. Vivamus at gravida elit. Nulla facilisi</p>
						</div>
</div>



<div class="c9-horizontal-tabs-tab tab-pane fade" role="tabpanel" id="htab-tab-on-sale-0" aria-labelledby="tab-on-sale">
						<div class="container-narrow">

						<h2>Tab Three</h2>
						<p>Maecenas viverra dignissim euismod. Sed finibus dolor a dolor volutpat tempor. Phasellus vehicula varius tellus nec mattis. Curabitur ut diam ut quam tempus vehicula. </p>

						<p>Mauris sed eros sed augue facilisis tempus. Duis vulputate gravida eros, in cursus massa. Vivamus at gravida elit. Nulla facilisi</p>
						</div>
</div>
</div></div>
</div></div>
</div></div>
</div>



<div class="c9-posts-grid p-5 c9-scroll" style="min-height:20vh">
<section class="c9-block-post-grid featuredpost p-5 my-5 container align" style="">

<h2>Latest News</h2>

<div class="c9-post-grid-items is-grid columns-3">

<article id="post-3024" class="c9-post-grid-item sticky post-3024 post type-post status-publish format-standard has-post-thumbnail hentry category-in-the-news tag-sample-content tag-wordpress-plugin tag-wordpress-theme"><div class="c9-block-post-grid-image"><a href="#" rel="bookmark" aria-hidden="true" tabindex="-1"><img width="1900" height="1080" loading="lazy" src="https://work.covertnine.com/wp-content/uploads/2019/10/anton-darius-thesollers-5Kt4DKFUiQk-unsplash-1900x1080.jpg" class="attachment-c9-feature-hd-wide size-c9-feature-hd-wide" alt="" srcset="https://work.covertnine.com/wp-content/uploads/2019/10/anton-darius-thesollers-5Kt4DKFUiQk-unsplash-1900x1080.jpg 1900w, https://work.covertnine.com/wp-content/uploads/2019/10/anton-darius-thesollers-5Kt4DKFUiQk-unsplash-85x49.jpg 85w, https://work.covertnine.com/wp-content/uploads/2019/10/anton-darius-thesollers-5Kt4DKFUiQk-unsplash-85x49@2x.jpg 170w" sizes="(max-width: 1900px) 100vw, 1900px" loading="lazy" /></a></div><div class="c9-block-post-grid-text"><header class="c9-block-post-grid-header"><h3 class="c9-block-post-grid-title"><a href="#" class="c9-smooth" rel="bookmark">Big Header: Core WP Blocks, photo gallery lightbox, paragraphs, aligns, cover image, quotes, pullquotes, tags</a></h3><div class="c9-block-post-grid-byline"></div></header><div class="c9-block-post-grid-excerpt"></div></div></article>

<article id="post-1532" class="c9-post-grid-item post-1532 post type-post status-publish format-standard has-post-thumbnail hentry category-in-the-news"><div class="c9-block-post-grid-image"><a href="#" rel="bookmark" aria-hidden="true" tabindex="-1"><img width="1920" height="1080" loading="lazy" src="https://work.covertnine.com/wp-content/uploads/2019/10/clark-young-fQxMGkYXqFU-unsplash-1920x1080.jpg" class="attachment-c9-feature-hd-wide size-c9-feature-hd-wide" alt="" loading="lazy" /></a></div><div class="c9-block-post-grid-text"><header class="c9-block-post-grid-header"><h3 class="c9-block-post-grid-title"><a href="#" class="c9-smooth" rel="bookmark">Capitalize on Low Hanging Fruit to Identify Value</a></h3><div class="c9-block-post-grid-byline"></div></header><div class="c9-block-post-grid-excerpt"></div></div></article>

<article id="post-1531" class="c9-post-grid-item post-1531 post type-post status-publish format-standard has-post-thumbnail hentry category-in-the-news tag-cyberpunk"><div class="c9-block-post-grid-image"><a href="#" rel="bookmark" aria-hidden="true" tabindex="-1"><img width="1900" height="1080" loading="lazy" src="https://work.covertnine.com/wp-content/uploads/2019/10/patrick-hendry-6xeDIZgoPaw-unsplash-1900x1080.jpg" class="attachment-c9-feature-hd-wide size-c9-feature-hd-wide" alt="" loading="lazy" /></a></div><div class="c9-block-post-grid-text"><header class="c9-block-post-grid-header"><h3 class="c9-block-post-grid-title"><a href="#" class="c9-smooth" rel="bookmark">Podcasting operational change management inside of workflows</a></h3><div class="c9-block-post-grid-byline"></div></header><div class="c9-block-post-grid-excerpt"></div></div>
	</article>
</div>
</section>
</div>



<div style="background-color:rgba(241,241,241,1);text-align:right" class="c9-cta c9-block-cta container-fluid alignfull p-5"><div class="row"><div class="c9-cta-content col-12 col-md-8"><div class="c9-cta-text c9-h" style="font-size:27px"><p>Download this gutenberg-powered WordPress Theme for free from covert nine</p></div></div><div class="c9-cta-button col-12 col-md-4"><a href="#" target="_self" rel="noopener noreferrer" class="wp-block-button__link c9-button-shape-square c9-button-size-extralarge" style="color:#000000;background-color:#FEC50A">Download C9 work theme</a></div></div></div>

									',
						// 'thumbnail'			=> '{{c9work-home-img}}',
					),
					'about'			=> array(
						'thumbnail'			=> '{{c9work-about-img}}',
					),
					'services'		=> array(
						'thumbnail'			=> '{{c9work-services-img}}',
						'post_type'			=> 'page',
						'post_title'		=> __( 'Services', 'c9-work' ),
						'post_content'		=> '
						<div class="container-narrow">
						<h1>' . __( 'About Our Services' , 'c9-work' ) . '</h1>
						<p>Maecenas viverra dignissim euismod. Sed finibus dolor a dolor volutpat tempor. Phasellus vehicula varius tellus nec mattis. Curabitur ut diam ut quam tempus vehicula. Mauris sed eros sed augue facilisis tempus. Duis vulputate gravida eros, in cursus massa. Vivamus at gravida elit. Nulla facilisi.
						</p>
						<p>Etiam augue mi, porttitor ut odio ut, elementum tincidunt enim. Donec nec quam semper, cursus lectus ac, tempor risus. Phasellus efficitur molestie justo, a dictum ante accumsan ut. Aenean tellus sem, eleifend laoreet leo eu, vehicula tempor enim. Suspendisse sed mauris euismod, consectetur dui eget, viverra est. Cras maximus molestie neque, vitae venenatis turpis sodales sed.</p>

<p>Donec ac erat eget libero sollicitudin commodo vitae sed est. Cras gravida arcu sit amet vestibulum elementum. In sagittis nibh lorem. Suspendisse et ante et nisl accumsan sodales non in nunc. Integer volutpat rutrum dui, in posuere turpis. Quisque quis fringilla tortor, sit amet blandit turpis. Praesent viverra orci nec tempus consequat. Praesent et congue metus.</p>

<p>Ut ac fermentum nunc, luctus dignissim dui. Suspendisse feugiat sed urna non luctus. Curabitur facilisis malesuada metus nec bibendum. Etiam pretium eleifend tincidunt. Vivamus ac lacinia risus. Vestibulum sit amet venenatis magna. Maecenas fringilla tellus dictum efficitur vestibulum. Nullam ac pretium enim, in blandit diam. Morbi volutpat tristique elit ut tristique. Curabitur imperdiet quis dolor non suscipit. Cras elementum scelerisque metus et porta. Sed tempor velit blandit mauris efficitur congue. Nunc malesuada mattis mattis. Suspendisse eros quam, rutrum et ante id, convallis porttitor dolor. Suspendisse potenti. Maecenas eget libero quis nunc vestibulum sodales.</p>
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>

</div>
						',
					),
					'contact'		=> array(
						// 'thumbnail'			=> '{{c9work-contact-img}}',
						'post_content'		=> '
						<div class="c9-grid gray-diagonal p-5 c9-scroll c9-grid-has-background" style="min-height:51vh;background-color:rgba(0,0,0,1)"><div class="c9-image-container c9-image-mobile-center-center c9-image-mobile-size-cover" style="background-position:51.61290322580645% 0%;background-image:url(https://c9.covertnine.com/wp-content/uploads/2020/07/set-of-tool-wrench-162553.jpg);background-repeat:no-repeat;background-size:cover"></div><div class="c9-overlay-container" style="background-color:rgba(0,0,0,.7);mix-blend-mode:normal"></div>
<div class="align-bottom container-narrow c9-column-container c9-scroll c9-layout-columns-2 c9-is-vertically-aligned-center c9-2-col-equal" style="min-height:39vh"><div class="c9-layout-column-wrap c9-block-layout-column-gap-2 c9-is-responsive-column">
<div class="c9-block-layout-column c9-column text-left c9-is-vertically-aligned-center"><div class="c9-column-innner">
<p></p>
</div></div>



<div class="c9-block-layout-column c9-column text-left c9-is-vertically-aligned-center"><div class="c9-column-innner">
<div class="section-heading c9-heading text-left"><h2 class="c9-sh" style="color:#FEC50A">Have questions?</h2></div>



<div class="section-heading c9-heading text-left"><h1 class="c9-txl display-3" style="color:#ffffff">contact us</h1></div>
</div></div>
</div></div>



<div class="container-narrow c9-column-container p-4 c9-scroll c9-layout-columns-1 one-column" style="min-height:10vh"><div class="c9-overlay-container" style="background-color:rgba(255,255,255,1);mix-blend-mode:overlay"></div><div class="c9-layout-column-wrap c9-block-layout-column-gap-2 c9-is-responsive-column">
<div class="c9-block-layout-column c9-column text-left c9-is-vertically-aligned-bottom"><div class="c9-column-innner">
<p class="has-text-align-center is-style-black-bar"><strong>check out frequently asked questions</strong></p>



<div class="c9-toggles is-style-toggles-small accordion" id="accordion-0">
<div class="c9-toggles-toggle"><div class="c9-toggles-item-heading" id="c9-toggles-heading1-0" data-toggle="collapse" data-target="#c9-toggles-collapse1-0"><div class="mb-0"><span class="c9-toggles-toggle-label">Can I buy products from you directly?</span><span class="c9-toggles-item-collapse"><span class="fas fa-angle-right"></span></span></div></div><div class="c9-toggles-item-content collapse" id="c9-toggles-collapse1-0" data-parent="#accordion-0"><div>
<p>We do not sell  products directly to consumers so check out our <a href="https://work.covertnine.com/where-to-buy/">Where To Buy</a> page.</p>
</div></div></div>



<div class="c9-toggles-toggle"><div class="c9-toggles-item-heading" id="c9-toggles-heading2-0" data-toggle="collapse" data-target="#c9-toggles-collapse2-0"><div class="mb-0"><span class="c9-toggles-toggle-label">Where can I find the style number?</span><span class="c9-toggles-item-collapse"><span class="fas fa-angle-right"></span></span></div></div><div class="c9-toggles-item-content collapse" id="c9-toggles-collapse2-0" data-parent="#accordion-0"><div>
<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>



<p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>



<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>



<p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>
</div></div></div>



<div class="c9-toggles-toggle"><div class="c9-toggles-item-heading" id="c9-toggles-heading3-0" data-toggle="collapse" data-target="#c9-toggles-collapse3-0"><div class="mb-0"><span class="c9-toggles-toggle-label">What is your Return Policy and Warranty?</span><span class="c9-toggles-item-collapse"><span class="fas fa-angle-right"></span></span></div></div><div class="c9-toggles-item-content collapse" id="c9-toggles-collapse3-0" data-parent="#accordion-0"><div>
<p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>



<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
</div></div></div>



<div class="c9-toggles-toggle"><div class="c9-toggles-item-heading" id="c9-toggles-heading4-0" data-toggle="collapse" data-target="#c9-toggles-collapse4-0"><div class="mb-0"><span class="c9-toggles-toggle-label">Why do you discontinue certain styles?</span><span class="c9-toggles-item-collapse"><span class="fas fa-angle-right"></span></span></div></div><div class="c9-toggles-item-content collapse" id="c9-toggles-collapse4-0" data-parent="#accordion-0"><div>
<p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>



<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
</div></div></div>



<div class="c9-toggles-toggle"><div class="c9-toggles-item-heading" id="c9-toggles-heading5-0" data-toggle="collapse" data-target="#c9-toggles-collapse5-0"><div class="mb-0"><span class="c9-toggles-toggle-label">How can my organization be considered for donations?</span><span class="c9-toggles-item-collapse"><span class="fas fa-angle-right"></span></span></div></div><div class="c9-toggles-item-content collapse" id="c9-toggles-collapse5-0" data-parent="#accordion-0"><div>
<p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>



<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
</div></div></div>



<div class="c9-toggles-toggle"><div class="c9-toggles-item-heading" id="c9-toggles-heading6-0" data-toggle="collapse" data-target="#c9-toggles-collapse6-0"><div class="mb-0"><span class="c9-toggles-toggle-label">Can I waterproof or condition my stuff?</span><span class="c9-toggles-item-collapse"><span class="fas fa-angle-right"></span></span></div></div><div class="c9-toggles-item-content collapse" id="c9-toggles-collapse6-0" data-parent="#accordion-0"><div>
<p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>



<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
</div></div></div>
</div>



<hr class="wp-block-separator is-style-black-bar"/>



<div class="section-heading c9-heading text-left"><h1 class="c9-txl display-1" style="color:#000000">contact us</h1></div>


                INSERT FORM.


<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



<div class="section-heading c9-heading text-left"><h1 class="c9-txl display-1" style="color:#000000">LOcation</h1></div>



<p>Corporate Office<br>2600 Main Rd, Ste. 999<br>Chicago, IL 60696</p>
</div></div>
</div></div>
</div>
						'
					),
					'news'			=> array(
						'post_content'			=> __( 'This page will show all of the news posts once you have populated your database with news items.', 'c9-work'),
					),
				),
				'options'			=> array(
					'show_on_front'		=> 'page',
					'page_on_front'		=> '{{home}}',
					'page_for_posts' 	=> '{{news}}',
					'blogname'			=> 'C9 Work',
					'blogdescription'	=> __('A WordPress Theme for small businesses with WooCommerce product catalogs, forms, and mega menu support.', 'c9-work'),
				),
				'theme_mods'		=> array(
					'c9_show_search'		=> 'show',
					'c9_copyright_content'	=> '&copy; 2020. <a href="https://www.covertnine.com" title="Web design company in Chicago" target="_blank">WordPress Website design by COVERT NINE</a>.',
					'c9_default_font'		=> 'yes',
					'c9_heading_font'		=> 'Bebas Neue',
					'c9_subheading_font'	=> 'Lobster',
					'c9_body_font'			=> '',
					'c9_author_visible'		=> 'hide',
					'c9_blog_sidebar'		=> 'hide',
					'c9_archive_sidebar'	=> 'hide'

				),
				'nav_menus'		=> array(
					'primary'		=> array(
						'name'			=>	__( 'Top Navigation Menu', 'c9-work' ),
						'items'			=> array(
									'page_home',
									'page_about',
									'page_services'	=> array(
										'type'		=> 'post_type',
										'object'	=> 'page',
										'object_id'	=> '{{services}}',
									),
									'page_news',
									'page_contact',
						),
					),
				),
				'widgets'	=> array(
					'footerfull'	=> array(
						'c9work_resources'	=> array(
							'text',
							array(
								'title'	=> __('Resources Menu', 'c9-work'),
								'text'	=> '<ul id="menu-footer-resources" class="menu">
									<li class="menu-item">
										<a href="#">About</a>
									</li>
									<li class="menu-item">
										<a href="#">News</a>
									</li>
									<li class="menu-item">
										<a href="#">Library</a>
									</li>
									<li class="menu-item">
										<a href="#">Style Guide</a>
									</li>
									<li class="menu-item">
										<a href="#">Terms &amp; Conditions</a>
									</li>
								</ul>'
							)
						),
						'c9work_company'	=> array(
							'text',
							array(
								'title'	=> __( 'Company Menu', 'c9-work' ),
								'text'	=> '<ul id="menu-footer-company" class="menu">
									<li class="menu-item">
										<a href="#">Catalog</a>
									</li>
									<li class="menu-item">
										<a href="#">Corporate Governance</a>
									</li>
									<li class="menu-item">
										<a href="#">Safety Information</a>
									</li>
									<li class="menu-item">
										<a href="#">Contact Us</a>
									</li>
									<li class="menu-item">
										<a href="#">Privacy Policy</a>
									</li>
								</ul>'
							)
						),
						'meta_custom' => array( 'meta', array(
							'title'	=> __('WordPress Meta', 'c9-work' ),
						) ),
						'c9work_about' => array(
							'text',
							array(
								'title'	=> __( 'About C9 Work Theme', 'c9-work' ),
								'text'	=> __('Be sure to activate the <strong>C9 Blocks Plugin</strong> during theme setup. The blocks plugin includes the custom WordPress blocks for tabs, toggles, and the responsive grid system that makes the theme look super duper.', 'c9-work'),
							)
						)
					),
					'right-sidebar'	=> array(
						'search',
						'c9work_about' => array(
							'text',
							array(
								'title'	=> 'About C9 Work Theme',
								'text'	=> 'Be sure to activate the <strong>C9 Blocks Plugin</strong> during theme setup. The blocks plugin includes the custom WordPress blocks for tabs, toggles, and the responsive grid system that makes the theme look super duper.'
							)
						),
						'meta_custom' => array( 'meta', array(
							'title'	=> 'Meta Widget',
						) ),
					),
					'left-sidebar'	=> array(
						'search',
						'c9work_about' => array(
							'text',
							array(
								'title'	=> 'About C9 Work Theme',
								'text'	=> 'Be sure to activate the <strong>C9 Blocks Plugin</strong> during theme setup. The blocks plugin includes the custom WordPress blocks for tabs, toggles, and the responsive grid system that makes the theme look super duper.'
							)
						),
						'meta_custom' => array( 'meta', array(
							'title'	=> 'Meta Widget',
						) ),
					),
				),
			)
		);

		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

        // Make specific theme colors available in the editor.
        add_theme_support('editor-color-palette', array(
            array(
                'name' => 'orange',
                'color'    => '#E8983A',
                'slug' => 'color-orange',
            ),
            array(
                'name' => 'yellow',
                'color' => '#FEC50A',
                'slug'    => 'color-yellow',
            ),
            array(
                'name' => 'gray',
                'color'    => '#ADB1B2',
                'slug'    => 'color-gray',
            ),
            array(
                'name' => 'white',
                'color'    => '#ffffff',
                'slug'    => 'color-white',
            ),
            array(
                'name' => 'black',
                'color'    => '#000000',
                'slug'    => 'color-black',
            ),
        ));
    }
}

add_action('after_setup_theme', 'c9_client_setup');
