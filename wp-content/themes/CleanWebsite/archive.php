<?php get_header(); ?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">
                        <?php 
                        // if(is_category()){
                        //     single_cat_title();
                        // }else if(is_author()){
                        //      echo "Posts By : ";the_author();
                        // } 
                        the_archive_title();
                        ?>
                    </h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    
                    <?php 
                        $parent_page = wp_get_post_parent_id(get_the_ID());
                        if($parent_page){
                            ?>
                            <div class="d-inline-flex align-items-center">
                                <a class="btn btn-sm btn-outline-light" href="<?php echo get_permalink($parent_page) ?>"><?php echo get_the_title($parent_page); ?></a>
                                <i class="fas fa-angle-double-right text-light mx-2"></i>
                                <a class="btn btn-sm btn-outline-light disabled" href="#"><?php the_title(); ?></a>
                            </div>
                            <?php 
                        }
                       
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="row">   
                <!-- <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                        <i class="fa fa-5x fa-award text-primary mb-4"></i>
                        <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                        <h2 class="text-white m-0">Years Experience</h2>
                    </div>
                </div> -->
                <div class="col-lg-12 pt-12 pb-lg-12">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                    <h1 class="mb-4 section-title"><?php if(is_page('about')){echo "We Provide The Best Cleaning Services";}else{the_author();} ?></h1>
                    <p><?php the_archive_description(); ?></p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum repellendus labore dolores fugit ratione quam, dignissimos nihil, ab neque sint officia facere voluptates corporis autem. Sit at facere rem impedit?</p>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Team Start -->
    <?php get_template_part( 'templates-parts/tmp_team' ); ?>
    <!-- Team End -->
<?php get_footer(); ?>