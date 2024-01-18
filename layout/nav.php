<?php

$auth = true;

?>

<div class="border-gray">
    <div class="nav-bar">
        <a href="/" class="logo">
            <h2 class="font-[700]">php</h2>
            <span class="blog-span">blog</span>
        </a>
        <div class="flex items-center gap-3">
            <?php if ($auth) : ?>
                <button class="flex items-center gap-3 cursor-pointer py-2">
                    <div class="w-7 h-7">
                        <img class="w-full h-full rounded-full object-cover" src="/assets/img/avatar.jpg" alt="">
                    </div>
                    <span>Виктор</span>
                </button>
            <?php else : ?>
                <button class="bg-[#2D3548] text-white py-3 px-8 rounded-2xl mr-3 transition hover:bg-[#467AE9]">Войти</button>
            <?php endif; ?>
        </div>
    </div>
</div>