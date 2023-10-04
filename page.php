<?php 
    get_header();  // Read WP header.php
    include 'read_wp.php'; //Read custom fields functions
    $home_fields = get_home(); //Read custom fields into $home_fields array. 
    $about_fields = get_about();
    $whatwecarry_fields = get_whatwecarry();  
    $specials_fields = get_specials();  
    $tips_fields = get_tips();  
    $members_fields = get_members();  
    //echo  "<pre>Test Output: "; print_r($home_fields);
	echo "<p> ******* Test Output: " .  $whatwecarry_fields['acf_photos']['photo_4'];
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
					<a href="<?php echo $about_fields['featured_img_url'] ?>" class="image  span-2-5" data-position="right"><img src="<?php echo $about_fields['featured_img_url'] ?>" alt="" /></a>
				</div>
			</section>

			<!-- Panel (About Us) -->
			<section class="panel spotlight xmedium right">
				<div class="content span-3-75">
					<h2 class="major"><?php echo $about_fields['title'] ?></h2>
					<p>
						<?php echo htmlspecialchars_decode($about_fields['content']); ?>
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

			<!-- Panel (4 Image Montage) -->
			<section class="panel">
				<div class="gallery">
					<div class="group span-4-5">
						<a href="<?php echo $whatwecarry_fields['acf_photos']['photo_1'] ?>" class="image  span-3" data-position="top">     <img src="<?php echo $whatwecarry_fields['acf_photos']['photo_1'] ?>" alt="" /></a>
						<a href="<?php echo $whatwecarry_fields['acf_photos']['photo_2'] ?>" class="image  span-1-5" data-position="center"><img src="<?php echo $whatwecarry_fields['acf_photos']['photo_2'] ?>" alt="" /></a>
						<a href="<?php echo $whatwecarry_fields['acf_photos']['photo_3'] ?>" class="image  span-1-5" data-position="bottom"><img src="<?php echo $whatwecarry_fields['acf_photos']['photo_3'] ?>" alt="" /></a>
						<a href="<?php echo $whatwecarry_fields['acf_photos']['photo_4'] ?>" class="image  span-3" data-position="top">     <img src="<?php echo $whatwecarry_fields['acf_photos']['photo_4'] ?>" alt="" /></a>
					</div>
				</div>
			</section>

			<!-- Panel (What we Carry) -->
			<section class="panel color4-alt">
				<div class="intro color4">	
					<?php echo htmlspecialchars_decode($whatwecarry_fields['content']); ?>
					
					<a href="/wp-content/uploads/2023/09/ads.pdf" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>
					<a href="#Special" target=_blank class="icon brands icon"> 
						<i class="fas fa-tags fa-icon-small fa-coupon-styling"></i>Fall Inventory 
					</a>
				</div>
			</section>

			<!-- Panel (4 Image Montage) -->
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
				
					<?php echo htmlspecialchars_decode($specials_fields['content']); ?>
					
					<p></p>
					<a href="<?php echo $home_fields['weekly_ads_url'] ?>" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>


				</div>
			</section>

			<!-- Panel (4 Image Gallery) -->
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
					<?php echo htmlspecialchars_decode($tips_fields['content']); ?>
					<p></p>
					<a href="<?php echo $home_fields['weekly_ads_url'] ?>" target=_blank class="icon brands icon"> 
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
					<a href="<?php echo $members_fields['featured_img_url'] ?>" class="image  span-2-5" data-position="right"><img src="<?php echo $members_fields['featured_img_url'] ?>" alt="" /></a>
				</div>
			</section>

			<!-- Panel (Member) -->
			<section class="panel color4-alt" id="Member">
				<div class="intro color1">
				<?php echo htmlspecialchars_decode($members_fields['content']); ?>
					<p></p>
					<a href="<?php echo $home_fields['weekly_ads_url'] ?>" target=_blank class="icon brands icon"> 
						<i class="fas fa-ad fa-icon-medium fa-coupon-styling"></i>Weekly Ads 
					</a>
					<a href="#Special" target=_blank class="icon brands icon"> 
						<i class="fas fa-tags fa-icon-small fa-coupon-styling"></i>Fall Inventory 
					</a>
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




