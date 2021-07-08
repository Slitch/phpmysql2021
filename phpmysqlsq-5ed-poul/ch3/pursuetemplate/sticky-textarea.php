<?php
/*--------------------------------------------------- 
 | 
 |   Page 112: ISBN 9780134301846
 |   sticky-textarea.php
 |   Create a new form 
 |   an give it the ability to be "sticky"(remember).
 |   Have the from use a textarea and check box 
 |   (neither of which) is demonstrated in this book.
 |
 ---------------------------------------------------*/
 ?>
<?php // Header
// Header info
$lang         = 'en';
$title        = 'Sticky Form advanced';
$description  = 'This is a simple html form make in bootstrap';
$author       = 'Poul Lynge Larsen';
include('includes/header.inc.php'); ?>

<h1>Get started with Bootstrap</h1>
<p class="fs-5 col-md-8">Simple form, make it work.</p>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Validate message:
  if (isset($_POST['msg'])) {
    echo '</p>' . $_POST['msg'] . '</p>';
  } else {
    echo '<p>invalid message</p>';
  }

  // Validate check box:
  if (isset($_POST['terms'])) {
    echo '</p>You acceted your terms.</p>';
  } else {
    echo '<p>Please accept your termes before sending us a message</p>';
  }
  
} // END OF main submission IF.

// Leave the PHP section and create the HTML form:

?>

<form action="sticky-textarea.php" method="post" class="col-md-8 was-validated">
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Send us a message.</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" name="msg" value="<?php if (isset($_POST['msg'])) echo $_POST['msg']; ?>" required></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="validationFormCheck1" name="terms" required>
    <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>

<div class="mb-5">
  <p><input type="submit" name="submit" class="btn btn-primary btn-lg px-4" value="Submit form"></p>
</div>
</form>

<hr class="col-3 col-md-2 mb-5">



<?php // Footer
include('includes/footer.inc.php') ?>