<?php
require_once "./config/config.php";
require_once "./config/function.php";

$title_name = "PHP Blog | Create Category";

$post = $_POST;

if (!isset($_SESSION['is_auth'])) {
  header("Location: /signin");
}
if ($_SESSION['role'] != 3) {
  header("Location: /");
}
$error_name = "";

if (isset($post['create-category'])) {
  if (empty($post['category'])) {
    $error_name = "Поле не должно быть пустым";
  }
  if (empty($error_name)) {
    $category = $post['category'];
    $sql_category = "INSERT INTO `category` (id, title) VALUES (NULL, '$category')";
    $query = mysqli_query($connect, $sql_category);
    header("Location: /create-category");
  }
}

$sql = "SELECT * FROM `category`";
$result = mysqli_query($connect, $sql);

if (isset($_GET['delete'])) {
  $deleteId = $_GET['delete'];

  $sql_delete = "DELETE FROM `category` WHERE `id` = $deleteId";
  $query_delete = mysqli_query($connect, $sql_delete);

  if ($query_delete) {
    header("Location: /create-category");
    exit();
  }
}

?>

<?php include "./layout/header.php"; ?>
<div class="wrapper">
  <header class="bg-white">
    <?php include "./layout/nav.php"; ?>
  </header>


  <div class="container m-auto mt-5">
    <h1 class="font-bold text-2xl">Список категорий</h1>


    <div class="container m-auto mt-5 flex items-start gap-8 w-full">
      <form action="" method="post" class="flex flex-col max-w-80 mt-2 ">
        <input type="text" name="category" class="border border-[#F2F4F6] p-2 rounded-lg" placeholder="Название категории">
        <button class="w-full p-4 bg-[#2D3548] text-white mt-2 rounded-lg" name="create-category" type="submit">Добавить категорию</button>
        <?php if (!empty($error_name)) : ?>
          <p class="text-red-500"><?= $error_name; ?></p>
        <?php endif; ?>
      </form>

      <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full">
        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">id</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Название категорий</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Статус</th>
              <th scope="col" class="px-6 py-4 font-medium text-gray-900">Действие</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <?php while ($table = mysqli_fetch_assoc($result)) : ?>
              <tr class="hover:bg-gray-50">
                <th class="px-6 py-4 font-normal text-gray-900">
                  <div class="text-sm">
                    <div class="font-medium text-gray-700"><?= $table['id'] ?></div>
                  </div>
                </th>
                <th class="px-6 py-4 font-normal text-gray-900">
                  <div class="text-sm">
                    <div class="font-medium text-gray-700"><?= $table['title'] ?></div>
                  </div>
                </th>
                <td class="px-6 py-4">
                  <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                    Активна
                  </span>
                </td>
                <td class="px-6 py-4">
                  <div class="flex gap-4">
                    <a x-data="{ tooltip: 'Delete' }" href="?delete=<?= $table['id']; ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                      </svg>
                    </a>
                    <a x-data="{ tooltip: 'Edite' }" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endwhile; ?>


          </tbody>

        </table>
      </div>
    </div>



    <?php include "./layout/footer.php"; ?>