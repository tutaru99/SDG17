<?php get_header(); ?>

<body>
    
    <div id="nav" class="container-fluid">
        <div class="row">
            <div class="col">
                <img height="90rem" alt="" src='<?php echo get_template_directory_uri(); ?>/img/logo.svg'/>
            </div>
         
            <div id="navi" class="col-md-3 offset-md-4">
        <a href="<?php the_field('nav_item_1'); ?>" target="_blank"><?php the_field('nav_item_1_name'); ?></a>
        <a href="<?php the_field('nav_item_2'); ?>" target="_blank"><?php the_field('nav_item_2_name'); ?></a>
        
            </div>
        </div>
  <div class="row"></div>
  <div class="col-sm-6 offset-sm-9">
        <img id="bulb" src="<?php the_field('light_bulb'); ?>" alt="" />
       
    </div>
        <div id="sdg" class="col-md-12 offset-md-2">
            <h1><?php the_field('white_box_header_text'); ?></h1>
            <br>
            <h2><?php the_field('white_box_description'); ?> </h2>
            <br>
            <p><?php the_field('subheader_para'); ?></p>
            <br>
            <br>
            <div id="btn">
                <a href="<?php the_field('button_link_2'); ?>"><?php the_field('button_name'); ?></a>
            </div>
    </div>
    
    <div id="infoBox" class="container">
            <div class="row">
              <div class="col-md-3 offset-md-3">
                    <p>
                        <a class="mr-5" data-toggle="collapse" 
                        href="#multiCollapseExample1" role="button" aria-expanded="false" 
                        aria-controls="multiCollapseExample1"><img height="130px" src="<?php the_field('card_pic'); ?>" alt=""/></a>
                    </p>

                        <div class="row">
                        <div class="col">
                        <div class="collapse multi-collapse collapse show" id="multiCollapseExample1">
                        <div id="card">
                            <h3><?php the_field('name_of_card'); ?></h3>
                            <?php the_field('desc_of_card'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
                   
            <div class="col-md-3">
                <p>
                <a class="" data-toggle="collapse" 
                href="#multiCollapseExample2" role="button" aria-expanded="false" 
                aria-controls="multiCollapseExample1"><img height="130px" src="<?php the_field('card_pic'); ?>" alt=""/></a>
            </p>
                <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div id="card">
                    <h3><?php the_field('name_of_card2'); ?></h3>
                            <?php the_field('desc_of_card2'); ?>
                    
                    </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
            <p>
            <a class="mr-5" data-toggle="collapse" 
            href="#multiCollapseExample3" role="button" aria-expanded="false" 
            aria-controls="multiCollapseExample1"><img height="130px" src="<?php the_field('card_pic'); ?>" alt=""/></a>
        </p>
            <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample3">
                <div id="card">
                <h3><?php the_field('name_of_card3'); ?></h3>
                            <?php the_field('desc_of_card3'); ?>

                </div>
                </div>
                </div>
            </div>
        </div>
    <!-- after expanding boxes -->

             

     
</div>
</div>
</div>

<div class="pikachu">
        <div class="col-6 offset-md-7">
                <img id="socket" src="<?php the_field('electrical_socket'); ?>" alt="" />
            </div>
        <div class="row">
                <div class="col-md-4 offset-md-2">
                <h2>Current <span> Consumption </span>
                    and <span>  Production </span> patterns must change
                </h2>
                <br>
                <p> <?php the_field('para_of_cons_and_prod'); ?>
                         
                </p>
                <br>
                <p>
                    
                        If people worldwide switched to energy
                        efficient lightbulbs, the 
                        world would save <span>120$ billion annually.</span>
                </p>
                </div>
</div>
</div>

<div class="graph">
        <div class="col-sm-12">
                <img id="chart1"
                src="<?php the_field('first_chart'); ?>" alt="" />
            </div>
            <div class="col-md-6 offset-md-3">
                <br>
            <p><span>*Material Footprint (MF) </span>is the attribution of global material extraction to domestic final demand of a
                    country. The total material footprint is the sum of the material footprint for biomass, fossil fuels, metal
                    ores and non-metal ores.
            </p>
            </div>
            </div>
            <div class="graph">
                    <div class="col-sm-12">
                            <img id="chart1" src="<?php the_field('nd_chart'); ?>" alt="" />
                        </div>
                        <br>
                        <br>
                        <br>
            <div class="col-md-10 offset-md-1">
                <h2>If the global population reaches <span>9.6 billion</span> by 2050, 
                    the equivalent of almost <span>three planets</span> will be required to sustain current lifestyles!</h2>
                    <br>
                    <br>
                    <br>
                    <div id="btn" class="col-sm-4 offset-md-1 col-sm-12">
                            <a href=<?php the_field('button_link_1'); ?> target="_blank"><?php the_field('btn_2'); ?></a>
                    </div>        
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <?php get_footer(); ?>
<br>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>