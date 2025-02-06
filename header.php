<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Website Title</title>
      <meta name="description" content="Website description">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
      <?php wp_head();?>
    </head>
  <body>
    <div class="header-container">
      <header class="wrapper clearfix">
        <h1 class="title">Website Title</h1>      
        <nav>
          <ul>
            <li><a href="#">nav item #1</a></li>
            <li><a href="#">nav item #2</a></li>
            <li><a href="#">nav item #3</a></li>
          </ul>
        </nav>
      </header>
    </div>
  <div class="main-container">
    <main class="main wrapper clearfix">