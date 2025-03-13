<div class="container py-4">
        <div class="row flex-column-reverse flex-lg-row ">
            <div class="difor-ioconfoff d-lg-none"><i class="fa-solid fa-bars" id="icon67232"></i></div>
            <div class="col-lg-9 col-12">
                <div class="">
                    <p class="header_title1 text-white"><?php echo get_theme_mod('dffdsdf454dxf'); ?></p>
                    <p class="header_title2 text-white  ">
                    <?php echo get_theme_mod('dffdsdf454dxffd'); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <!-- //MENUBAR -->
                                    <!-- <div class="nemubarparents" id="manubar-container232">
                                        <ul>
                                            <li><a href="#">
                                                HOME    
                                            </a></li>
                                            <li><a href="#">
                                                BLOG    
                                            </a></li>
                                            <li><a href="#">
                                            Portfolio  
                                            </a></li>
                                        </ul>
                                    </div> -->
                                    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary', 
        'container' => 'div',           
        'container_class' => 'nemubarparents',  
        'container_id' => 'manubar-container232',
        'menu_class'     => '',   
        'menu_id'        => '',   
    ));
?>


                                    
            </div>
        </div>
    </div>