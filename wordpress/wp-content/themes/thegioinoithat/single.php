<?php 


if($wp_query->have_posts()){
    while($wp_query->have_posts()){
        $wp_query->the_post();
        echo the_title('<h1>','<h1>');
        echo '<p>'.the_content().'</p>';
        echo "BY".the_author();
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
    }

    function wp_create_category( $cat_name, $parent = 0 ) {
            $id = category_exists( $cat_name, $parent );
            if ( $id ) {
                return $id;
            }
         
            return wp_insert_category(
                array(
                    'cat_name'        => $cat_name,
                    'category_parent' => $parent,
                )
            );
        }
} ?>
