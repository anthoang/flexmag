<?php
/* Template Name: Sports Category for Streaming Games by Anthony Hoang
   Author: Anthony Hoang
   show all available streaming games in the sports page
   Date 12/12/2016
*/
?>
<?php get_header(); ?>
PAGE-Sports.PHP-ANTHONY <-- remove this later



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="home-main-wrap" class="left relative">
        <div class="home-wrap-out1">
            <div class="home-wrap-in1">
                <div id="home-left-wrap" class=" left relative">
                    <div class="home-wrap-out2">
                        <div class="home-wrap-in2">
                            <div id="tab-col1" class="home-left-col relative tab-col-cont">

                                <?php the_content(); ?>

                            </div><!--home-left-col-->
                        </div><!--home-wrap-in2-->
                        <div id="tab-col2" class="home-mid-col relative tab-col-cont">
                            <div id="sidebar-wrap" class="left relative">

                                DIV-for-left-sidebar-is-here-Anthony <-- remove this later
                                <?php if ( is_active_sidebar( 'sidebar-widget-home-left' ) ) { ?>
                                    <?php dynamic_sidebar( 'sidebar-widget-home-left' ); ?>
                                <?php } ?>

                            </div><!--sidebar-wrap-->
                        </div><!--home-mid-col-->
                    </div><!--home-wrap-out2-->
                </div><!--home-left-wrap-->
            </div><!--home-wrap-in1-->
            <div id="tab-col3" class="home-right-col relative tab-col-cont">
                <div id="sidebar-wrap" class="left relative">
                    Anthony-Post/Page Sidebar Widget <-- remove this later
                    <?php get_sidebar(); ?>


                </div><!--sidebar-wrap-->
            </div><!--home-right-col-->
        </div><!--home-wrap-out1-->
    </div>



<?php endwhile; endif; ?>

<?php get_footer(); ?>