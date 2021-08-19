<?php 
    /**
     *  Template name: Tin Tức
     * 
     * */   
    ?>
    <?php 
    // $keyQuerySearch = the_search_query();
    ?>
    <!DOCTYPE html>
    <html style="margin-top: 0px !important;">
    <head>
        <meta charset="utf-8">
        <title>Tân Tam Quốc - Tìm Kiếm</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/assets/images/logo-game.png" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/header-partials.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/tintuc-partials.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/assets/css/partials/footer-partials.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://fonts.cdnfonts.com/css/cafeta" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body style="margin: 0;">
        <div class="top">
            <?php 
            include get_theme_file_path('/partials/header-partials.php');
            ?>
            <div class="main">
                <div class="main--container">
                    <!-- <div class="main--arrow">
                        <img class="main--arrow-left" src="<?php bloginfo('template_url');?>/assets/images/main-arrow-left.png">
                        <a class="main--arrow-btn-playnow" href="#"><img src="<?php bloginfo('template_url');?>/assets/images/choi-ngay.png"></a>
                        <img class="main--arrow-right" src="<?php bloginfo('template_url');?>/assets/images/main-arrow-right.png">
                    </div> -->
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
                                <a onclick="showModal('#notification-link')"><img class="google-play" src="<?php bloginfo('template_url');?>/assets/images/google-play.png"></img></a>
                                <a onclick="showModal('#notification-link')"><img class="apple-store" src="<?php bloginfo('template_url');?>/assets/images/app-store.png"></img></a>
                            </div>
                            <img class="qr" src="<?php bloginfo('template_url');?>/assets/images/qr.png"></img>
                            <img src="<?php bloginfo('template_url');?>/assets/images/nap-the.png">
                            <img src="<?php bloginfo('template_url');?>/assets/images/giftcode.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tintuc-main">
            <div class="tituc-main--container">
                <!-- <div class="tituc-main--left">
                    <a href="#" class="btn-play-now">
                        <p>Chơi Ngay</p>
                    </a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url');?>/assets/images/nap-the.png">
                    </a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url');?>/assets/images/giftcode.png">
                    </a>
                </div> -->
                <div class="tituc-main--right">
                    <h3>Kết quả tìm kiếm</h3>
                    <hr>
                    <div class="tintuc-items">
                        <?php
                        $current_page = get_queried_object();

                        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                        $query = new WP_Query( 
                            array(
                                's'                             => get_search_query(),
                                'post_status'                   => 'publish',
                                'posts_per_page'                =>get_option('posts_per_page')
                            )
                        );

                        if ($query->have_posts()) {
                            while ($query->have_posts()) { 
                                $query->the_post(); ?>

                                <div class="tintuc-item">
                                    <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                    <p><?php echo get_the_date(); ?></p>
                                </div>

                                <?php
                            }

                            // next_posts_link() usage with max_num_pages
                            wp_reset_postdata();
                        }else{ ?>
                            <p style="
                            padding: 10px;
                            text-align: center;
                            font-size: 20px;
                            font-weight: bold;
                            ">Không có bài viết nào</p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        include get_theme_file_path('/partials/footer-partials.php');
        ?>
        <!-- notification link -->
        <div class="modal fade" id="notification-link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="swal-icon swal-icon--warning">
                            <span class="swal-icon--warning__body">
                                <span class="swal-icon--warning__dot"></span>
                            </span>
                        </div>
                        <p class="font-weight-bold text-center">
                            Đang Cập Nhật, Vui Lòng Quay Lại Sau.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/toggle-bar.js">
        </script>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/handle-submit-search.js">
        </script>
        <script>
          // Your web app's Firebase configuration
          // For Firebase JS SDK v7.20.0 and later, measurementId is optional
          var firebaseConfig = {
            apiKey: "AIzaSyDPwsJMuuNuXgX_NpM3EbiiF7LzZ0L4cO0",
            authDomain: "itapvnid.firebaseapp.com",
            projectId: "itapvnid",
            storageBucket: "itapvnid.appspot.com",
            messagingSenderId: "632446426907",
            appId: "1:632446426907:web:293c8a6fe1088660bcbdbe",
            measurementId: "G-96C34318N4"
        };
          // Initialize Firebase
          firebase.initializeApp(firebaseConfig);
          firebase.analytics();
          function showModal(modal){
            $(modal).modal();
          }
      </script>
  </body>
  </html>
