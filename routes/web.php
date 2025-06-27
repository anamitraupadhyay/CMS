<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Models\WpPost;

// POSTS
Route::get('/', function () {
    $posts = DB::table('wp_posts')
        ->select('ID', 'post_title', 'post_content', 'post_status')
        ->where('post_type', 'post')
        ->where('post_status', 'publish')
        ->orderBy('post_date', 'desc')
        ->limit(10)
        ->get();

    return view('wordpress_posts', ['posts' => $posts]);
});

// USERS
Route::get('/wp-users', function () {
    $users = DB::table('wp_users')
        ->select('ID', 'user_login', 'user_email', 'user_registered')
        ->orderBy('user_registered', 'desc')
        ->get();

    return view('wordpress_users', ['users' => $users]);
});
