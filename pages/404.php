<?php
require_once "./config/config.php";
$title_name = "404 Not Found";
?>
<?php include "./layout/header.php"; ?>

<div class="flex flex-col items-center justify-center min-h-screen gap-2">
  <div class="text-indigo-500 font-bold text-9xl">
    404
  </div>

  <div class="font-bold text-6xl mt-5">
    Страница не найдена
  </div>

  <a href="/" class="mt-5 bg-indigo-500 text-white px-8 py-3 rounded-lg"> Вернутся на главную страницу</a>
</div>

<?php include "./layout/footer.php"; ?>