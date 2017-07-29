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



    <div id="grey">

        <div id="grey-inner" class="column large-6 small-12">
                <h2>How to choose a Web Designer</h2>
        <p>Over the years, I’ve been asked this same question over and over again, how do I decide which web designer to hire/employ? I’ve given several answers to this question both to prospective clients, organizations looking to hire a full-time web designer staff and other web workers.
The web design Nigeria market is quite crowded, with about 80% of the available options lacking the required skill and character set.
</p>

<p>
<strong>Here’s how I can help you</strong><br />
You could hire me! – Over the years, I’ve acquired the skill and character set required as stated above for web design projects, I would offer reliable business partnerships. <br />

Free Consultation- I can also provide you with free consultation if you want.</p>
<p><a href="http://www.frankwaive.com/nigerian-website-designer-contact/request-a-design-proposal/">Click Web Design to request a web design quote</a></p>
        </div>
    </div>
<div class="clear"> </div>
  </div>








  <div id="step-2" >
    <div id="blog">
  <div class="row">
      <h1> Blog</h1>
      <?php query_posts('category_name=Social Advocacy&showposts=3'); ?><p  class="tp">
  <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="muchalacha">
            <div class="thumb"><?php the_post_thumbnail(); ?><p><?php the_title(); ?></p> </div>
            </a>  <br />
          <?php endwhile; ?></p>


      </div>
  </div>
</div>

<div id="contact">

<div class="row">
  <div class="small-12 large-6 columns">
<h1>Contact Me</h1>
  </div>

  <div class="small-12 large-6 columns">
<p>  Warri Office</p>
<p>No. 2 Awkuzu Close, Off Aladja Avenue, Enerhen Road</p>
<p>Phone: 08023257939</p>
<p>Email: fwaive@yahoo.com</p>

</div>
  </div>
</div>

    <?php

}

 genesis(); ?>
