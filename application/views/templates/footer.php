    <?php if(isset($site_section) && $site_section=='home') : ?>
    <?php else : ?>
      <?php if(isset($site_section)) : ?>
        <?php if($site_section=='about' || $site_section=='contact'
          || $site_section=='projects' || $site_section=='privacy') : ?>
            </div><!-- /.col-9 -->
            <div class="col">
              <?php
              if(isset($site_section)) {
                if($site_section=='about' || $site_section=='contact') {
                  include('sidebars/about.php');
                } elseif($site_section=='projects') {
                  include('sidebars/projects.php');
                } elseif($site_section=='privacy') {
                  include('sidebars/privacy.php');
                }
              }
              ?>
            </div><!-- /.col-md-2 -->
          </div><!-- /.row -->
        <?php endif;?>
      <?php endif; ?>
    <?php endif; ?>
  </main>

  <footer id="sitemenu" class="subfooter">
    <div class="container">
      <nav>
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link" href="/profile">About me</a></li>
          <li class="nav-item"><a class="nav-link" href="https://daibach.uk/">Blog posts</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">Get in touch</a></li>
        </ul>
      </nav>
    </div>
  </footer>

  <footer id="pagefooter">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="d-none d-print-block">Follow me</h3>
          <ul class="followme">
            <li><a href="https://www.linkedin.com/in/dafyddvaughan" title="Follow Dafydd on LinkedIn"><img src="/images/icons/linkedin-white.png" width="48" height="48" alt="Linkedin - Dafydd Vaughan" /></a></li>
            <li><a href="https://www.twitter.com/dafyddbach" title="Follow Dafydd on Twitter"><img src="/images/icons/twitter-white.png" width="48" height="48" alt="Twitter - @dafyddbach" /></a></li>
            <li class="clearfix"></li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="legal"><br/>&copy; <?php echo date('Y'); ?></div>
        </div>
        <div class="col">
          <div class="footer-extra"><a href="/privacy">Privacy &amp; cookies</a> <br/> <a href="/contact">Contact me</a></div>
        </div>
    </div><!-- /.container -->
  </footer>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/javascript/bootstrap.4.0.0.min.js"></script>
  </body>
</html>
