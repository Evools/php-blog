<?php

require_once "./config/function.php";

$sql = "SELECT * FROM `category`";
$result = mysqli_query($connect, $sql);

?>

<div class="category">
    <?php while ($arr_category = mysqli_fetch_assoc($result)) : ?>
        <a class="category-link" href="#"> <?= $arr_category["title"] ?> </a>
    <?php endwhile; ?>
</div>