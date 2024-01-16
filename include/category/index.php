<?php

    require_once "./config/function.php";

    $arr_category = [
        "category-html-css" => [
            "category_name" => "HTML / CSS"
        ],
        "category-js" => [
            "category_name" => "JS"
        ],
        "category-php" => [
            "category_name" => "PHP"
        ],
        "category-webmaster" => [
            "category_name" => "Все для веб мастера"
        ],
    ];

?>

<div class="category">
    <?php foreach ($arr_category as $category_link => $category_name) : ?>
        <a class="category-link" href="<?= $category_link; ?>"> <?= $category_name["category_name"] ?> </a>
    <?php endforeach; ?>
</div>