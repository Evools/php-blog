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
        <?php include "./include/category/index.php"; ?>
    </header>

    <div class="container m-auto">
        <?php include "./include/news/index.php" ?>
    </div>

</div>
<?php include "./layout/footer.php"; ?>