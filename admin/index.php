<?php
require_once "./config/config.php";
$title_name = "PHP Blog | Administration";


?>

<?php include "./layout/header.php"; ?>
<div class="wrapper">
  <header class="bg-white">
    <?php include "./layout/nav.php"; ?>
  </header>


  <div class="container m-auto mt-5">
    <h1 class="font-bold text-2xl">Панель Администратора</h1>
    <div class="mt-5 flex items-start justify-between gap-5">
      <div class="flex w-full flex-col rounded-md bg-cover px-[30px] py-[30px] md:px-[64px] md:py-[56px] max-w-[95%] xl:max-w-[800px] w-[95%]" style='background-image: url("https://raw.githubusercontent.com/horizon-ui/horizon-tailwind-react-ts-corporate/main/src/assets/img/nfts/NftBanner1.png");'>
        <div class="w-full">
          <h4 class="mb-[14px] max-w-full text-xl font-bold text-white md:w-[64%] md:text-3xl md:leading-[42px] lg:w-[46%] xl:w-[85%] 2xl:w-[75%] 3xl:w-[52%]">
            Обучающая программа для группы СИТ
          </h4>
          <p class="mb-[40px] max-w-full text-base font-medium text-[#E3DAFF] md:w-[64%] lg:w-[40%] xl:w-[72%] 2xl:w-[60%] 3xl:w-[45%]">
            Специалист по интернет технологиям
          </p>
          <div class="mt-[36px] flex items-center justify-between gap-4 sm:justify-start 2xl:gap-10 text-white">
            <button class="text-black linear rounded-md bg-white px-4 py-2 text-center text-base font-medium transition duration-200 hover:!bg-white/80 active:!bg-white/70">
              Начать обучение
            </button>
            <button class="text-base font-medium text-lightPrimary hover:text-lightPrimary 2xl:ml-2">
              Вернутся на главную
            </button>
          </div>
        </div>
      </div>

      <!-- <div class="flex items-center gap-5 ml-10">
        <div class="flex items-start rounded-xl bg-white p-4 border border-[#F2F4F6]">
          <div class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
          </div>
          <div class="ml-4">
            <h2 class="font-semibold">1823</h2>
            <p class="mt-1 text-sm text-gray-500">Пользователей</p>
          </div>
        </div>
        <div class="flex items-start rounded-xl bg-white p-4 border border-[#F2F4F6]">
          <div class="flex h-12 w-12 items-center justify-center rounded-full border border-red-100 bg-red-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <div class="ml-4">
            <h2 class="font-semibold">548</h2>
            <p class="mt-1 text-sm text-gray-500">Публикаций</p>
          </div>
        </div>
      </div> -->

      <div class="flex flex-col gap-5 w-full">
        <div class="flex flex-col p-8 bg-gray-800 shadow-md hover:shodow-lg rounded-2xl w-full">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 rounded-2xl p-3 border border-gray-800 text-blue-400 bg-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <div class="flex flex-col ml-3">
                <div class="font-medium leading-none text-gray-100">Посмотреть все категории</div>
                <p class="text-sm text-gray-500 leading-none mt-1">Вы будите перенаправленны на другую страницу</p>
              </div>
            </div>
            <a href="/create-category" class="flex-no-shrink bg-indigo-500 px-8 ml-4 py-3 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider text-white rounded-lg">Перейти</a>
          </div>
        </div>

        <div class="flex flex-col p-8 bg-gray-800 shadow-md hover:shodow-lg rounded-2xl">
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 rounded-2xl p-3 border border-gray-800 text-blue-400 bg-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <div class="flex flex-col ml-3">
                <div class="font-medium leading-none text-gray-100">Посмотреть все публикации</div>
                <p class="text-sm text-gray-500 leading-none mt-1">Вы будите перенаправленны на другую страницу</p>
              </div>
            </div>
            <button class="flex-no-shrink bg-indigo-500 px-8 ml-4 py-3 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider text-white rounded-lg">Перейти</button>

          </div>
        </div>
      </div>
    </div>

    <!-- <div class="container m-auto mt-5">
      <form action="" method="post" class="flex flex-col max-w-80 mt-2 ">
        <input type="text" name="category" class="border border-[#F2F4F6] p-2 rounded-lg" placeholder="Название категории">
        <button class="w-full p-4 bg-[#2D3548] text-white mt-2 rounded-lg" name="create-category" type="submit">Добавить категорию</button>
        <?php if (!empty($error_name)) : ?>
          <p class="text-red-500"><?= $error_name; ?></p>
        <?php endif; ?>
      </form>
    </div> -->




    <?php include "./layout/footer.php"; ?>