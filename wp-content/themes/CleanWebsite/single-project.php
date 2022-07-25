<?php get_header(); ?>


    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase"><?php the_title(); ?></h1>
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


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <?php 
                
                while(have_posts()){
                    the_post();
                    ?>
                        <div class="col-lg-12">
                        <div class="mb-5">
                            <div class="d-flex mb-2">
                                <a class="text-secondary text-uppercase font-weight-medium" href=""><?php echo get_the_author();?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-secondary text-uppercase font-weight-medium" href=""><?php echo get_the_category_list(' | ') ?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-secondary text-uppercase font-weight-medium" href=""><?php the_date('F j, Y'); ?> </a>
                            </div>
                            <h1 class="section-title mb-3"><?php the_title(); ?></h1>
                        </div>

                        <div class="mb-5">
                            <img class="img-fluid rounded w-100 mb-4" src="<?php echo get_theme_file_uri('/img/carousel-1.jpg') ?>" alt="Image">
                            <?php the_content(); ?>
                        </div>

                        
                    </div>
                    <?php 
                }
                
                ?>

                
            </div>
        </div>
    </div>
    <!-- Detail End -->
<?php get_footer(); ?>