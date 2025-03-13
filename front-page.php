<?php get_header();?>


<div class="container-fluid mxtesf_containfonthead" style=" background-image: url(<?php echo get_theme_mod('backgd435'); ?>);">
    <!-- navmenu -->

    <?php get_template_part('template_part/menubar'); ?>
   
     <!-- heading area with 2 btn -->
      <div class="container">
        <div class="heading_1_5454 text-center text-white">
        <?php echo get_theme_mod('dffdsfdfdf454dxffd'); ?>  
        </div>
        <div class="heading_1_54gf54 text-center text-white">
        <?php echo get_theme_mod('dffdsffds33dfdfdf454dxffd'); ?>  
      </div>
        <div class="headidfdng_1_5454 justify-content-center align-items-center
 d-flex flex-column flex-lg-row">
            <a class="headidfdng_1_5454_icon" href="#"> <i class="fa-solid fa-pen-to-square mx-2"></i>
            <?php echo get_theme_mod('dffdsfdsdfds33dfdfdf454dxffd'); ?>
          </a>
            <a  class="headidfdng_1fg_5454_icon" href="#">
            <?php echo get_theme_mod('dffdsfdsdfdfds33dfdfdf454dxffd'); ?>  
          </a>
        </div>
      </div>

</div>

<!-- our caste studies -->
 <div class="container-fluid headidfdng_1fgfdf_5454_icon border-bottom  border-dark">
  <div class="container">
    <h1 class="text-center fw-bolder">
    <?php echo get_theme_mod('dffdsdfdfdf454dxf'); ?>  
  </h1>
    <p class="text-center">
    <?php echo get_theme_mod('dffdsdfddfdfdf454dxf'); ?>  
    </p>
  </div>
 </div>
<!--Our Blog -->
<div class="container-fluid headidfdng_1fgfdf_5454_icon">
  <div class="container">
    <h1 class="text-center fw-bolder">
    <?php echo get_theme_mod('dffdsdfdfddfdf454dxf'); ?>  
    </h1>
    <p class="text-center">
    <?php echo get_theme_mod('dffdsfdfdfddfdfdf454dxf'); ?>  
    </p>
  </div>
 </div>

<!-- card area  -->
 <div666666 class="container-fluid">
  <div class="container ctggr-dfeg7fds">

  <?php
$query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 6, 
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
    
  <div class="items-card545">
      <div class="card464d5df">
      <a href="<?php the_permalink();?>" class="text-decoration-none text-black">

        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" 
             alt="<?php the_title_attribute(); ?>" 

             
             class="heightof-img34df4">
             </a>
        <div class="class-boxyfdf0tefs">
          <p class="lasttilel-e453">Updated on <?php echo get_the_date('F j, Y'); ?> / <?php the_author(); ?></p>
        <a href="<?php the_permalink();?>" class="text-decoration-none text-black"> 
          
        
        <p class="lasttile-et54546w4"><?php the_title(); ?></p>
      
      </a>
        </div>
      </div>
    </div>

<?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>


    
    
 


  </div>
 </div666666>
<!-- // read more  -->
<div class="container-fluid mb-5">
  <div class="container text-center">
    <a href="<?php  echo get_permalink(258);?>" class="BTN-FORVIEWALL">
      VIEW ALL BLOG 
    </a>
  </div>
</div>





<?the_content();?>














<?php get_footer();?>





    
 