<?php  $this->lang->load('main_lang.php', $this->config->item("language"));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:title" content="UI/UX &amp;amp; Graphic Designer">
    <meta property="og:description" content="I am a Graphic &amp;amp; Web Designer based in New York, specializing in User Interface Design and Development.">
    <meta property="og:image" content="/img/logo.png">
    <meta property="og:url" content="">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/vendor/components/jqueryui/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="/css/admin.css">
    <!-- <link rel="stylesheet" href="/css/style.css">-->
    <style>
    html,body{
      margin:0;
      padding:0;
      border:0;
    }
    nav{
      border-bottom:2px solid lightgray;
    }
    </style>

  </head>
  <body class="container">

    <div class="wrapper row">
      <nav>

        <ul class="nav nav-pills">
          <li role="presentation">
            <a class="nav-link" href="/" target="_blank">Show site</a>
          </li>
          <li role="presentation">
            <a class="nav-link" href="/admin/logout">Logout</a>
          </li>
        </ul>
      </nav>
      <aside class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
        <ul class="nav nav-pills nav-stacked">
          <li>
            <a href="/admin/info">Основная информация</a>
          </li>
          <li>
            <a href="/admin/projects">Проекты</a>
          </li>
        </ul>
      </aside>
