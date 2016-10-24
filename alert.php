<?php
  if ($error) {
      echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
  }
  if ($message) {
      echo '<div class="alert alert-success">'.addslashes($message).'</div>';
  }
?>
