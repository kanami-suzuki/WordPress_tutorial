<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ここにサイト説明を入れます">
  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?> ">

  <?php wp_head(); ?>
</head>

<body>

  <div id="container">

    <header>
      <h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="SAMPLE SITE"></a></h1>
      <aside id="mainimg"><img src="<?php echo get_theme_file_uri('images/mainimg.jpg'); ?>" alt=""></aside>
    </header>

    <nav id="menubar">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="link.html">Link</a></li>
      </ul>
    </nav>

    <div id="contents">