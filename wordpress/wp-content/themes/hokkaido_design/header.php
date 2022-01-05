<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>FIELD HOKKAIDO</title>
  <meta name="keywords" content="札幌 制作会社"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- header -->
  <header>
    <div class="header_logo">
      <a href="<?php echo home_url('/'); ?>">
        <?php include("assets/img/logo.svg"); ?>
      </a>
    </div>
    <ul class="header_menu">
      <li >
        <a href="<?php echo home_url('/'); ?>">
          <p class="menu_en">HOME</p>
          <p class="menu_ja">ホーム</p>
        </a>
      </li>
      <li>
        <a href="<?php echo home_url('/about/'); ?>">
          <p class="menu_en">ABOUT</p>
          <p class="menu_ja">会社概要</p>
        </a>
      </li>
      <li>
          <a href="<?php echo home_url('/service/'); ?>">
            <p class="menu_en">SERVICE</p>
            <p class="menu_ja">サービス</p>
          </a>
      </li>
      <li>
        <a href="<?php echo home_url('/work/'); ?>">
          <p class="menu_en">WORK</p>
          <p class="menu_ja">制作実績</p>
        </a>
      </li>
      <li>
        <a href="<?php echo home_url('/blog/'); ?>">
          <p class="menu_en">BLOG</p>
          <p class="menu_ja">ブログ</p>
        </a>
      </li>
      <li id="contact_btn">
        <a href="<?php echo home_url('/contact/'); ?>">
          <?php include("assets/img/mail.svg"); ?>
          <div>
            <p class="menu_en">CONTACT</p>
            <p class="menu_ja">お問い合わせ</p>
          </div>
        </a>
      </li>
      <li id="hamburger">
        <div class="openbtn1">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav id="g-nav">
            <ul>
              <li><a href="<?php echo home_url(''); ?>">HOME</a></li>  
              <li><a href="<?php echo home_url('/about/'); ?>">About</a></li>  
              <li>
                <a href="<?php echo home_url('/service/'); ?>">Service</a>
                  <div>
                    <p><a href="<?php echo home_url('/service/corporate/'); ?>">HP制作</a></p>
                    <p><a href="<?php echo home_url('/service/sns/'); ?>">SNSコンサル</a></p>
                    <p><a href="<?php echo home_url('/service/media/'); ?>">メディア掲載</a></p>
                  </div> 
              </li>  
              <li><a href="<?php echo home_url('/work/'); ?>">Work</a></li>  
              <li><a href="<?php echo home_url('/blog/'); ?>">Blog</a></li>  
              <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>  
            </ul>
        </nav>
        <div class="circle-bg"></div>
      </li>
  </ul>
  </header>
  <!-- header_end -->
  