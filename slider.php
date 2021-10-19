<div class="vmc-banner__slider">
                        <div class="slider">
                            <?php 
                                $args = array(
                                    'posts_per_page' => 4,
                                    'post_type'      => 'slider'
                                );
                                $the_query = new WP_Query( $args );
                                $i = 1;
                                ?>
                                <?php if( $the_query->have_posts() ): ?>
                                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <?php if($i==1 ) {?>
                                    <div class="slide active">
                                        
                                        <a href="<?php echo get_the_content (); ?>"  target="_blank">
                                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'') ); ?> 
                                        </a>
                                    </div>
                                    <?php } else {?>
                                    <div class="slide">
                                    
                                        <a href="<?php echo get_the_content (); ?>" target="_blank">
                                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' =>'') ); ?>
                                        
                                        </a>
                                    </div>
                                    <?php }?>
                                    <?php $i++ ?>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>

                            <div class="navigation">
                                <i class="fas fa-chevron-left prev-btn"></i>
                                <i class="fas fa-chevron-right next-btn"></i>
                            </div>
                            <div class="navigation-visibility">
                                <div class="slide-icon active"></div>
                                <div class="slide-icon"></div>
                                <div class="slide-icon"></div>
                                <div class="slide-icon"></div>
                                <!--<div class="slide-icon"></div> -->
                            </div>

                        </div>
                    </div>
                    <div class="vmc-banner__eventtop">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="even-img">
                                    <img src="https://media-kyna.cdn.vccloud.vn/uploads/banners/907/img/image_url-1625585837.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="even-img">
                                    <img src="https://media-kyna.cdn.vccloud.vn/uploads/banners/908/img/image_url-1625585798.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="even-img">
                                    <img src="https://media-kyna.cdn.vccloud.vn/uploads/banners/906/img/image_url-1625585871.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>