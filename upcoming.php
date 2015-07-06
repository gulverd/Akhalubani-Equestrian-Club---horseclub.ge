<?php
  $argz = array (
    'cat' => '13',
    'showposts' => '3',
    'taxonomy' => 'category'
            
  );
?>

<div class="col-md-12" id="upcoming_s">
            <div class="col-md-12" id="upcoming_title">
              <span class="glyphicon glyphicon-calendar"></span> UPCOMING EVENTS
            </div>
            <div class="col-md-12">
              <?php 
        
                $querys = new WP_Query($argz);
            
                if ( $querys->have_posts() ) : while ( $querys->have_posts() ) : $querys->the_post();

              ?>
           
               <div class="list-group">
                  <a href="<?php the_permalink(); ?>" class="list-group-item">
                    <h4 class="list-group-item-heading"><?php the_title();?></h4>
                    <p class="list-group-item-text"><?php the_content();?></p>
                  </a>
               </div>
        
              <?php endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
              <?php endif; ?> 
            </div>
          </div>


          
        </div>


      </div>
    </div>


