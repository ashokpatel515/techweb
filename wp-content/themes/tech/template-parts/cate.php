<?php
/*
Template Name: Sell items
Template Post Type: post
*/
get_header(); 
global $post;
?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<!-- THIS IS WHERE PAGE CONTENT IS DISPLAYED -->
<?php the_content(); ?>
<!-- THIS IS WHERE PAGE CONTENT IS DISPLAYED -->

<?php
$args = array( 'numberposts' => 20, 'category_name' => 'sell-items' );                      
$posts = get_posts( $args );                        
?>

<?php if(!empty($posts) && count($posts)>0) : ?>

<?php
foreach( $posts as $post ): 
setup_postdata($post);?> 
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php 
endforeach; 
wp_reset_postdata();
?>
<?php endif; ?>
<?php endwhile; ?>

<?php else: ?>

Not found
<?php endif; ?>