<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/images/dai-2016.jpg" width="30" height="30" class="d-inline-block align-top rounded" alt="">
      Dafydd Vaughan
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item<?php if(isset($site_section) && $site_section=='home') : ?> active<?php endif; ?>">
          <a class="nav-link" href="/" title="return to the home page">Home</a>
        </li>
        <li class="nav-item<?php if(isset($site_section) && $site_section=='about') : ?> active<?php endif; ?>">
          <a class="nav-link" href="/profile" title="my profile">About me</a>
        </li>
        <li class="nav-item<?php if(isset($site_section) && $site_section=='blog') : ?> active<?php endif; ?>">
          <a class="nav-link" href="https://daibach.uk" title="my blog">Blog</a>
        </li>
        <li class="nav-item<?php if(isset($site_section) && $site_section=='projects') : ?> active<?php endif; ?>">
          <a class="nav-link" href="/projects" title="side projects">Side projects</a>
        </li>
        <li class="nav-item<?php if(isset($site_section) && $site_section=='contact') : ?> active<?php endif; ?>">
          <a class="nav-link" href="/contact" title="contact me">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
