<?php get_header(); ?>
  <body>
    <div class="header">
      <div class="container">
        <h1>
          Innovation Cloud
        </h1>
        <p>
          Connect your ideas globally
        </p>
        <a class="btn" href="">Learn More</a>
      </div>
    </div>
    

    <div class="main">      
      <div class="container">
        <img src="https://s3.amazonaws.com/codecademy-content/projects/innovation-cloud/cloud.svg" height="128" width="196"/>

        <h2><?php the_field('white_box_header_text'); ?> </h2>
        <p><?php the_field('white_box_description'); ?> </p>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container"> 
      
      <h1>
          Stay Connected
        </h1>
        <p>
          Receive weekly insights from industry insiders.
        </p>
        <a class="btn" href="">Join</a>
      </div>
    </div>
    <?php get_footer(); ?>
  </body>
</html>