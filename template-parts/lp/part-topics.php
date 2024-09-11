<?php /**
 * 
 * Top Page Template part: Topics
 * 
 */ ?>
<?php 
    $topics_args = array(
        'post_type' => 'topics',
        'post_status' => 'publish',
        'posts_per_page' => 6,
    );
    $topics_query = new WP_Query($topics_args);
    if($topics_query -> have_posts()): ?>
        <section class="topic">
            <div class="topic__wrapper">
                <div class="topic__box">
                    <div class="heading__wrapper">
                        <h2 class="heading__primary"><span>Topics</span></h2>
                    </div>
                    <div class="topic__row">
                        <div class="topic__col">
                            <p class="heading__desc">トピックス</p>
                            <p class="heading__details">沖縄旅行のお役立ち情報を発信します。</p>
                            <a href="<?php echo home_url(); ?>/topics" class="btn__primary btn__primary--blue btn__primary--black">トピックス一覧</a>
                            <div class="topic__swiper-btns">
                                <div class="topic__swiper-btn topic__swiper-prev">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/topic/topic-swiper-prev.png" alt="PREVIOUS BUTTON" width="75" height="75" loading="lazy" class="img-fluid">
                                </div>
                                <div class="topic__swiper-btn topic__swiper-next">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/topic/topic-swiper-next.png" alt="NEXT BUTTON" width="75" height="75" loading="lazy" class="img-fluid">

                                </div>
                            </div>
                        </div>
                        <div class="topic__col">
                            <div class="topic__swiper">
                                <?php while($topics_query -> have_posts()):
                                    $topics_query -> the_post(); ?>
                                    <a href="<?php echo get_the_permalink(); ?>" class="topic__card">
                                        <div class="topic__card-inner">
                                            <div class="topic__card-img">
                                                <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="沖縄都市伝説" width="300" height="205" loading="lazy" class="img-fluid">
                                            </div>
                                            <div class="topic__card-dates">
                                                <p class="topic__card-dates-text"><?php echo get_the_date('Y.m.d'); ?></p>
                                                <?php $topic_terms = get_the_terms( get_the_ID(), 'topics_category' );
                                                foreach($topic_terms as $term):
                                                    $term_color = get_field('tcat_color', $term); ?>
                                                    <p class="topic__card-dates-banner" style="background-color: <?php echo esc_attr($term_color); ?>"><?php echo $term -> name ?> </p>
                                                <?php endforeach; ?>
                                            </div>
                                            <h3 class="topic__card-ttl"><?php echo get_the_title(); ?></h3>
                                            <?php $topic_desc = get_field('t_desc'); 
                                            if($topic_desc){
                                                echo '<p class="topic__card-desc"> ' . $topic_desc . ' </p>';
                                            }?>
                                        </div>
                                    </a>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;
