<?php
/**
 * Template Name: Landing Page
 */
?>
<?php
get_header();
?>

    <div>
        
        <?php echo wp_kses_post ( get_field('hero_title') ); ?>

        </div>
        <div class="heroButtonStartFreeTrialContainer">

            <a href="<?php echo esc_html( get_field('hero_button_link') ); ?>"><button class="heroButtonStartFreeTrial">Start Your Free Trial</button></a><br>

            <span class="heroButtonStartFreeTrialSub"><?php echo esc_html( get_field('hero_second_title') ); ?></span>

        </div>
        <div>
            <h2 class="heroSecondTitle">Your Business Calls with <span class="heroSecondTitleHighlight">Our Call CenterSupport </span></h2>
        </div>
        <div class="customerSupportContianer">
            <div class="customerSupportUsers">
                <img src="<?php the_field('user_two_image'); ?>" alt="">
                <div class="customerSupportAudioPlay">
                    <i class='bx bx-play'></i>
                    <img src="<?php echo get_template_directory_uri();?>/images/musicStatus.png" alt="">
                </div>
            </div>
            <div class="customerSupportUsers">
                <img src="<?php the_field('user_two_image'); ?>" alt="">
                <div class="customerSupportAudioPlay">
                    <i class='bx bx-play'></i>
                    <img src="<?php echo get_template_directory_uri();?>/images/musicStatus.png" alt="">
                </div>
            </div>
            <div class="customerSupportUsers">
                <img src="<?php the_field('user_three_image'); ?>" alt="">
                <div class="customerSupportAudioPlay">
                    <i class='bx bx-play'></i>
                    <img src="<?php echo get_template_directory_uri();?>/images/musicStatus.png" alt="">
                </div>
            </div>
            <div class="customerSupportUsers">
                <img src="<?php the_field('user_four_image'); ?>" alt="">
                <div class="customerSupportAudioPlay">
                    <i class='bx bx-play'></i>
                    <img src="<?php echo get_template_directory_uri();?>/images/musicStatus.png" alt="">
                </div>
            </div>
        </div>
        <div class="heroThardSubTitleContainer">
            <?php echo wp_kses_post ( get_field('hero_thard_sub_title') ); ?>
        </div>
    </section>

    <!-- Business section start -->
    <section>
        <div class="businessContainer">
            <div class="businessTitgle">
                <?php echo wp_kses_post ( get_field('business_section_text') ); ?>
            </div>
            <div class="businessIdea">
                <div class="businessIdeaCard">
                    <img src="<?php echo get_template_directory_uri();?>/images/icons8_idea.png" alt="">
                    <?php echo wp_kses_post ( get_field('card_one_text') ); ?>
                </div>
                <div class="businessIdeaCard">
                    <img src="<?php echo get_template_directory_uri();?>/images/icons8_idea.png" alt="">
                    <?php echo wp_kses_post ( get_field('card_two_text') ); ?>
                </div>
                <div class="businessIdeaCard">
                    <img src="<?php echo get_template_directory_uri();?>/images/icons8_idea.png" alt="">
                    <?php echo wp_kses_post ( get_field('card_three_text') ); ?>
                </div>
            </div>
            <div class="custommerSingleSupportUserContainer">
                <img class="custommerSingleSupportUser" src="<?php the_field('business_image'); ?>" alt="">
            </div>
        </div>
    </section>

    <!-- Credit Cards Signup section -->

    <section class="creditCards">
        <div class="creditCardsContainer">
            <?php echo wp_kses_post ( get_field('cta_text') ); ?>
            
            <a href="<?php echo esc_html( get_field('cta_button_link') ); ?>"><button class="creditCardsButton">Sign Up for Free</button></a>

        </div>
    </section>

    <!-- priceing section start -->

    <section class="priceing">
        <div>
            <h2 class="priceingTitle">Pricing <span class="priceingTitleHighlight">Plans That Work</span> For You; <br>
                Not against You</h2>
            <div class="pricingToggle">
                <p class="toggleOption active">Bill Monthly</p>
                <div class="toggleSwitch">
                    <span class="toggleCircle"></span>
                </div>
                <p class="toggleOption">Bill Annually</p>
            </div>

        </div>

        <?php

        // Check rows exists.
        if( have_rows('month_content') ): ?>

        <div class="priceingCardsAll">

        <?php while( have_rows('month_content') ) : the_row(); ?>

            <div class="priceingCard">

                <h3> <?php echo $pricing_title = get_sub_field('pricing_title'); ?> </h3>

                <?php echo $pricing_content = get_sub_field('pricing_content'); ?>

                <div class="price">

                    <?php echo $price = get_sub_field('price'); ?>

                </div>

                <a href="<?php echo $pricing_button_link = get_sub_field('pricing_button_link'); ?>"><button class="selectPlan">Select Plan</button></a>

            </div>

        <?php endwhile; ?>
            
        </div>
        
        <?php
        // No value.
        else :
        // Do something...
        endif;

        ?>

    </section>

<?php get_footer(); ?>