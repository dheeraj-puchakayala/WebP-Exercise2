<?php
session_start();
?>

 <footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item">
      <a href="<?php echo $_SESSION['ROOT_FOLDER']?>footer_pages/terms.php" class="nav-link px-2 text-muted"
        >Terms and Conditions</a
      >
    </li>
    <li class="nav-item">
      <a href="<?php echo $_SESSION['ROOT_FOLDER']?>footer_pages/policy.php" class="nav-link px-2 text-muted"
        >Privacy policy</a
      >
    </li>
    <li class="nav-item">
      <a href="<?php echo $_SESSION['ROOT_FOLDER']?>footer_pages/help.php" class="nav-link px-2 text-muted"
        >Help and support</a
      >
    </li>
    <li class="nav-item">
      <a href="<?php echo $_SESSION['ROOT_FOLDER']?>footer_pages/contact.php" class="nav-link px-2 text-muted"
        >Contact US</a
      >
    </li>
    <li class="nav-item">
      <a href="<?php echo $_SESSION['ROOT_FOLDER']?>footer_pages/about.php" class="nav-link px-2 text-muted"
        >About</a
      >
    </li>
  </ul>
  <p class="text-center text-muted">Group 12, WebP</p>
</footer>

