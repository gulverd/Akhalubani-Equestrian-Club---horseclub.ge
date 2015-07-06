 <div class="col-md-12" id="carousel_background">
      <div class="container" id="carousel_container">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
      <?php
        $args = array(
            'cat' => '7',
            'showposts' => '3'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        $i = 0; ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
            $i++;
            $custom_fields = get_post_custom(get_the_ID());
            $pic = $custom_fields['slideshow_pic'];

            ?>

            <div class="item <?php print ($i == 1) ? "active" : ""; ?>">
                <a href="<?php echo '?page_id='.$page_url;?>"><img src="<?php print $pic[0]; ?>" alt="" id="carousel_img"></a>

                
            </div>
        <?php endwhile; ?>


          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> 
    </div>
</div>

<?php endif; ?>