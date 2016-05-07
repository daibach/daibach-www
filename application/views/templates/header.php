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

    <link rel="stylesheet" href="/css/bootstrap/bootstrap.3.3.6.min.css">
    <link rel="stylesheet" href="/css/core5.css">

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
  <body>
    <script type="text/javascript">document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script>
    <div class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li<?php if(isset($site_section) && $site_section=='home') : ?> class="active"<?php endif; ?>><a href="/" title="return to the home page">Home</a></li>
            <li<?php if(isset($site_section) && $site_section=='about') : ?> class="active"<?php endif; ?>><a href="/profile" title="my profile">About Me</a></li>
            <li><a href="https://daibach.uk/" title="Dafydd's blog" >Blog</a></li>
            <li<?php if(isset($site_section) && $site_section=='projects') : ?> class="active"<?php endif; ?>><a href="/projects" title="my projects">Projects &amp; Code</a></li>
            <li<?php if(isset($site_section) && $site_section=='contact') : ?> class="active"<?php endif; ?>><a href="/contact" title="Contact me" >Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="cookie-warning"><div class="container">This site uses cookies to make the site simpler. <a href="/privacy">Find out more about cookies</a>.</div></div>

    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12"><img src="/images/dai-2016.jpg" id="dai-logo" class="img-rounded img-responsive" width="140"/></div>
        <div class="col-md-10 col-sm-10 col-xs-12">
          <header class="masthead">
            <?php if(isset($site_section)) : ?>
              <?php if($site_section=='about' || $site_section=='contact'
                || $site_section=='projects' || $site_section=='privacy') : ?>
                <p>Hello, I'm <span>Dafydd Vaughan</span></p>
              <?php else : ?>
                <h1>Hello, I'm <span>Dafydd Vaughan</span></h1>
              <?php endif; ?>
            <?php endif; ?>
          </header>

          <?php if(isset($site_section)) : ?>
            <?php if($site_section=='about' || $site_section=='contact'
              || $site_section=='projects' || $site_section=='privacy') : ?>
              <div class="row">
                <div class="col-md-9 col-sm-8">
            <?php endif;?>
          <?php endif; ?>

          <main id="content" role="main">
