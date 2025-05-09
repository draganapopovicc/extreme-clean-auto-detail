<?php
$post_id = get_the_ID();
$title = get_the_title();
$image = get_the_post_thumbnail($post_id , 'large');
$excerpt = get_the_excerpt();
$publish_date = get_the_date('M j, Y', $post_id);
$author = get_the_author();
$avatar = get_avatar($post_id, 48);
?>

<div class="grid_item">
    <figure class="gi_image">
        <?php if ($image) : ?>
            <a href="<?php the_permalink(); ?>"> <?php echo $image; ?>
                <small class="hidden">Visit Our Blog</small>
            </a>
        <?php endif; ?>
        
        <div class="publish-date">
          <?php echo $publish_date; ?>
        </div>
	</figure>

    <div class="grid_item__text">
        <div class="author-info">
            <?php if ($avatar) : ?>
                <?php echo $avatar ?>
            <?php endif; ?>
            <?php if ($author) : ?>
               <span> <?php echo $author ?></span> 
            <?php endif; ?>
        </div>

        <?php if ($title) : ?>
            <div class="heading-secondary">
                <a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
            </div>
        <?php endif; ?>

      

        <?php if ($excerpt) :
            if (strlen($excerpt) <= 100){
            $trimmed_excerpt = $excerpt;
            }else{
                $trimmed_excerpt = substr($excerpt, 0, strpos($excerpt, ' ', 100));
                $trimmed_excerpt.="...";
            }

            $single_url = "<a class='btn btn-2' href='".get_the_permalink()."'><small class='hidden'>Visit Our Blog</small>".__('See More')."<span> </span></a>";

            $excerpt = sprintf("%s %s", $trimmed_excerpt, $single_url );
            ?>
            <div class="entry-content"> <?php echo $excerpt;  ?> </div>
        <?php endif; ?>
    </div>
</div>
