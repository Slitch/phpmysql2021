<?php 
# Template from pursue chapter 3 page 112.
/* Creaate a new HTML template for the pages in this chapter.
   Use that new template as the basis for new header and footer file.
   By doing so, you should be able to change the look of the entire site
   without modifying any of the PHP scripts.
*/

// Header
// main content
// footer

 ?>

<?php
# bootstrap template 5.0.1 with css and js
# Made as a requirement from Chapter 3 pursue.
/* * Creaate a new HTML template for the pages in this chapter.
Use that new template as the basis for new header and footer file.
By doing so, you should be able to change the look of the entire site
without modifying any of the PHP scripts. */
?>
<?php // Header
include('includes/header.inc.php'); ?>

<h1>Get started with Bootstrap</h1>
<p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with this barebones example featuring some basic HTML and helpful links. Download all our examples to get started.</p>

<div class="mb-5">
  <a href="../examples/" class="btn btn-primary btn-lg px-4">Download examples</a>
</div>

<hr class="col-3 col-md-2 mb-5">

<div class="row g-5">
  <div class="col-md-6">
    <h2>Starter projects</h2>
    <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
    <ul class="icon-list">
      <li><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap npm starter</a></li>
      <li class="text-muted">Bootstrap Parcel starter (coming soon!)</li>
    </ul>
  </div>

  <div class="col-md-6">
    <h2>Guides</h2>
    <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
    <ul class="icon-list">
      <li><a href="../getting-started/introduction/">Bootstrap quick start guide</a></li>
      <li><a href="../getting-started/webpack/">Bootstrap Webpack guide</a></li>
      <li><a href="../getting-started/parcel/">Bootstrap Parcel guide</a></li>
      <li><a href="../getting-started/build-tools/">Contributing to Bootstrap</a></li>
    </ul>
  </div>
</div>

<?php // Footer
include('includes/footer.inc.php') ?>