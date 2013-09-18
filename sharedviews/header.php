<?php
  include('core/init.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online shopping for all your seasonal or holiday decorations. Great for the home or office and sold at amazing prices!">
    <meta name="author" content="ampnetmedia.com">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title>ampnet(media) - <?php echo dynamicTitle($onpage); ?></title>
    <?php // make a getTitle() function that dynamically displays title name for diff pages. ?>
    <link href="/css/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <!--[if IE]>
        <link href="/css/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
<div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">
              ampnet(<span>media</span>)
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div><?php // off container ?>
      </div><?php // off navbar ?>