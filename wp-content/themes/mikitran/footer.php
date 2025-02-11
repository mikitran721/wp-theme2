<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
        <article <?php post_class() ?>>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <summary>
                <?php the_content(); ?>
            </summary>
            <footer>
                <?php the_tags(); ?>
            </footer>
        </article>
<?php endwhile;
endif; // Kết thúc vòng lặp 
$copyright = "Design by Miki Tran";
echo apply_filters("mik_copyright", $copyright);
?>

<?php
// echo "<pre>";
// if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :
//         $wp_query->the_post();
//         echo $post->post_title . "<br/>";
//     endwhile;
// endif;
// echo "</pre>";
// echo "<pre>";
// print_r($post->post_content);
// echo "</pre>";
// echo "<pre>";
// print_r($wp_query);
// print_r($posts);
// echo "</pre>";
