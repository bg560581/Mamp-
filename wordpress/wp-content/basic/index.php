<html>
<head><?php wp_head(); ?></head>
<body>
  <?php 
  
  // This is the BEGINNING of the loop.  
  // We check with wordpress to see if there are posts.  When wordpress says "Yes"
  // we say "ok, well, while you have posts, let's go through each of them one by one
  if ( have_posts() ) { 
    while ( have_posts() ) {
  ?>
        
        
      
      
      <?php the_post();  // this statement just tells wordpress to get the post that we have reached through the While loop ?>
      
      
      
      <h1><?php the_title(); ?></h1>
      <div class="post-content"><?php the_content(); ?></div>
      
      
      
      
        
<?php
  // This is the END of the loop.  The first close bracket here is for the while statement, and the second is for the if statement.  
    
    }
  }
?>


<?php
  // we include the wp_footer to make sure we are wrapping in any necessary things that plugins or WP wants to add to the footer. 
  wp_footer(); ?>
</body>
</html>