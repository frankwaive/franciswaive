<?php
/**
 * This file adds the Home Page to the frankwaive Child Theme.
 *
 * @author Frank Waive
 * Template Name: Home Page
 */

// FORCE FULL WIDTH LAYOUT
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

// Homepage CUSTOM LOOP
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'my_custom_loop');

function my_custom_loop()
{
    ?>


  <div id="frank-waive">
    <div id="slider">


        <div class="row">
        <headers>
    <h2><a href="http://www.franciswaive.com/">Francis Waive</a></h2>
      </headers>

   <div class="entry-content">
     <p>Clergyman, Accountant, Author, Newspaper Colunmnist & Development Practioner</p></div>
</div>


    </div>
    </div>






<div id="about" >
<?php
$args = array('include' => '214');
    $pages = get_pages($args);
    foreach ($pages as $page_data) {
        $content = apply_filters(‘the_content’, $page_data->post_content);
        $title = $page_data->post_title; ?>


<div id="about-me" class="column large-12 small-12">
  <div class="row pad">

<header class="entry-header"><h1 class="entry-title" itemprop="headline"><?php echo $title; ?></h1>
</header>



<div class="entry-content" itemprop="text">

    <?php echo $content;
    } ?>
    </div>
    <div class="clear"></div>
      </div>
      </div>
<div class="clear"> </div>


  <div id="step-2" >
    <div id="blog">
  <div class="row">
      <h1> Blog</h1>
      <?php query_posts('showposts=10'); ?><p  class="tp">
  <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="muchalacha">
            <div class="thumb"><?php the_post_thumbnail('large'); ?><p><span><h4><?php the_title(); ?></h4><?php the_excerpt(); ?></span></p> </div>
            </a>  <br />
          <?php endwhile; ?></p>


      </div>
  </div>
</div>



    <div id="grey">

        <div id="grey-inner" class="column large-6 small-12">
                <h2>About Francis Waive</h2>
        <p>Rev. Francis Ejiroghene Waive; Senior Pastor at the Church of the Anointing Warri Nigeria West Africa  got born-again in his early teens  through the activities of the Scripture Union in October 1977. His experience in the Lord got deepened when he was baptized in the Holy Ghost on October 18th 1980. It was on that day that he received the call of God “to go preach the gospel to the lost and deliverance to the captives”.

</p>
<p><a href="/about">Read More</a></p>
        </div>
    </div>
<div class="clear"> </div>
  </div>










<div id="contact">

<div class="row">
  <div class="small-12 large-6 columns">
<h1>Contact Me</h1>
  </div>

  <div class="small-12 large-6 columns">

<p>No. 2 Awkuzu Close, Off Aladja Avenue, Enerhen Road</p>
<p>Phone: 08023257939</p>
<p>Email: fwaive@yahoo.com</p>

</div>
  </div>
</div>

    <?php

}

 genesis(); ?>
