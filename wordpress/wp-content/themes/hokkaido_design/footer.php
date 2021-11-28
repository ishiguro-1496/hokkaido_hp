<!-- </main> -->
  <div class="footer">
    <div class="footer_logo">
      <a href="<?php echo home_url('/'); ?>">
        <?php include("assets/img/logo.svg"); ?>
      </a>
    </div>

    <ul class="footer_menu">
        <li><a href="<?php echo home_url('/about/'); ?>">ABOUT</a></li>
        <li>
          <a href="<?php echo home_url('/service/'); ?>">SERVICE</a>
 <!--          <ul>
            <li><a href="#">HP制作</a></li>
            <li><a href="#">SNSコンサル</a></li>
            <li><a href="#">メディア掲載</a></li>
          </ul>  -->
        </li>
        <li><a href="<?php echo home_url('/work/'); ?>">WORK</a></li>
        <li><a href="<?php echo home_url('/blog/'); ?>">BLOG</a></li>
        <li><a href="<?php echo home_url('/contact/'); ?>">CONTACT</a></li>
    </ul>
    <ul class="footer_links">
        <li><a href="#">個人情報保護方針</a></li>
        <li>/</li>
        <li><a href="#">個人情報の取り扱いについて</a></li>
        <li>/</li>
        <li><a href="#">情報セキュリティ基本方針</a></li>
    </ul>

    <p>&copy; FIELD HOKKAIDO ALL RIGHTS RESERVED</p>
  </div>

  <?php wp_footer(); ?>
</body>
</html>