<?php get_header() ; ?>

<?php if($wp_query->have_posts()){
    //chay vong lap ra bai post moi nhat
    while($wp_query->have_posts()){
        $wp_query->the_post();
        echo the_title('<i>','<i>');
        echo '<p>'.the_content().'</p>';
        echo "BY".the_author();
    }

    add_action('the_content', 'my_styles');
} ?>


<?php get_footer(); ?>