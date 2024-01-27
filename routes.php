<?php

require_once __DIR__ . '/router.php';

get('/', 'pages/index.php');
get('/contact', 'pages/contact.php');


get('/admin', 'admin/index.php');
get('/create-category', 'admin/create-category.php');
get('/create-post', 'admin/create-posts.php');

post('/create-category', 'admin/create-category.php');



any('/404', 'pages/404.php');
