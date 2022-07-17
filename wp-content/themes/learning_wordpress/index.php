<?php 

if(have_posts()){
    
    while(have_posts()){
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <hr>
        <?php
    }


}else{
    echo "Makayn hta post";
}


?>