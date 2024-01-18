<?php

require_once __DIR__ . '/router.php';

get('/', 'pages/index.php');
get('/contact', 'pages/contact.php');



get('/admin', 'admin/index.php');
get('/create-category', 'admin/create-category.php');
post('/create-category', 'admin/create-category.php');


//get('/user/$id', 'pages/user');
//get('/user/$name/$last_name', 'views/full_name.php');
//get('/product/$type/color/$color', 'product.php');
//get('/callback', function(){
//    echo 'Callback executed';
//});
//get('/callback/$name', function($name){
//    echo "Callback executed. The name is $name";
//});
//get('/product', '');
//get('/callback/$name/$last_name', function($name, $last_name){
//    echo "Callback executed. The full name is $name $last_name";
//});
//post('/user', '/api/save_user');


any('/404', 'pages/404.php');
