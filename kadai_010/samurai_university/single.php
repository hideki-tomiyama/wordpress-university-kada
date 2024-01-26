    <?php get_header(); ?>

    <!-- カテゴリー情報を取得 -->
    <?php
      $cat = get_the_category();
      $catslug = $cat[0]->slug;
      $catname = $cat[0]->cat_name;
    ?>
    <!-- ニュース投稿処理 -->
    <?php if ($catslug==="news") : ?>
      <?php if (have_posts()) :?>
        <?php while(have_posts()) : the_post(); ?> 
          <div class="home">
              <div class="breadcrumbs_container">
                <div class="image_header">
                  <div class="header_info">
                  <div><?php echo $catslug; ?></div>
                  <div><?php echo $catname; ?></div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="course">
            <div class="row content-body">
              <div class="col-lg-8">
                <div class="course_tabs_container">
                  <div class="tab_panels">
                    <div class="tab_panel">
                      <div class="tab_panel_title"><?php echo $catname; ?></div>
                      <div class="tab_panel_content">
                        <div class="tab_panel_text">
                          <div class="news_posts_small">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sx-12">
                                <div class="calendar_news_border">
                                  <div class="calendar_news_border_1">
                                    <div class="calendar_month"><?php echo get_post_time('F'); ?></div>
                                    <div class="calendar_day">
                                     <span><?php echo get_the_date('d'); ?></span><span>日</span>
                                    </div>
                                  </div>
                                </div>
                               <div class="calendar_hour"><?php echo post_custom('time'); ?></div>
                              </div>
                              <div class="col-lg-10 col-md-10 col-sx-12">
                                <div class="news_post_small_header">
                                 <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" /> <?php echo $catname; ?>
                                </div>
                                <div class="news_detail_title">
                                  <?php the_title(); ?>
                                </div>
                                <div class="news_post_meta">
                                 <?php the_content(); ?>
                                </div>

                                <hr />
                                <div class="social_share">
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt=""/>
                                 <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
                                </div>  
                              </div>
                            </div>  
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        <?php endwhile; ?>  
      <?php endif; ?>   
              </div>     
              <div class="col-lg-4" style="background-color: #2b7b8e33">
               <?php get_sidebar(); ?>
              </div>    
            </div>
          </div>
    <!-- 卒業生の声・投稿処理 -->
    <?php elseif ($catslug==="graduates") : ?>
      <?php if (have_posts()) :?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="home">
            <div class="breadcrumbs_container">
              <div class="image_header">
                <div class="header_info">   
                  <div><?php echo $catslug; ?></div>
                  <div><?php echo $catname; ?></div>
                </div>
              </div>
            </div>
          </div>

          <div class="course">
            <div class="row content-body">
              <div class="col-lg-8">
                <div class="course_tabs_container">
                  <div class="tab_panels">
                    <div class="tab_panel">
                      <div class="tab_panel_title"><?php $catname; ?></div>
                      <div class="tab_panel_content">
                        <div class="tab_panel_text">
                          <div class="news_posts_small">
                            <div class="row">
                              <div class="col-lg-10 col-md-10 col-sx-12">
                                <div class="news_post_small_header">
                                 <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" /> <?php echo $catname; ?> 
                                </div>
                                <div class="news_detail_title">
                                  <?php the_title(); ?>
                                </div>
                                <div class="news_time">
                                 <span>卒業年：<?php echo post_custom('graduate_year'); ?> </span>
                                </div>
                              </div>
                            </div>
                            <div class="news_post_meta">
                             <?php the_content(); ?>
                            </div>
                          </div>
                          <hr />
                          <div class="social_share">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt=""/>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        <?php endwhile; ?>
      <?php endif; ?>
              </div>      
              <div class="col-lg-4" style="background-color: #2b7b8e33">
                <?php get_sidebar(); ?>
              </div>
            </div>
          </div>
    <?php endif;?>

    <?php get_footer(); ?>
