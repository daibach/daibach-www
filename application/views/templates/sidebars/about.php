<div class="sidebar">
  <ul class="nav nav-pills nav-stacked">
    <li<?php if(isset($site_page) && $site_page=='profile') :?> class="active"<?php endif; ?>><a href="/profile">My profile</a></li>
    <li<?php if(isset($site_page) && $site_page=='more-me') :?> class="active"<?php endif; ?>><a href="/more">Find me online</a></li>
    <li<?php if(isset($site_page) && $site_page=='writings') :?> class="active"<?php endif; ?>><a href="/blogs">Things I've written</a></li>
    <li<?php if(isset($site_page) && $site_page=='contact') :?> class="active"<?php endif; ?>><a href="/contact">Contact me</a></li>
  </ul>
</div><!-- /.sidebar -->
