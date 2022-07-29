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
                    echo "All Projects";
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
            </div>
            <!-- Displaying all Project -->
            <div class="row">
                <?php
                    while(have_posts()){
                        the_post();?>
                            <div class="col-lg-4 col-md-6 mb-5">
                                <div class="position-relative mb-4">
                                    <img class="img-fluid rounded w-100" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    <div class="blog-date">
                                        <h4 class="font-weight-bold mb-n1"><?php the_time('j') ?></h4>
                                        <small class="text-white text-uppercase"><?php the_time('F') ?></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-2">
                                    <a class="text-secondary text-uppercase font-weight-medium" href=""><?php  the_author_posts_link();  ?></a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-secondary text-uppercase font-weight-medium" href=""><?php echo get_the_category_list(' | ') ?></a>
                                </div>
                                <h5 class="font-weight-medium mb-2"><?php the_title(); ?></h5>
                                <p class="mb-4"><?php echo wp_trim_words(get_the_content(),20); ?></p>
                                <a class="btn btn-sm btn-primary py-2" href="<?php echo get_permalink(); ?>">Read More</a>
                            </div>
                        <?php 
                    }

                ?>

                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <?php echo paginate_links(); ?>
                      <!-- <ul class="pagination pagination-lg justify-content-center mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul> -->
                    </nav>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- About End -->




<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container py-5">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Meet Our Team</h6>
                <h1 class="section-title mb-3">Meet Our Highly Experienced Cleaners</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel team-carousel position-relative">
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="<?php echo get_theme_file_uri('/img/team-1.jpg') ?>" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="<?php echo get_theme_file_uri('/img/team-2.jpg') ?>" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="<?php echo get_theme_file_uri('/img/team-3.jpg') ?>" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                    <div class="team d-flex flex-column text-center rounded overflow-hidden">
                        <div class="position-relative">
                            <div class="team-img">
                                <img class="img-fluid w-100" src="<?php echo get_theme_file_uri('/img/team-4.jpg') ?>" alt="">
                            </div>
                            <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column bg-primary text-center py-4">
                            <h5 class="font-weight-bold">Full Name</h5>
                            <p class="text-white m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
<?php get_footer(); ?>