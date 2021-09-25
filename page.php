<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part('includes/header'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <!-- Page Header -->
      <?php
      if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id);
      else :
        $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
      endif
      ?>
      <header class="masthead" style="background-image: url('img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <h1><?php the_title(); ?></h1>
                <span class="subheading">This is what I do.</span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <hr>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('includes/footer'); ?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>