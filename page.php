<?php 
    get_header();  // Read WP header.php
    include 'read_wp.php'; //Read custom fields functions
    $home_fields = get_home(); //Read custom fields into $home_fields array. 
    $about_fields = get_about(); //Read custom fields into $about_fields array. 
    //echo  "<pre>Test Output: "; print_r($home_fields);
?>

	<!-- Page Wrapper -->
	<div id="page-wrapper">
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Panel (Welcome) -->
			<section class="panel banner right"  id="first">
				<div class="content color0 span-3-75">
					<img src="<?php echo get_theme_file_uri('images/PFGC-logo-1.png') ?>" class="logo" /><hr>
					<a  href="<?php echo $home_fields['map_link'] ?>"  target=_blank class="icon brands icon"> 
						<i class="fas fa-map-marker-alt  fa-icon-medium fa-map-styling"></i><?php echo $home_fields['address'] ?>
					</a>
					<span> <i class="fas fa-mobile-alt fa-icon-medium fa-map-styling" ></i><?php echo $home_fields['telephone'] ?></span>
					<span><i class="far fa-clock fa-icon-medium fa-map-styling fa-clock-styling"></i> <?php echo $home_fields['store_hours'] ?> </span>
					<a href="<?php echo $home_fields['facebook'] ?>" target=_blank class="icon brands icon"> 
						<i class="fab fa-facebook fa-icon-medium fa-coupon-styling"></i> Facebook 
					</a>
					<a href="<?php echo $home_fields['weekly_ads_url'] ?>" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>
					<a href="#Special" target=_blank class="icon brands icon"> 
						<i class="fas fa-tags fa-icon-small fa-coupon-styling"></i>Fall Inventory 
					</a>
					<a href="#Member" target=_blank class="icon brands icon"> 
						<i class="fas fa-users fa-sm fa-coupon-styling"></i> Membership Rewards
					</a>
					<hr>
				</div>
				<!-- disabled First image panel (jlee)			
				<div class="image span-1-75 signage" data-position="25% 25%"></div>
				-->
			</section>

			<!-- Panel (Single Image) -->
			<section class="panel">
				<div class="gallery">			
					<a href="<?php echo $about_fields['image_url'] ?>" class="image  span-2-5" data-position="right"><img src="<?php echo $about_fields['image_url'] ?>" alt="" /></a>
				</div>
			</section>

			<!-- Panel (About Us) -->
			<section class="panel spotlight xmedium right">
				<div class="content span-3-75">
					<h2 class="major"><?php echo $about_fields['title'] ?></h2>
					<p>
						<?php echo $about_fields['content'] ?>
					</p>
					<a href="<?php echo $home_fields['weekly_ads_url'] ?>" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>
					<a href="#Special" target=_blank class="icon brands icon"> 
						<i class="fas fa-tags fa-icon-small fa-coupon-styling"></i>Fall Inventory 
					</a>							
				</div>
				<div class="image filtered tinted" data-position="top left">
					<img src="<?php echo get_theme_file_uri('images/pic02.jpg') ?>" alt="" />
				</div>
			</section>

			<!-- Panel (Image montage) -->
			<section class="panel">
				<div class="gallery">
					<div class="group span-4-5">
						<a href="images/gallery/fulls/05.jpg" class="image  span-3" data-position="top"><img src="<?php echo get_theme_file_uri('images/pfgc-fall-2.png') ?>" alt="" /></a>
						<a href="images/gallery/fulls/06.jpg" class="image  span-1-5" data-position="center"><img src="<?php echo get_theme_file_uri('images/gallery/thumbs/06a.jp') ?>g" alt="" /></a>
						<a href="images/gallery/fulls/07.jpg" class="image  span-1-5" data-position="bottom"><img src="<?php echo get_theme_file_uri('images/gallery/thumbs/07a.jpg') ?>" alt="" /></a>
						<a href="images/gallery/fulls/08.jpg" class="image  span-3" data-position="top"><img src="<?php echo get_theme_file_uri('images/gallery/thumbs/08b.jpg') ?>" alt="" /></a>
					</div>
				</div>
			</section>

			<!-- Panel (What we Carry) -->
			<section class="panel color4-alt">
				<div class="intro color4">
					<h2 class="major">What we carry:</h2>
					<ul>
						<li>Garden Tools</li>
						<li>Garden Pots</li>
						<li>Fertilizers</li>
						<li>Indoor/Outdoor plants</li>
					</ul>
					<a href="/wp-content/uploads/2023/09/ads.pdf" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>
					<a href="#Special" target=_blank class="icon brands icon"> 
						<i class="fas fa-tags fa-icon-small fa-coupon-styling"></i>Fall Inventory 
					</a>
				</div>
			</section>

			<!-- Panel (Img Montage) -->
			<section class="panel">
				<div class="gallery">
					<div class="group span-3">
						<a
							href="images/gallery/fulls/01.jpg"
							class="image xfiltered span-3"
							data-position="bottom"
							><img src="https://morningchores.com/wp-content/uploads/2019/10/10-10-10-Fertilizer-What-It-Is-and-the-Right-and-Wrong-Way-to-Use-It-FB.jpg " alt=""
						/></a>
						<a
							href="images/gallery/fulls/02.jpg"
							class="image xfiltered span-1-5"
							data-position="center"
							><img src="https://images.squarespace-cdn.com/content/v1/60481e8b74b043581a581d36/1668083305479-BFC28HQE5I6ZTQANL565/Untitled+design+%2898%29+%281%29.jpg " alt=""
						/></a>
						<a
							href="images/gallery/fulls/03.jpg"
							class="image xfiltered span-1-5"
							data-position="bottom"
							><img src="<?php echo get_theme_file_uri('images/pfgc-fall-4.png') ?> " alt=""
						/></a>
					</div>
					<a
					href="images/gallery/fulls/04.jpg"
					class="image xfiltered span-2-5"
					data-position="top"
					><img src="<?php echo get_theme_file_uri('images/gallery/thumbs/09a.jpg') ?> " alt=""
					/></a>
				</div>
			</section>	

			<!-- Panel (Fall Specials) -->
			<section class="panel color4-alt" id="Special">
				<div class="intro color1">
					<h2 class="major">Fall Specials</h2>
					<h4>Low prices on...</h4>
					<ul>
						<li>Shrubs</li>
						<li>mums</li>
						<li>Pumpkins</li>
						<li>Fall/Halloween decorations</li>
					</ul>
					<a href="/wp-content/uploads/2023/09/ads.pdf" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>
				</div>
			</section>

			<!-- Panel (Full Image) -->
			<section class="panel">
				<div class="gallery">
					<a href="images/gallery/fulls/09.jpg" class="image  span-1-5" data-position="right"><img src="<?php echo get_theme_file_uri('images/pfgc-fall-4.png') ?> " alt="" /></a>
				</div>
				<div class="gallery">
					<a href="images/gallery/fulls/09.jpg" class="image  span-1-5" data-position="right"><img src="<?php echo get_theme_file_uri('images/pfgc-fall-3c.png') ?>"  alt="" /></a>
				</div>
				<div class="gallery">
					<a href="images/gallery/fulls/09.jpg" class="image  span-1-5" data-position="right"><img src="<?php echo get_theme_file_uri('images/pfgc-fall-10.png') ?> " alt="" /></a>
				</div>
				<div class="gallery">
					<a href="images/gallery/fulls/09.jpg" class="image  span-1-5" data-position="right"><img src="<?php echo get_theme_file_uri('images/pfgc-fall-11.png') ?> " alt="" /></a>
				</div>
			</section>

			<!-- Panel (Tricks Tips) -->
			<section class="panel banner right" >
				<div class="content color0 span-3-75">
					<h2 class="major">GARDENING TRICKS & TIPS</h2>
					<a href="https://www.pennlive.com/gardening/2018/05/vegetable_gardening_isnt_just.html" target=_blank class="icon brands"> 
						<i class="far fa-arrow-alt-circle-right"></i> Things to Consider When Starting a Vegetable Garden.
					</a>
					<a href="https://planthardiness.ars.usda.gov/" target=_blank class="icon brands"> 
						<i class="far fa-arrow-alt-circle-right"></i> Know your USDA Hardiness Zone.
					</a>
					<hr>
					<a href="/wp-content/uploads/2023/09/ads.pdf" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>
					<a href="#Special" target=_blank class="icon brands icon"> 
						<i class="fas fa-tags fa-icon-small fa-coupon-styling"></i>Fall Inventory 
					</a>
				</div>
			</section>

			<!-- Panel (Single Image) -->
			<section class="panel">
				<div class="gallery">			
					<a href="images/gallery/fulls/09.jpg" class="image  span-2-5" data-position="right"><img src="<?php echo get_theme_file_uri('images/pic01-d.jpg') ?>" alt="" /></a>
				</div>
			</section>

			<!-- Panel (Member) -->
			<section class="panel color4-alt" id="Member">
				<div class="intro color1">
					<h2 class="major">Welcome Rewards</h2>
					<h4>Enroll today and access exclusive benefits everytime you shop at Pat’s Farms Garden Center.</h4>
					<ul>
						<li>10% off your entire purchase*</li>
						<li>Enroll in person at our store.</li>
						<li><a href="/wp-content/uploads/2023/09/rewards-flyer.pdf" target=_blank class="icon brands icon"> 
						See brochure</li>
					</a>
					</ul>
					<br><br>
					<sub>* Certain restrictions apply</sub>
				</div>
			</section>

			<!-- Panel (End Panel) -->
			<section class="panel banner right">
				<div class="color0 endpanel">
					<a href="#first" class="icon-left" >Back</a>
					<a href="#first" class="icon-up">Back to top</a>
				</div>
			</section>
		</div>
	</div>

<?php get_footer(); ?>




