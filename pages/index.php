<?php
    require_once "./config/config.php";
    $title_name = "PHP Blog";
?>

<?php include "./layout/header.php"; ?>
<div class="wrapper">
    <header class="bg-white">
        <?php include "./layout/nav.php"; ?>
        <?php include "./include/category/index.php"; ?>
    </header>
</div>
<?php include "./layout/footer.php"; ?>
