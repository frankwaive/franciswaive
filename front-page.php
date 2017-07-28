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

    <div id="portfolio">
    <h1 class="center">Some of my completed projects</h1>
    <div id="photos">
    <?php echo do_shortcode('[gallery size="full"  ids="218,315,212,581,257,609,629,213,214,210,208,220,211,219,209,682,684,685,686" orderby="rand"]'); ?>
    </div></div>

<div class="clear"> </div>

    <div id="request-quote">
    <a href="http://frankwaive.com/?p=123"><h1>Request Quote</h1>
    <span>Starting from N50,000, you could get a world class website!</span></a>

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
      <aside id="" class="small-12 large-3 columns"> <h1 class="enerhen hbs center">Social<br /> Advocacy</h1>
      <?php query_posts('category_name=Social Advocacy&showposts=3'); ?><p  class="tp">
  <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="muchalacha">
            <div class="thumb"><?php the_post_thumbnail(); ?><p><?php the_title(); ?></p> </div>
            </a>  <br />
          <?php endwhile; ?></p>
      </aside>


      <aside id="" class="small-12 large-3 columns"><h1 class="peppema hbs center">Political <br />Opinions</h1>
      <?php query_posts('category_name=Political Opinions&showposts=3'); ?><p  class="tp">
  <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="thumb"><?php the_post_thumbnail(); ?><p><?php the_title(); ?></p> </div>
            </a>  <br />
          <?php endwhile; ?></p>
      </aside>


      <aside id="" class="small-12 large-3 columns"> <h1 class="udu hbs center">Web <br />Design</h1>
      <?php query_posts('category_name=Nigerian Website Designer&showposts=3'); ?><p  class="tp">
  <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="thumb"><?php the_post_thumbnail(); ?><p><?php the_title(); ?></p> </div>
            </a>  <br />
          <?php endwhile; ?></p>
      </aside>


      <aside id="" class="small-12 large-3 columns"> <h1 class="effurun hbs center">Tutorial <br />Related</h1>
      <?php query_posts('category_name=Tutorials&showposts=3'); ?><p  class="tp">
  <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="thumb"><?php the_post_thumbnail(); ?><p><?php the_title(); ?></p> </div>
            </a>  <br />
          <?php endwhile; ?></p>
      </aside>

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
<p>Phone: 07030248027</p>
<p>Email: frank@frankwaive.com</p>

</div>
  </div>
</div>

    <?php

}

 genesis(); ?>
