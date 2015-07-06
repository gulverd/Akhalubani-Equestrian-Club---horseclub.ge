<?php
  $argk = array (
    'cat' => '17',
    'showposts' => '3',
    'taxonomy' => 'category'
            
  );
?>



<div class="col-md-12" id="middle_menu_wrapper">

<?php 
        
                $query = new WP_Query($argk);
            
                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                $custom_fields       = get_post_custom();
                $pic_menu            = $custom_fields['pic_menu'][0];

                $picture             = '<img src="'.$pic_menu.'" id="middle_pic">';
            ?>



            <div class="col-md-4">
              <div class="col-md-12" id="pic_wrapper">
                <a href="<?php the_permalink(); ?>"><?php echo $picture;?></a>
              </div>
              <div class="col-md-12" id="middle_pic_title">
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
              </div>
            </div>

            <?php endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>                   



          </div>
        </div>
