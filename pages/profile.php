<?php
require_once "./config/config.php";
$title_name = "PHP Blog";

if (!isset($_SESSION['is_auth'])) {
  header("Location: /signin");
}
?>

<?php include "./layout/header.php"; ?>
<div class="wrapper">
  <header class="bg-white">
    <?php include "./layout/nav.php"; ?>
  </header>

  <div class="container m-auto">
    <?php include "./include/profile/index.php" ?>
  </div>

</div>
<?php include "./layout/footer.php"; ?>