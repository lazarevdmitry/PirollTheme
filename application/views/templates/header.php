<?php  $this->lang->load('main_lang.php', $this->config->item("language"));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="UI/UX &amp;amp; Graphic Designer">
    <meta property="og:description" content="I am a Graphic &amp;amp; Web Designer based in New York, specializing in User Interface Design and Development.">
    <meta property="og:image" content="/img/logo.png">
    <meta property="og:url" content="">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/vendor/bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" href="/css/style.min.css?v=<?php echo date('d.m.Y');?>">
    <link rel="stylesheet" href="/css/style-768px.min.css?v=<?php echo date('d.m.Y');?>" media="(max-width:768px)">

  </head>
  <body>
    <div class="wrapper">
      <header class="container">
        <div class="logo col-lg-1 col-md-1 col-sm-6 col-xs-12"><a href="#"><img src="/img/logo.png" alt="logo"></a></div>
        <nav class="col-lg-3 col-lg-offset-8 col-md-3 col-md-8 col-sm-6 col-xs-12">
          <ul class="row">
            <li class="menuitem col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="/">
                <?php
                  echo $this->lang->line('home_page');
                ?>
              </a>
            </li>
            <li class="menuitem col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="/about">
                <?php
                  echo $this->lang->line('about_page');
                ?>
              </a>
            </li>
            <li class="menuitem col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <a href="/contact">
                <?php
                  echo $this->lang->line('contact_page');
                ?>
              </a>
            </li>
          </ul> <!-- End of ul.row -->
        </nav> <!-- End of nav -->
      </header> <!-- End of .container -->
