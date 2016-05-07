</main><!-- /main -->

<?php if(isset($site_section)) : ?>
  <?php if($site_section=='about' || $site_section=='contact'
    || $site_section=='projects' || $site_section=='privacy') : ?>
      </div><!-- /.col-md-9 -->
      <div class="col-md-3 col-sm-4">
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

</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container -->


  <footer>
    <div class="container">
      <h3 class="visible-print">Follow me</h3>
      <ul class="followme">
        <li><a href="https://www.twitter.com/dafyddbach" title="Follow Dafydd on Twitter"><img src="/images/icons/twitter_32.gif" width="32" height="32" alt="Twitter" /></a></li>
        <li><a href="https://www.facebook.com/dafydd.vaughan" title="Follow Dafydd on Facebook"><img src="/images/icons/facebook_32.gif" width="32" height="32" alt="Facebook" /></a></li>
        <li><a href="https://www.flickr.com/photos/dafyddbach" title="Follow Dafydd on Flickr"><img src="/images/icons/flickr_32.gif" width="32" height="32" alt="Flickr" /></a></li>
        <li><a href="https://www.linkedin.com/in/dafyddvaughan" title="Follow Dafydd on LinkedIn"><img src="/images/icons/linkedin_32.gif" width="32" height="32" alt="Linkedin" /></a></li>
        <li><a href="http://daibach.tumblr.com" title="Follow Dafydd on Tumblr"><img src="/images/icons/tumblr_32.gif" width="32" height="32" alt="Tumblr" /></a></li>
        <li><a href="https://github.com/daibach" title="Follow Dafydd on Github"><img src="/images/icons/github_32.gif" width="32" height="32" alt="Github" /></a></li>
        <li><a href="https://daibach.uk/feed/" title="Follow Dafydd using RSS"><img src="/images/icons/rss_32.gif" width="32" height="32" alt="RSS" /></a></li>
        <li class="clearfix"></li>
      </ul>
      <div class="clearfix"></div>

      <p>Built by <a href="https://twitter.com/dafyddbach">@dafyddbach</a> using <a href="http://getbootstrap.com/">Bootstrap</a>, <a href="https://wordpress.org/">Wordpress</a> and <a href="http://www.wpzoom.com/wpzoom/500-free-icons-wpzoom-social-networking-icon-set/" title="Some icons used on this site from WP-ZOOM" class="link-wpzoom">icons from wpzoom</a></p>

      <p><a href="/privacy">Privacy &amp; cookies</a> | <a href="/contact">Contact me</a></p>

      <div class="legal">&copy; <?php echo date('Y'); ?></div>

    </div><!-- /.container -->
  </footer>


  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="/javascript/bootstrap/bootstrap.3.0.2.min.js"></script>
  </body>
</html>
