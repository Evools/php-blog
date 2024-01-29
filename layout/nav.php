<?php

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: /signin");
}

switch ($_SESSION['role']) {
    case 2:
        $_SESSION['role'] = "Модератор";
        break;
    case 3:
        $_SESSION['role'] = "Администратор";
        break;
    default:
        $_SESSION['role'] = "Пользователь";
        break;
}

?>

<div class="border-gray">
    <div class="nav-bar">
        <a href="/" class="logo">
            <h2 class="font-[700]">php</h2>
            <span class="blog-span">blog</span>
        </a>
        <div class="flex items-center gap-3">
            <?php if ($_SESSION['is_auth']) : ?>
                <button id="dropdown-button" class="flex items-center gap-3 cursor-pointer py-2">
                    <div class="w-7 h-7">
                        <img class="w-full h-full rounded-full object-cover" src="/assets/img/avatar.jpg" alt="">
                    </div>
                    <span><?= $_SESSION['username']; ?></span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                            <path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path>
                        </svg>
                    </span>
                </button>
                <!-- component -->
                <div class="bg-gray-100">
                    <div class="relative inline-block text-left">
                        <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-6 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden">
                            <div class="py-2 p-2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
                                <p class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer font-bold" role="menuitem">
                                    <?= $_SESSION['email']; ?>
                                </p>
                                <p class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer" role="menuitem">
                                    Ваша роль: <?= $_SESSION['role']; ?>
                                </p>
                                <hr class="mt-2 mb-2">
                                <?php if ($_SESSION['role'] == 3) : ?>
                                    <a href="/admin" class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer" role="menuitem">
                                        Админ панель
                                    </a>
                                <?php endif; ?>
                                <a href="/profile" class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer" role="menuitem">
                                    Профиль
                                </a>
                                <a href="/?logout" class="flex rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-red-500 hover:text-white active:bg-red-500 cursor-pointer" role="menuitem">
                                    Выйти
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end component -->
            <?php else : ?>
                <button class="bg-[#2D3548] text-white py-3 px-8 rounded-2xl mr-3 transition hover:bg-[#467AE9]">Войти</button>
            <?php endif; ?>
        </div>
    </div>
</div>