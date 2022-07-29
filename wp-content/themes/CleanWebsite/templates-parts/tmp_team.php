    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Meet Our Team</h6>
                    <h1 class="section-title mb-3">Meet Our Highly Experienced Cleaners</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">

                    <?php 
                        
                        
                    ?>
                    </h4>
                </div>
            </div>
           
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">
                        <?php 
                            $homepageTeams = new WP_Query(array(
                                'posts_per_page' => 6,
                                'post_type' => 'team'
                            ));
                            while($homepageTeams->have_posts()){
                                $homepageTeams->the_post();
                                // echo "<pre>";
                                // print_r(get_field('social_media'));
                                // echo "</pre>";
                                
                                ?>
                                <div class="team d-flex flex-column text-center rounded overflow-hidden">
                                    <div class="position-relative">
                                        <div class="team-img">
                                            <img class="img-fluid w-100" src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                                        </div>
                                        <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                            <?php 
                                                
                                                if( $rows = get_field('social_media') ){
                                                    foreach( $rows as $row ) {
                                                        ?>
                                                        <a class="btn btn-secondary btn-social mb-2"  href="<?php echo $row['link'] ?>"><i class="<?php echo $row['icon'] ?>"></i></a>
                                                        <?php 
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column bg-primary text-center py-4">
                                        <h5 class="font-weight-bold"><?php the_title(); ?></h5>
                                        <p class="text-white m-0">Designation</p>
                                    </div>
                                </div>
                                <?php 
                            }
                            wp_reset_postdata(); 

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->