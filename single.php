<?php get_header();?>
    <!-- Header area end -->
<?php get_template_part('slider');?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post() ;?>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title();?></h2>
                        <?php the_post_thumbnail('featured_image', array('class'=>''));?>
                        <div class="d-flex">
                            <?php echo the_content();?>
                            <br>
                            <strong>Tags:</strong><?php wp_get_post_tags(' ,');?>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="related_post_area">
                                <h3>Related Posts</h3>

                                
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                            <img class="img-responsive" title="Tooltip on left" src="images/resource/blog-2.jpg" alt="">                                            <h2><a href="">He travels to Indonesia. He stays there for 9 days. ruhul</a></h2>
                                            <p>Saudi Arabia has a king. He is King Salman. He travels to Indonesia. He stays there for 9 days. King Salman is the first Saudi king to visit Indonesia in 50 years. King Salman does not travel lightly. He brings 500 tons of things with him. Five hundred tons is as much as 200 African […]</p>
                                        </div>
                                    </div>
                                        
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                            <img class="img-responsive" title="Tooltip on left" src="images/resource/blog-2.jpg" alt="">                                            <h2><a href="">Saudi king to visit Indonesia in 50 years.</a></h2>
                                            <p>Saudi Arabia has a king. He is King Salman. He travels to Indonesia. He stays there for 9 days. King Salman is the first Saudi king to visit Indonesia in 50 years. King Salman does not travel lightly. He brings 500 tons of things with him. Five hundred tons is as much as 200 African […]</p>
                                        </div>
                                    </div>
                                        
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                             <img class="img-responsive" title="Tooltip on left" src="images/resource/blog-2.jpg" alt="">                                            <h2><a href="">Gilded (covered in gold), arrive (come somewhere)</a></h2>
                                            <p>Saudi Arabia has a king. He is King Salman. He travels to Indonesia. He stays there for 9 days. King Salman is the first Saudi king to visit Indonesia in 50 years. King Salman does not travel lightly. He brings 500 tons of things with him. Five hundred tons is as much as 200 African […]</p>
                                        </div>
                                    </div>
                                        
                                                                        
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="bio-info-area">
                                <h4><span>Author : </span><?php the_author_posts_link(); ?><strong>Total post : <?php echo get_the_author_posts();?></strong></h4>
                                <img alt="" src="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g" srcset="http://1.gravatar.com/avatar/42bb3bedeb706e06a38757a8126eb5e9?s=96&amp;r=g 2x" class="avatar avatar-96 photo" width="96" height="96">                            
                                <?php the_author_meta('description'); ?>
                                <div class="author-info">
                                    <ul>
                                        <li><a href=" <?php get_the_author_posts_link(); ?>">View Author All Post</a> </li>
                                        <li><a href="<?php the_author_meta('facebook'); ?>">Facebook</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php  endwhile ; else : ?>
                            <p><?php esc_html_e('There is no Post in this cariteria'); ?></p>
                        <?php endif ;?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                                <div class="comment-list">
                                    <!-- First Comment -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 hidden-xs">
                                            <figure class="thumbnail">
                                                <img class="img-responsive" src="images/avatar.png" />
                                                <figcaption class="text-center">username</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <header class="text-left">
                                                        <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                        <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                    <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Comment Reply -->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                            <figure class="thumbnail">
                                                <img class="img-responsive" src="images/avatar.png" />
                                                <figcaption class="text-center">username</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-9 col-sm-9">
                                            <div class="panel panel-default arrow left">
                                                <div class="panel-body">
                                                    <header class="text-left">
                                                        <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                                                        <div class="comment-date"><i class="fa fa-clock-o"></i> Dec 16, 2014</div>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                        </p>
                                                    </div>
                                                    <p class="text-right"><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> reply</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-comment">
                                    <h4>Leave a reply</h4>
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-item" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-item" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control form-item" rows="3" name="content" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Post comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                                <input class="search-field" placeholder="Search" value="" type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>
                                <li><a href="#">Higher Education<span>(15)</span></a></li>
                                <li><a href="#">Healthcare <span>(112)</span></a></li>
                                <li><a href="#">Senior Living <span>(4)</span></a></li>
                                <li><a href="#">Commercial <span>(14)</span></a></li>
                                <li><a href="#">Speciality <span>(90)</span></a></li>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <li><a href="#">January 2017 <span>(15)</span></a></li>
                                <li><a href="#">Februaty 2017 <span>(112)</span></a></li>
                                <li><a href="#">March 2017 <span>(4)</span></a></li>
                                <li><a href="#">April 2017<span>(14)</span></a></li>
                                <li><a href="#">May 2017 <span>(90)</span></a></li>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">RECENT NEWS</h4>
                            <div class="widget-news">
                                <a href="#"><img src="images/resource/blog-1.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="images/resource/blog-2.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="images/resource/blog-3.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a class="active transition3s" href="#">HTML</a></li>
                                <li><a class="transition3s" href="#">CSS3</a></li>
                                <li><a class="transition3s" href="#">PHP</a></li>
                                <li><a class="transition3s" href="#">Wordpress</a></li>
                                <li><a class="transition3s" href="#">Joomla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /news table  -->
    <div id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="subs-title">Subscribe to news letter :</h1>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="subcrb-form">
                    <form class="subscription registerForm">
                        <div class="input-group">
                            <input type="email" name="formInput[email]" value="" class="form-control" placeholder="Your Email:" required="" title="valid email is required" id="emaill">
                            <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit" value="submit" id="submit-btn"><i class="fa fa-paper-plane-o"></i></button>
                          </span>
                        </div>
                        <input type="hidden" name="action" value="submitform">
                    </form>
                </div>
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
                        <button class="btn btn-primary transition3s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===/ Right Fixed Appiontment Form ===-->
    <!-- Footer
    <?php get_footer();?>