<?php
/*
  * Template name: Home
  * */

get_header();
?>
 <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 wall">
                <div class="col-md-12 center-container">
                    <ul class="menu">
                        <li id="def1">ГЛАВНАЯ</li>
                        <li id="def2">НАВЫКИ</li>
                        <li id="def3">РАБОТЫ</li>
                        <li id="def4">БЛОГ</li>
                        <li id="def5">КОНТАКТЫ</li>
                    </ul>
                    <div class="col-md-12 viewContainer">
                        <div class="circle"></div>
                        <div class="text"><span style="color:#021533;font-size:36px;font-weight:bold;">Привет, я</span>
                    <br>
                    <span style="color:#4baff5;font-size:36px;font-weight:bold;">Евгений Просвирин</span></div>
                    <span class="botText">Веб Разработчик</span>
                    </div>
                    
                    <div class="col-md-12 viewContainer2">
                        <div class="title">
                            <span>НАВЫКИ</span>
                            
                        </div>
                        <i class="fa fa-code"></i>
                        <span class="podcode">Написание кода</span>
                        <div class="line"></div>
                        <div class="htmlSkill"><div class="SKtext">HTML/CSS</div><div class="filter"><div class="pr"></div></div><div class="persent"><?php echo ale_get_option('html'); ?></div></div>
                        <div class="cssSkill"><div class="SKtext">JS</div><div class="filter2"><div class="pr"></div></div><div class="persent"><?php echo ale_get_option('js'); ?></div></div>
                        <div class="jsSkill"><div class="SKtext">PHP</div><div class="filter3"><div class="pr"></div></div><div class="persent"><?php echo ale_get_option('php'); ?></div></div>
                         <div class="move">
                         <i class="fa fa-adjust"></i>
                        <span class="podcode">Работа с программами</span>
                        <div class="line"></div>
                        <div class="htmlSkill"><div class="SKtext">ADOBE PHOTOSHOP</div><div class="filter"><div class="pr"></div></div><div class="persent"><?php echo ale_get_option('photoshop'); ?></div></div>
                        <div class="cssSkill"><div class="SKtext">ADOBE ILLUSTRATOR</div><div class="filter2"><div class="pr"></div></div><div class="persent"><?php echo ale_get_option('illustrator'); ?></div></div>
                        <div class="jsSkill"><div class="SKtext">THE GIMP</div><div class="filter3"><div class="pr"></div></div><div class="persent"><?php echo ale_get_option('gimp'); ?></div></div>
                        </div>
                    </div>
                    <div class="col-md-12 viewContainer3">
                        <div class="title">
                            <span>РАБОТЫ</span>
                        </div>

                     	<?php
                    $my_posts3 = get_posts('numberposts=3&category_name=Works');
                    foreach ($my_posts3 as $post) :
                        setup_postdata($post);
                        ?>
                        
                        <a href="#">
                            <div class="workBlock">
                            	<?php if(get_the_post_thumbnail($post->ID)){
                                echo get_the_post_thumbnail($post->ID); }
                            else{?>

                                <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" width="100%" height="100%">

                            <?php }?>

    
                                <div class="blackBlock"><span class="titleProject"><?php echo the_title(); ?></span></div>
                            </div>
                        </a>	

                    <?php endforeach; ?>
                	
                    
                                          
                        <div class="limiter"></div>
                    </div>
                    
                    <div class="col-md-12 viewContainer4">
                        <div class="title">
                            <span>БЛОГ</span>
                        </div>


                        

                        <?php
                    	$my_posts4 = get_posts('numberposts=3&category_name=Blog');
                    	foreach ($my_posts4 as $post) :
                        setup_postdata($post);
                        ?>
                        <div class="blogContainer">
                        <div class="imgBlock">
                        	<?php if(get_the_post_thumbnail($post->ID)){
                                echo get_the_post_thumbnail($post->ID); }
                            else{?>

                                <img src="<?php echo get_template_directory_uri(); ?>/images/noimage_blog.jpg" width="100%" height="100%">

                            <?php }?>
                        </div>
                            <div class="blogTitle"><span><?php the_title(); ?></span></div>
                            
                            <div class="blogText"><?php echo get_the_excerpt(); ?></div>
                        </div>
                    	<?php endforeach; ?>

                            
                       
                        
                      
                         <div class="limiter"></div>
                    </div>
                    <div class="col-md-12 viewContainer5">
                        <div class="title">
                            <span>КОНТАКТЫ</span>
                            
                        </div>
                        <div class="contactBlock">
                             <ul>
                                 <li class="rec1"><i class="fa fa-phone"></i>Номер телефона: <span>+375298423070</span> </li>
                                 <li class="rec2"><i class="fa fa-envelope"></i>Почта: <span>start_up_project@mail.ru</span></li>
                                 <li class="rec3"><i class="fa fa-location-arrow"></i>Адресс: <span>451 Lorem Ipsum, London - Uk</span></li>

                             </ul> 
                             <div class="title">
                            <span>Отправить мне письмо</span>
                            
                            </div>  
                            <form action="http://formspree.io/start_up_project@mail.ru" method="post" class="frm">
                                <input type="text" placeholder="Имя" name="Name" class="nm">
                                <input type="email" placeholder="Email" name="Email" class="em">
                                <textarea name="message" id="" cols="40" rows="5" placeholder="Сообщение"></textarea>
                                <input type="submit" class="but">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
?>
