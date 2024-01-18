<?php
require_once "./config/config.php";
$title_name = "PHP Blog | Administration";

$post = $_POST;


$error_name = "";

if (isset($post['create-category'])) {
  if (empty($post['category'])) {
    $error_name = "Поле не должно быть пустым";
  }
  if (empty($error_name)) {
    $category = $post['category'];
    $sql_category = "INSERT INTO `category` (id, title) VALUES (NULL, '$category')";
    $query = mysqli_query($connect, $sql_category);
    header("Location: /admin");
  }
}




?>

<?php include "./layout/header.php"; ?>
<div class="wrapper">
  <header class="bg-white">
    <?php include "./layout/nav.php"; ?>
    <?php include "./include/category/index.php"; ?>
  </header>

  <div class="container m-auto mt-5">
    <h1 class="font-bold text-2xl">Панель Администратора</h1>

    <form action="" method="post" class="flex flex-col max-w-80 mt-2 ">
      <input type="text" name="category" class="border border-[#F2F4F6] p-2 rounded-lg" placeholder="Название категории">
      <button class="w-full p-4 bg-[#2D3548] text-white mt-2 rounded-lg" name="create-category" type="submit">Добавить категорию</button>
      <?php if (!empty($error_name)) : ?>
        <p class="text-red-500"><?= $error_name; ?></p>
      <?php endif; ?>
    </form>
  </div>
</div>
<?php include "./layout/footer.php"; ?>