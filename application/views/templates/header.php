<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(isset($meta_description)) :?>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <?php endif; ?>
    <meta name="author" content="Dafydd Vaughan, https://dafyddvaughan.uk">

    <?php if(isset($title)) : ?>
      <title><?php echo $title ?></title>
    <?php else : ?>
      <title><?php echo SITE_NAME; ?></title>
    <?php endif; ?>

    <link rel="stylesheet" href="/css/bootstrap/bootstrap.4.0.0.min.css">
    <link rel="stylesheet" href="/css/dafydd-core.2.css">
    <link rel="stylesheet" href="/css/dafydd-site.2.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/javascript/html5shiv.js"></script>
      <script src="/javascript/respond.min.js"></script>
    <![endif]-->
    <?php if(GA_CODE): ?>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '<?php echo(GA_CODE); ?>', 'auto');
      ga('send', 'pageview');
    </script>
    <?php endif; ?>
  </head>
  <body <?php if(isset($site_section)) :?>class="<?php echo $site_section; ?>"<?php endif; ?>>
    <script type="text/javascript">document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script>
    <?php include_once('navbar.php'); ?>

    <main id="content" role="main">
      <?php if(isset($remove_masthead) && $remove_masthead) : ?>
        <div class="container" id="fp-content">
          <div class="row">
            <div class="col">
      <?php else : ?>
        <header>
          <div class="container">
            <?php if(isset($page_title)) : ?>
              <h1><?php echo $page_title; ?></h1>
            <?php endif; ?>
          </div>
        </header>
        <div class="container">
          <?php if(isset($site_section)) : ?>
            <?php if($site_section=='about' || $site_section=='contact'
              || $site_section=='projects' || $site_section=='privacy') : ?>
              <div class="row">
                <div class="col-md-9 col-sm-8">
            <?php endif;?>
          <?php endif; ?>
      <?php endif; ?>
