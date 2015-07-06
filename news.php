<?php
  $argsn = array (
    'cat' => '10',
    'showposts' => '2',
    'taxonomy' => 'category'
            
  );
?>

<div class="col-md-4" id="rights">
          <div class="col-md-12" id="news_title">
           NEWS
          </div>
           <?php 
        
                $query = new WP_Query($argsn);
            
                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                $custom_fields       = get_post_custom();
                $news_main_picture   = $custom_fields['news_main_picture'][0];

                $picture             = '<img src="'.$news_main_picture.'" alt="..." class="img-circle" id="news_image">';
            ?>

        <div class="col-md-12" id="test">
        
          <div class="col-md-12" id="news_cont_wrapper">
            <div class="col-md-3" id="news_pic_wrap">
              <a href="<?php the_permalink(); ?>"><?php echo $picture;?></a>
            </div>
            <div class="col-md-8" id="news_text_wrapper">
              <div class="col-md-12" id="news_date_wrapper">
                <a href="<?php the_permalink(); ?>"><p><?php the_modified_date('d - m - Y'); ?></p></a>
              </div>
              <div class="col-md-12" id="news_title_wrapper">
                <a href="<?php the_permalink(); ?>"><p><?php the_title();?></p></a>
              </div>
            </div>
          </div>
      </div>
            <?php endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>  