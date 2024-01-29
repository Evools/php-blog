<?php
require_once "./config/config.php";
$title_name = "Регистрация";

if (isset($_SESSION['is_auth'])) {
  header("Location: /");
}

$err_email = $err_name = $err_password = $err_verify = $err_confirm = "";

if (isset($_POST['register'])) {
  $name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  if (empty($name)) {
    $err_name = "Имя не должно быть пустым";
  }
  if (empty($email)) {
    $err_email = "Почта не должна быть пустой";
  }
  if (empty($password)) {
    $err_password = "Пароль не должен быть пустым";
  }
  if (empty($confirm)) {
    $err_confirm = "Повторный пароль не должен быть пустым";
  }
  if ($password !== $confirm) {
    $err_verify = "Пароли не совпадают";
  }
  if (empty($err_email) && empty($err_password) && empty($err_verify) && empty($err_confirm)) {
    $sql = "INSERT INTO `users`(`username`, `email`, `password`, `role_id`) VALUES ('$name', '$email', '$password_hash', 1)";
    $request = mysqli_query($connect, $sql);
    header("Location: /signin");
  }
  // else {
  //   $err_message = "Запрос не был отправлен в БД";
  // }
}

?>
<?php include "./layout/header.php"; ?>

<div class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12">
  <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
    <h1 class="font-bold text-center text-2xl mb-5">Регистрация | PHP Blog</h1>
    <form action="" method="post" class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
      <?php if (!empty($err_message)) : ?>
        <small class='text-red-600 rounded-lg w-full text-center p-4'><?= $err_message; ?></small>
      <?php endif; ?>
      <div class="px-5 py-7">
        <div class="mb-5">
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Имя</label>
          <input type="text" name="username" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" placeholder="Введите ваше имя" />
          <?php if (!empty($err_name)) : ?>
            <small class='text-red-600 p-2 rounded-lg w-full'><?= $err_name; ?></small>
          <?php endif; ?>
        </div>
        <div class="mb-5">
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Почта</label>
          <input type="email" name="email" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" placeholder="Введите вашу почту" />
          <?php if (!empty($err_email)) : ?>
            <small class='text-red-600 p-2 rounded-lg'><?= $err_email; ?></small>
          <?php endif; ?>
        </div>
        <div class="mb-5">
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Пароль</label>
          <input type="password" name="password" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" placeholder="Введите ваш пароль" />
          <?php if (!empty($err_password)) : ?>
            <small class='text-red-600 p-2 rounded-lg'><?= $err_password; ?></small>
          <?php endif; ?>
        </div>
        <div class="mb-5">
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Повторить пароль</label>
          <input type="password" name="confirm" class="border rounded-lg px-3 py-2 mt-1 text-sm w-full" placeholder="Введите ваш пароль" />
          <?php if (!empty($err_verify)) : ?>
            <small class='text-red-600 p-2 rounded-lg'><?= $err_verify; ?></small>
          <?php elseif (!empty($err_confirm)) : ?>
            <small class='text-red-600 p-2 rounded-lg'><?= $err_confirm; ?></small>
          <?php endif; ?>
        </div>
        <button type="submit" name="register" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
          <span class="inline-block mr-2">Регистрация</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </button>
      </div>

      <div class="py-5">
        <div class="grid grid-cols-2 gap-1">
          <div class="text-center sm:text-right whitespace-nowrap">
            <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-bottom	">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              <span class="inline-block ml-1">Помощь</span>
            </button>
          </div>
        </div>
      </div>
    </form>
    <div class="py-5">
      <div class="grid grid-cols-2 gap-1">
        <div class="text-center sm:text-left whitespace-nowrap">
          <a href="/signin" class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span class="inline-block ml-1">Вернутся к авторизации</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "./layout/footer.php"; ?>