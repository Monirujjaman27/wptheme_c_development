<?php get_header();?>
<?php get_template_part('slider');?>


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
		<div class="row">
                        <div class="col-md-12">
                            <div class="profile-information-area">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="profile-information-area-left">
                                            <h4><?php the_author();?></h4>
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ), $size, $default, $alt, $args ); ?>
                                            <br>
                                            <?php the_author_meta('description');?>
                                            <div class="profile-basic-info">
                                                <ul>
                                                    <li></li>
                                                    <li>Total post <span><?php echo get_the_author_posts();?></span></li>
                                                    <li>Total Comments : <span></span> </li>
                                                    <li><a href="<?php the_author_meta('facebook');?>">Facebook</a> </li></li>
                                                     <li>Email: <?php the_author_meta('user_email');?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <div class="profile-information-area-right">
                                        <?php $i = 1; ?>
                                        <?php if(have_posts()) : while(have_posts()) : the_post() ; ?>    
                                        <?php if($i == 1 or $i == 2 or $i == 3) {?>                      
                                            <div class="author-recent-post">
                                                <div class="author-recent-post-item">
                                                    <h2><?php the_title();?></h2>
                                                   <div class="d-flex">
                                                   <?php the_post_thumbnail('featured_image', array('class'=>''));?>

                                                        <?php the_excerpt();?>
                                                        <a class="" href="<?php the_permalink();?>">Read More</a>
                                                   </div>
                                                    <div class="author-post-info">
                                                        <ul>
                                                            <li>By: <?php the_author();?></li>
                                                            <li>Date: <?php the_time('d M Y');?></li>
                                                            <li>Category: <?php the_category(', ');?></li>
                                                            <li>Comments: <?php comments_popup_link('No Comment', '1 Comment', '% Comment')?></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?>
                                            <?php $i++; ?>
                                            <?php  endwhile ; else : ?>
                                                <p><?php esc_html_e('There is no Post in this cariteria'); ?></p>
                                                <?php endif ;?>           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                    <?php $i = 1; ?>
                    <?php if(have_posts()) : while(have_posts()) : the_post() ; ?>    
                    <?php if($i != 1 and $i != 2 and $i != 3) {?>  
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><?php the_post_thumbnail('featured_image', array('class'=>''));?></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> <?php the_author();?></li>
                                                <li><i class="fa fa-calendar"></i> <?php the_time('M d, Y');?></li>
                                                <li><i class="fa fa-comment"></i> <?php comments_popup_link('No Comment', '1 Comment', '% comment')?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="news-single.html"><?php the_title();?></a></h3>
                                        <div class="text-des">
                                        <?php the_excerpt();?>
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> <?php the_time('M d, Y');?></a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink();?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php $i++; ?>
                        <?php  endwhile ; else : ?>
                            <p><?php esc_html_e('There is no Post in this cariteria'); ?></p>
                        <?php endif ;?>  

                        <div class="col-md-12">
                            <div class="pagination-area tac">
                                <nav>
                                <?php the_posts_pagination(); ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

               <?php get_template_part('sidebar');?>

            </div>
        </div>
    </div>

    <!--=== Right Fixed Appiontment Form ===-->
    <div id="appiontment-now-box">
        <p class="toggle">APPOINTMENT</p>
        <div class="appiontment-now ">
            <div class="appiontment-form">
                <p>Instant online Appiontment</p>
                <form name="contact_us_popup" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Name" class="form-control required name" name="name" aria-required="true" id="name1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true" id="datepicker1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Vehicle Registration Num* " class="form-control required" name="subject" id="reg1" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" rows="7" class="form-control required" name="message" required></textarea>
                    </div>
                    <div class="form-group tac">
                        <button class="btn btn-primary transition7s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===/ Right Fixed Appiontment Form ===-->
    <!-- Footer
    ============================================= -->
      <!-- Footer
      <?php get_footer();?>