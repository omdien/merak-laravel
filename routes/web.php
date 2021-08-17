<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Didin Handiman",
        "email" => "didin.handiman@kkp.go.id",
        "image" => "didin.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Shandika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident omnis voluptates sunt adipisci facilis architecto voluptate repellendus dolores saepe officiis. Sed, incidunt. Minima ducimus reprehenderit animi delectus dignissimos. Natus aliquid iure laboriosam nam voluptatem ad sapiente, doloribus, consectetur similique alias modi veritatis et minima. Sapiente accusantium harum nam illo culpa maxime consequatur sunt eligendi expedita temporibus numquam ex id, officia iste accusamus tenetur alias hic ullam iusto. Odio unde delectus, provident beatae vitae magnam suscipit porro assumenda itaque minima sunt?"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Didin Handiman",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut fugiat, vel doloribus quibusdam rem dicta nostrum! Magni quae eius impedit dolor culpa corrupti sequi, illo at aliquam, debitis aliquid qui dolorem rem dolorum velit reiciendis eaque. Reiciendis totam aut modi provident illum dolores velit, debitis et repellat perspiciatis culpa, possimus quos ullam impedit hic dolorum soluta explicabo iure odit repellendus sit esse eum eligendi? Dolorum veniam est sequi? Nemo facilis explicabo quam perspiciatis delectus ipsum veritatis incidunt quis nobis expedita, minus tenetur ea tempora velit corporis possimus, accusantium necessitatibus quasi impedit exercitationem optio natus est perferendis! Eum officia ducimus voluptatum ipsum quo voluptatibus? Dicta facilis sed hic illum ratione deserunt, deleniti iure sunt perspiciatis libero ea cum consequatur explicabo. Obcaecati!"
        ]
    ];
    return view('post', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
});
