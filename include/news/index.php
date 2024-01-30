<?php

$arr_col = [1, 1, 1, 1, 1, 1];

?>

<div class="news">
  <h2 class="text-3xl font-bold">Новости</h2>
  <div class="mt-12 row-post">
    <?php foreach ($arr_col as $col) : ?>
      <div class="post">
        <a href="#" class="post-img max-w-[280px]">
          <img class="w-full" src="./assets/img/news.png" alt="">
        </a>
        <div class="post-content">
          <div class="post-tag flex items-center text-[#8B92A1] mb-1 gap-5">
            <a href="#">#How to</a>
            <a href="#">#редактирование фото</a>
          </div>
          <a href="/" class="text-base underline font-bold transition hover:text-[#467AE9]">Как сделать генеалогическое дерево с семейными фотографиями</a>
          <div class="post-date mt-11 flex items-center gap-5 text-[#8B92A1]">
            <div class="post-date-time flex items-center gap-3">
              <svg class="icon">
                <use xlink:href="./assets/img/svg/svg-sprite.svg#timer"></use>
              </svg>
              <span>9 минут</span>
            </div>
            <div class="post-date-time flex items-center gap-3">
              <svg class="icon">
                <use xlink:href="./assets/img/svg/svg-sprite.svg#calendar"></use>
              </svg>
              <span>21.12.2022</span>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>


  <!-- component -->
  <div class="flex items-center justify-center py-10 lg:px-0 sm:px-6 px-4">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

    <div class="lg:w-3/5 w-full  flex items-center justify-between border-t border-gray-200">
      <div class="flex items-center pt-3 text-gray-600 hover:text-indigo-700 cursor-pointer">
        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M1.1665 4L4.49984 7.33333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M1.1665 4.00002L4.49984 0.666687" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <p class="text-sm ml-3 font-medium leading-none ">Назад</p>
      </div>
      <div class="sm:flex hidden">
        <p class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">1</p>
        <p class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">2</p>
        <p class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">3</p>
        <p class="text-sm font-medium leading-none cursor-pointer text-indigo-700 border-t border-indigo-400 pt-3 mr-4 px-2">4</p>
        <p class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">5</p>
        <p class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">6</p>
        <p class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">7</p>
        <p class="text-sm font-medium leading-none cursor-pointer text-gray-600 hover:text-indigo-700 border-t border-transparent hover:border-indigo-400 pt-3 mr-4 px-2">8</p>
      </div>
      <div class="flex items-center pt-3 text-gray-600 hover:text-indigo-700 cursor-pointer">
        <p class="text-sm font-medium leading-none mr-3">Вперед</p>
        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M9.5 7.33333L12.8333 4" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M9.5 0.666687L12.8333 4.00002" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

      </div>
    </div>
  </div>
</div>