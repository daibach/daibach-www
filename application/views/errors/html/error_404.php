<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title        = "Page not found | ".SITE_NAME;
$site_section = "error";
$page_title   = "404 Page not found";
?>
<?php include_once('application/views/templates/header.php'); ?>
<div class="block">
  <h2>The page you requested was not found.</h2>
  <p>The page you are looking for has either been removed or was never here to begin with.</p>
  <p>Go back to the <a href="/">homepage</a> and try again.</p>
</div>
<?php include_once('application/views/templates/footer.php'); ?>
