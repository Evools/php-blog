<?php
require_once "./config/config.php";
require_once "./config/function.php";
$title_name = "Восстановление пароля";

$err_email = "";

if (isset($_POST['forgot_password'])) {
  $email = $_POST['email'];

  if (empty($email)) {
    $err_email = "Почта не должна быть пустой";
  }


  if (isset($_POST['forgot_password'])) {
    $email = $_POST['email'];

    if (empty($email)) {
      $err_email = "Почта не должна быть пустой";
    }

    if (empty($err_email)) {
      // Генерация и сохранение временного токена
      $reset_token = bin2hex(random_bytes(16));

      // Обновление пароля в базе данных
      $new_password = generateNewPassword();
      $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
      $sql = "UPDATE `users` SET `reset_token` = '$reset_token', `password` = '$hashed_password' WHERE `email` = '$email'";
      mysqli_query($connect, $sql);

      // Сохранение данных в файл
      $file_content = "Email: $email\nReset Token: $reset_token\nNew Password: $new_password\n";
      file_put_contents('reset_data.txt', $file_content);

      $success_message = "Новый пароль сгенерирован и обновлен в базе данных. Данные также сохранены в файл reset_data.txt.";
    }
  }
}

include "./layout/header.php";
?>

<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
  <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
    <h1 class="font-bold text-center text-2xl mb-5">Восстановление пароля | PHP Blog</h1>
    <form action="" method="post" class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
      <?php if (isset($success_message)) : ?>
        <small class='text-green-600 rounded-lg w-full text-center p-4'><?= $success_message; ?></small>
      <?php endif; ?>
      <div class="px-5 py-7">
        <div class="mb-5">
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Почта</label>
          <input type="email" name="email" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" placeholder="Введите вашу почту" />
          <?php if (!empty($err_email)) : ?>
            <small class='text-red-600 p-2 rounded-lg'><?= $err_email; ?></small>
          <?php endif; ?>
        </div>
        <button type="submit" name="forgot_password" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
          <span class="inline-block mr-2">Восстановить пароль</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </button>
      </div>
    </form>
  </div>
</div>

<?php include "./layout/footer.php"; ?>