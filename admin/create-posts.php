<?php
require_once "./config/config.php";
require_once "./config/function.php";

$title_name = "PHP Blog | Create Category";
if (!isset($_SESSION['is_auth'])) {
  header("Location: /signin");
}
if ($_SESSION['role'] != 3 && $_SESSION['role'] != 2) {
  header("Location: /");
}

$post = $_POST;


$error_message = [];


if (isset($post['add-post'])) {
  if (empty($post['title'])) {
    $error_message[]  = "<b>Заголовок</b> - не должен быть путым!";
  }
  // if (empty($post['description'])) {
  //   $error_message[] = "<b>Описание</b> - не должно быть пустым!";
  // }
  if (empty($post['content'])) {
    $error_message[] = "<b>Контент</b> - не должен быть пустым!";
  }
  // title	description	text	status	date	time
}

?>

<?php include "./layout/header.php"; ?>
<div class="wrapper">
  <header class="bg-white">
    <?php include "./layout/nav.php"; ?>
  </header>


  <!-- component -->
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden sm:rounded-lg">
        <div class="p-6 bg-white border rounded-xl border-gray-200">
          <h2 class="text-2xl font-medium text-gray-600 mb-5">Добавить новость</h2>
          <?php if (!empty($error_message)) : ?>
            <div class="w-full bg-red-200 text-red-700 px-2 py-2 rounded-lg">
              <?php foreach ($error_message as $error) : ?>
                <h2><?= $error; ?></h2>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <form method="POST" action="">
            <div class="mb-4">
              <label class="text-xl text-gray-600">Заголовок <span class="text-red-500">*</span></label></br>
              <input type="title" class="border border-gray-300 p-2 w-full rounded-lg" name="title" id="title" value="">
            </div>

            <div class="mb-4">
              <label class="text-xl text-gray-600">Краткое описание</label></br>
              <input type="text" class="border border-gray-300 p-2 w-full rounded-lg" name="description" id="description" placeholder="(По желанию)">
            </div>

            <div class="mb-8">
              <label class="text-xl text-gray-600">Контент <span class="text-red-500">*</span></label></br>
              <textarea name="content" class="border-2 border-gray-500"></textarea>
            </div>
            <div class="flex gap-2">
              <select name="action" class="bg-gray-100 rounded-xl px-3">
                <option value="1">Опубликовать</option>
                <option value="2">Черновик</option>
              </select>
              <button type="submit" name="add-post" class="py-3 px-10 bg-indigo-500 text-white hover:bg-indigo-400 rounded-xl">Добавить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

  <script>
    CKEDITOR.replace('content');
  </script>


  <?php include "./layout/footer.php"; ?>