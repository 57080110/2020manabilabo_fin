<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Manabilabo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app.css">
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery')); ?>
  <?php wp_head(); ?>
  <script type="text/javascript" src="/mod/LKBNX/v2.23/demo/cn/cn.php"></script>
</head>

<body>

  <div id="wrapper">
    <div id="overlay-1">
      <section id="navigation">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <!-- <div class="container-fluid"> -->
          <div>
            <button type="button" class="navbar-toggle">
              <span class="ion-navicon"></span>
            </button>
            <a class="navbar-brand" href="#">Manabi Labo</a>
          </div>
          <div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#about">About Us</a></li>
              <li><a href="#our_service">Service</a></li>
              <li><a href="#field">Field of learning</a></li>
              <li><a href="#contact">Contact us</a></li>
            </ul>
          </div> <!-- collapse navbar-collapse -->

        </nav> <!-- navbar -->
      </section> <!-- #navigation -->
      <section id="starting">
        <div class="text-center starting-text">
          <h1 class="mana">Manabi Labo</h1>
          <h2>こどもとおとなのコラボレーション。感性教育で未来をつくる</h2>
        </div>
      </section>
    </div><!-- overlay-1 -->
  </div> <!-- wrapper -->