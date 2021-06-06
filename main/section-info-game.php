<div class="main">
	<div class="main--container">
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
				<img class="google-play" src="<?php bloginfo('template_url');?>/assets/images/google-play.png"></img>
				<img class="apple-store" src="<?php bloginfo('template_url');?>/assets/images/app-store.png"></img>
				<img class="qr" src="<?php bloginfo('template_url');?>/assets/images/qr.png"></img>
			</div>
		</div>

		<div class="main--news">
			<div class="main--news-left">
				<a href="#">
					<img src="<?php bloginfo('template_url');?>/assets/images/choi-ngay.png">
				</a>
				<a href="#">
					<img src="<?php bloginfo('template_url');?>/assets/images/nap-the.png">
				</a>
				<a href="#">
					<img src="<?php bloginfo('template_url');?>/assets/images/giftcode.png">
				</a>
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
						$args = array(
							'numberposts' => 4,
							'category_name' => 'tin-tuc',
						);
						$tintuc = new WP_Query( $args );
						if($tintuc->have_posts()){ ?>
							<?php
							while ( $tintuc->have_posts() ) {
								$tintuc->the_post();
								if(has_post_thumbnail()){ ?>
									<div class="news--main">
										<div class="news--main-thunail">
											<?php echo the_post_thumbnail(); ?>
										</div>
										<div class="news--main-info">
											<div class="news--main-top">
												<div>
													<a href="#"><?php echo get_the_title(); ?></a>
												</div>
												<div>
													<?php echo get_the_date(); ?>
												</div>
											</div>
											<div class="news--main-bottom">
												<p>
													<?php the_excerpt(); ?>
												</p>
											</div>
										</div>
									</div>
									<hr>
									<?php 
									break;
								}
							}
							?>
							<?php
							while ( $tintuc->have_posts() ) {
								$tintuc->the_post();
								if(!has_post_thumbnail() && ($tintuc->current_post != $tintuc->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
												<?php echo get_the_title(); ?>
											</a>
										</p>
										<p class="item--date"><?php echo get_the_date(); ?></p>
									</div>
									<hr>
									<?php 
								} 

								if(!has_post_thumbnail() && ($tintuc->current_post == $tintuc->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
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
					</div>
					<div id="tabs-2" class="main--news-content">
						<?php 
						$args = array(
							'numberposts' => 4,
							'category_name' => 'su-kien',
						);
						$sukien = new WP_Query( $args );
						if($sukien->have_posts()){ ?>
							<?php
							while ( $sukien->have_posts() ) {
								$sukien->the_post();
								if(has_post_thumbnail()){ ?>
									<div class="news--main">
										<div class="news--main-thunail">
											<?php echo the_post_thumbnail(); ?>
										</div>
										<div class="news--main-info">
											<div class="news--main-top">
												<div>
													<a href="#"><?php echo get_the_title(); ?></a>
												</div>
												<div>
													<?php echo get_the_date(); ?>
												</div>
											</div>
											<div class="news--main-bottom">
												<p>
													<?php the_excerpt(); ?>
												</p>
											</div>
										</div>
									</div>
									<hr>
									<?php 
									break;
								}
							}
							?>
							<?php
							while ( $sukien->have_posts() ) {
								$sukien->the_post();
								if(!has_post_thumbnail() && ($sukien->current_post != $sukien->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
												<?php echo get_the_title(); ?>
											</a>
										</p>
										<p class="item--date"><?php echo get_the_date(); ?></p>
									</div>
									<hr>
									<?php 
								} 

								if(!has_post_thumbnail() && ($sukien->current_post == $sukien->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
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
					</div>
					<div id="tabs-3" class="main--news-content">
						<?php 
						$args = array(
							'numberposts' => 4,
							'category_name' => 'huong-dan',
						);
						$huongdan = new WP_Query( $args );
						if($huongdan->have_posts()){ ?>
							<?php
							while ( $huongdan->have_posts() ) {
								$huongdan->the_post();
								if(has_post_thumbnail()){ ?>
									<div class="news--main">
										<div class="news--main-thunail">
											<?php echo the_post_thumbnail(); ?>
										</div>
										<div class="news--main-info">
											<div class="news--main-top">
												<div>
													<a href="#"><?php echo get_the_title(); ?></a>
												</div>
												<div>
													<?php echo get_the_date(); ?>
												</div>
											</div>
											<div class="news--main-bottom">
												<p>
													<?php the_excerpt(); ?>
												</p>
											</div>
										</div>
									</div>
									<hr>
									<?php 
									break;
								}
							}
							?>
							<?php
							while ( $huongdan->have_posts() ) {
								$huongdan->the_post();
								if(!has_post_thumbnail() && ($huongdan->current_post != $huongdan->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
												<?php echo get_the_title(); ?>
											</a>
										</p>
										<p class="item--date"><?php echo get_the_date(); ?></p>
									</div>
									<hr>
									<?php 
								} 

								if(!has_post_thumbnail() && ($huongdan->current_post == $huongdan->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
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
					</div>
					<div id="tabs-4" class="main--news-content">
						<?php 
						$args = array(
							'numberposts' => 4,
							'category_name' => 'cam-nang',
						);
						$camnang = new WP_Query( $args );
						if($camnang->have_posts()){ ?>
							<?php
							while ( $camnang->have_posts() ) {
								$camnang->the_post();
								if(has_post_thumbnail()){ ?>
									<div class="news--main">
										<div class="news--main-thunail">
											<?php echo the_post_thumbnail(); ?>
										</div>
										<div class="news--main-info">
											<div class="news--main-top">
												<div>
													<a href="#"><?php echo get_the_title(); ?></a>
												</div>
												<div>
													<?php echo get_the_date(); ?>
												</div>
											</div>
											<div class="news--main-bottom">
												<p>
													<?php the_excerpt(); ?>
												</p>
											</div>
										</div>
									</div>
									<hr>
									<?php 
									break;
								}
							}
							?>
							<?php
							while ( $camnang->have_posts() ) {
								$camnang->the_post();
								if(!has_post_thumbnail() && ($camnang->current_post != $camnang->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
												<?php echo get_the_title(); ?>
											</a>
										</p>
										<p class="item--date"><?php echo get_the_date(); ?></p>
									</div>
									<hr>
									<?php 
								} 

								if(!has_post_thumbnail() && ($camnang->current_post == $camnang->post_count - 1)){ ?>
									<div class="main--news-items">
										<p class="item--title">
											<a href="#">
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
					</div>
				</div>
			</div>
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
		</div>
	</div>
</div>