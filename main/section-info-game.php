<div class="main">
	<div class="main--container">
		<div class="main--arrow">
			<img class="main--arrow-left" src="<?php bloginfo('template_url');?>/assets/images/main-arrow-left.png">
			<a class="main--arrow-btn-playnow" href="https://dl.itap.vn/web" target="_blank"><img src="<?php bloginfo('template_url');?>/assets/images/choi-ngay.png"></a>
			<img class="main--arrow-right" src="<?php bloginfo('template_url');?>/assets/images/main-arrow-right.png">
		</div>
		<div class="main--info">
			<div class="main--info-left">
				<div>
					<img src="<?php bloginfo('template_url');?>/assets/images/logo-game.png">
				</div>
				<div>
					<h3>Tân Tam Quốc</h3>
					<p>Nhà phát hành iTap</p>
				</div>
			</div>
			<div class="main--info-right">
				<div class="main--info-right-left">
					<a href="https://dl.itap.vn/web" target="_blank"><img class="google-play" src="<?php bloginfo('template_url');?>/assets/images/google-play.png"></img></a>
					<a href="https://dl.itap.vn/web" target="_blank"><img class="apple-store" src="<?php bloginfo('template_url');?>/assets/images/app-store.png"></img>
					</div>
					<img class="qr" src="<?php bloginfo('template_url');?>/assets/images/qr.png"></img>
					<a href="https://nap.itap.vn" target="_blank"s><img src="<?php bloginfo('template_url');?>/assets/images/nap-the.png"></a>
					<a href="https://nap.itap.vn/giftcode" target="_blank"><img src="<?php bloginfo('template_url');?>/assets/images/giftcode.png"></a>
				</div>
			</div>
			<div class="main-news-container">
				<div class="main--news-right">
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="<?php bloginfo('template_url');?>/assets/images/wrapper-1.png">
						<img class="mySlides" src="<?php bloginfo('template_url');?>/assets/images/wrapper-1.png">
						<img class="mySlides" src="<?php bloginfo('template_url');?>/assets/images/wrapper-1.png">
						<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
						</div>
					</div>
				</div>
				<div class="main--news-center">
					<div id="tabs" class="main--news-tabs">
						<ul>
							<li><a href="#tabs-1">Tin Tức</a></li>
							<li><a href="#tabs-2">Sự Kiện</a></li>
							<li><a href="#tabs-3">Hướng Dẫn</a></li>
							<li><a href="#tabs-4">Cẩm Nang</a></li>
						</ul>
						<div id="tabs-1" class="main--news-content">
							<?php 
							$isThumbnails = false;
							$current_ID ;
							$args = array(
								'category_name' => 'tin-tuc',
								'posts_per_page' => 4,
								'nopaging' => true
							);
							$tintuc = new WP_Query( $args );
							if($tintuc->have_posts()){ ?>
								<?php
								while ( $tintuc->have_posts() && ($tintuc->current_post < 3)) {
									$tintuc->the_post();
									if(($tintuc->current_post != 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<hr>
										<?php 
									} 
									if(($tintuc->current_post == 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<?php
									}
								}
								?>
							<?php }else{
								echo "<p style='width:100%;text-align:center'>Không có bài viết nào</p>";
							}
							?>
							<div class="main--news-seemore">
								<a href="/tin-tuc">Xem thêm <i class="fa fa-plus" aria-hidden="true"></i></a>
							</div>
						</div>
						<div id="tabs-2" class="main--news-content">
							<?php 
							$isThumbnailsSuKien = false;
							$current_IDSuKien ;
							$args = array(
								'posts_per_page' => 4,
								'category_name' => 'su-kien',
							);
							$sukien = new WP_Query( $args );
							if($sukien->have_posts()){ ?>
								<?php
								while ( $sukien->have_posts() && ($sukien->current_post < 3)) {
									$sukien->the_post();
									if(($sukien->current_post != 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<hr>
										<?php 
									} 

									if(($sukien->current_post == 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<?php
									}
								}
								?>
							<?php }else{
								echo "<p style='width:100%;text-align:center'>Không có bài viết nào</p>";
							}
							?>
							<div class="main--news-seemore">
								<a href="/su-kien">Xem thêm <i class="fa fa-plus" aria-hidden="true"></i></a>
							</div>
						</div>
						<div id="tabs-3" class="main--news-content">
							<?php 
							$isThumbnailsHuongDan = false;
							$current_IDHuongDan ;
							$args = array(
								'posts_per_page' => 4,
								'category_name' => 'huong-dan',
							);
							$huongdan = new WP_Query( $args );
							if($huongdan->have_posts()){ ?>
								<?php
								while ( $huongdan->have_posts() && ($huongdan->current_post < 3)) {
									$huongdan->the_post();
									if(($huongdan->current_post != 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<hr>
										<?php 
									} 

									if(($huongdan->current_post == 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<?php
									}
								}
								?>
							<?php }else{
								echo "<p style='width:100%;text-align:center'>Không có bài viết nào</p>";
							}
							?>
							<div class="main--news-seemore">
								<a href="/huong-dan">Xem thêm <i class="fa fa-plus" aria-hidden="true"></i></a>
							</div>
						</div>
						<div id="tabs-4" class="main--news-content">
							<?php 
							$isThumbnailsCamNang = false;
							$current_IDCamnang ;
							$args = array(
								'posts_per_page' => 4,
								'category_name' => 'cam-nang',
							);
							$camnang = new WP_Query( $args );
							if($camnang->have_posts()){ ?>
								<?php
								while ( $camnang->have_posts() && ($camnang->current_post < 3)) {
									$camnang->the_post();
									if(($camnang->current_post != 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<hr>
										<?php 
									} 

									if(($camnang->current_post == 3)){ ?>
										<div class="main--news-items">
											<p class="item--title">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_title(); ?>
												</a>
											</p>
											<p class="item--date"><?php echo get_the_date(); ?></p>
										</div>
										<?php
									}
								}
								?>
							<?php }else{
								echo "<p style='width:100%;text-align:center'>Không có bài viết nào</p>";
							}
							?>
							<div class="main--news-seemore">
								<a href="/cam-nang">Xem thêm <i class="fa fa-plus" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>