<?php
if (!isset($_SESSION['is_auth'])) {
  header("Location: /signin");
}
