 </div>
 </div>

 <div class="col-md-12" id="footer">
      <div class="container" id="footer_container">
        <div class="col-md-6" id="menu_footer_wrapper">
          
        <?php
            wp_nav_menu( array(
                'menu'              => 'secondary',
                )
            );
        ?>
        </div>
        <div class="col-md-6" id="footer_copyright_wrapper">
          <a href="#"><?php bloginfo('title')?></a>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_bloginfo('template_directory');?>/js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>
