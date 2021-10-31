<?php get_header(); ?>



    <!-- COUNTDOWN -->

    <section class="countdown">
        <div class="container">
            <div class="countdown__inner">
                <div class="title">
                    Next drawing:
                </div>
                <div class="countdown__timebox">
                    <div class="countdown__timebox-day">
                        <div class="timebox-day-time" id="d">
                            313
                        </div>
                        <div class="timebox-day-text">
                            Days
                        </div>
                    </div>
                    <div class="countdown__timebox-part">
                        :
                    </div>
                    <div class="countdown__timebox-hour">
                        <div class="timebox-hour-time" id="h">
                            23
                        </div>
                        <div class="timebox-hour-text">
                            Hours
                        </div>
                    </div>
                    <div class="countdown__timebox-part">
                        :
                    </div>
                    <div class="countdown__timebox-minutes">
                        <div class="timebox-minutes-time" id="m">
                            14
                        </div>
                        <div class="timebox-minutes-text">
                            Minutes
                        </div>
                    </div>
                    <div class="countdown__timebox-part">
                        :
                    </div>
                    <div class="countdown__timebox-seconds">
                        <div class="timebox-seconds-time" id="s">
                            56
                        </div>
                        <div class="timebox-seconds-text">
                            Seconds
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FROM -->

    <section class="form-fdb">
        <div class="form__title">
            enter for a chance to win
            <div class="form__note">
                Note: You must be a homeowner in Virginia to quality.
            </div>
        </div>
        <div class="container">
            <div class="form__inner">
                <form action="" class="wpcf7-form">
                    <input class="form__name" type="text" placeholder="Your name">
                    <input class="form__tel" type="tel" placeholder="Your phone">
                    <input class="form__email" type="email" placeholder="Your email">
                    <input class="form__adress" type="text" placeholder="Your adress">
                    <label class="label__radio">
                        Best time to call's
                        <div class="radio__btn">
                        <label class="time-to-call-AM">
                            <input type="radio" value="AM" name="time" class="time-to-call">
                            AM
                        </label>
                        <label class="time-to-call-PM">
                            <input type="radio" value="PM" name="time" class="time-to-call">
                            PM
                        </label>
                        </div>
                    </label>
                    <label class="label__textarea">
                        *Please indicate in the comments all the details of the order and your preferences.
                        <textarea class="form__textarea" placeholder="Comments"></textarea>
                    </label>
                    <label class="label__button">
                        <button class="form__btn" type="submit" value="submit">Submit</button>
                        Send your coordinates
                    </label>
                </form>
                <?php the_content(); ?>
            </div>
        </div>
    </section>





    <!-- MAIN SLIDER -->
    <section class="main-slider">
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-title">
                    <?php the_field('main-swiper-title') ?>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php the_field('main-slider-img01') ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php the_field('main-slider-img02') ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php the_field('main-slider-img03') ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php the_field('main-slider-img04') ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php the_field('main-slider-img05') ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php the_field('main-slider-img06') ?>" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php the_field('main-slider-img07') ?>" alt="">
                    </div>
                </div>
                <div class="swiper-button-next">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/nav__main-slider.svg" alt="">
                </div>
                <div class="swiper-button-prev">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/nav__main-slider.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="slider-feedback">
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-title">
                    <?php the_field('comments-swiper-title') ?>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide__rait">
                            <img src="<?php the_field('rait-img01') ?>" alt="">
                            <img src="<?php the_field('rait-img01') ?>" alt="">
                            <img src="<?php the_field('rait-img01') ?>" alt="">
                            <img src="<?php the_field('rait-img01') ?>" alt="">
                            <img src="<?php the_field('rait-img01') ?>" alt="">
                        </div>
                        <div class="slide__comment">
                            <?php the_field('slide__comment01') ?>
                        </div>
                        <div class="slide__author">
                            <?php the_field('slide__author01') ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__rait">
                            <img src="<?php the_field('rait-img02') ?>" alt="">
                            <img src="<?php the_field('rait-img02') ?>" alt="">
                            <img src="<?php the_field('rait-img02') ?>" alt="">
                            <img src="<?php the_field('rait-img02') ?>" alt="">
                            <img src="<?php the_field('rait-img02') ?>" alt="">
                        </div>
                        <div class="slide__comment">
                            <?php the_field('slide__comment02') ?>
                        </div>
                        <div class="slide__author">
                            <?php the_field('slide__author02') ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__rait">
                            <img src="<?php the_field('rait-img03') ?>" alt="">
                            <img src="<?php the_field('rait-img03') ?>" alt="">
                            <img src="<?php the_field('rait-img03') ?>" alt="">
                            <img src="<?php the_field('rait-img03') ?>" alt="">
                            <img src="<?php the_field('rait-img03') ?>" alt="">
                        </div>
                        <div class="slide__comment">
                            <?php the_field('slide__comment03') ?>
                        </div>
                        <div class="slide__author">
                            <?php the_field('slide__author03') ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__rait">
                            <img src="<?php the_field('rait-img04') ?>" alt="">
                            <img src="<?php the_field('rait-img04') ?>" alt="">
                            <img src="<?php the_field('rait-img04') ?>" alt="">
                            <img src="<?php the_field('rait-img04') ?>" alt="">
                            <img src="<?php the_field('rait-img04') ?>" alt="">
                        </div>
                        <div class="slide__comment">
                            <?php the_field('slide__comment04') ?>
                        </div>
                        <div class="slide__author">
                            <?php the_field('slide__author04') ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__rait">
                            <img src="<?php the_field('rait-img05') ?>" alt="">
                            <img src="<?php the_field('rait-img05') ?>" alt="">
                            <img src="<?php the_field('rait-img05') ?>" alt="">
                            <img src="<?php the_field('rait-img05') ?>" alt="">
                            <img src="<?php the_field('rait-img05') ?>" alt="">
                        </div>
                        <div class="slide__comment">
                            <?php the_field('slide__comment05') ?>
                        </div>
                        <div class="slide__author">
                            <?php the_field('slide__author06') ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__rait">
                            <img src="<?php the_field('rait-img06') ?>" alt="">
                            <img src="<?php the_field('rait-img06') ?>" alt="">
                            <img src="<?php the_field('rait-img06') ?>" alt="">
                            <img src="<?php the_field('rait-img06') ?>" alt="">
                            <img src="<?php the_field('rait-img06') ?>" alt="">
                        </div>
                        <div class="slide__comment">
                            <?php the_field('slide__comment06') ?>
                        </div>
                        <div class="slide__author">
                            <?php the_field('slide__author06') ?>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide__rait">
                            <img src="<?php the_field('rait-img07') ?>" alt="">
                            <img src="<?php the_field('rait-img07') ?>" alt="">
                            <img src="<?php the_field('rait-img07') ?>" alt="">
                            <img src="<?php the_field('rait-img07') ?>" alt="">
                            <img src="<?php the_field('rait-img07') ?>" alt="">
                        </div>
                        <div class="slide__comment">
                            <?php the_field('slide__comment07') ?>
                        </div>
                        <div class="slide__author">
                            <?php the_field('slide__author07') ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/nav__feedback-slider.svg" alt="">
                </div>
                <div class="swiper-button-prev">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/nav__feedback-slider.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about__inner">
                <div class="about__title">
                    <?php the_field('about__title') ?>
                </div>
                <div class="about__item">
                    <a href="#" class="about__item-link">
                        <?php the_field('about__item-link') ?>
                    </a>
                </div>
            </div>
        </div>
    </section>




    <!-- FOOTER -->

<?php get_footer(); ?>   