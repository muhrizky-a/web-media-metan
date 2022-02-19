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


Route::get('/', 'HomeController@home')->name("home");
Route::get('/cookie/set/{name}', 'CookieController@setCookie')->name("setCookie");
Route::get('/cookie/get/{name}', 'CookieController@getCookie')->name("getCookie");

//Route::get('/category', 'HomeController@category')->name("category");
Route::get('/category/{category:link}', 'HomeController@category')->name("category.page");
Route::get('/search', 'HomeController@search')->name("search");

Route::post('admin/auth', 'LoginController@authenticate')->name('admin.auth');
Route::post('logout', 'LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    //For testing purpose
    Route::get('/admin/test', 'HomeController@test')->name("test");

    Route::get('/admin', 'HomeController@admin')->name("admin")->middleware('auth');
    Route::get('/admin/home', 'HomeController@admin_home')->name("admin.home");
    Route::get('/admin/settings', 'HomeController@admin_settings')->name("admin.settings");
    Route::get('/admin/logout', 'HomeController@admin_logout')->name("admin.logout");

    Route::get('/admin/article', 'ArticleController@admin_article_list')->name("admin.article.list");
    Route::get('/admin/article/detail/{article}', 'ArticleController@admin_article_detail')->name("admin.article.detail");
    Route::get('/admin/article/insert', 'ArticleController@article_insert')->name("admin.article.insert");
    Route::get('/admin/article/update/{article}', 'ArticleController@admin_article_update')->name("admin.article.update");

    Route::get('/admin/category', 'CategoryController@admin_category_list')->name("admin.category.list");
    Route::get('/admin/category/detail/{category}', 'CategoryController@admin_category_detail')->name("admin.category.detail");
    Route::get('/admin/category/insert', 'CategoryController@category_insert')->name("admin.category.insert");
    Route::get('/admin/category/update/{category}', 'CategoryController@admin_category_update')->name("admin.category.update");

    Route::get('/admin/journalist', 'JournalistController@admin_journalist_list')->name("admin.journalist.list");
    Route::get('/admin/journalist/insert', 'JournalistController@journalist_insert')->name("admin.journalist.insert");
    Route::get('/admin/journalist/update/{journalist}', 'JournalistController@admin_journalist_update')->name("admin.journalist.update");
});

Route::post('admin/auth', 'LoginController@authenticate')->name('admin.auth');
Route::post('logout', 'LoginController@logout')->name('logout');
Route::get('/admin/login', 'HomeController@admin_login')->name("admin.login");




Route::post('/article/create', 'ArticleController@create')->name("create.article");
Route::get('/article/{article:link}', 'ArticleController@article_detail')->name("article.detail");
Route::put('/article/update/{article}', 'ArticleController@update')->name("update.article");
Route::delete('/article/delete/{article}', 'ArticleController@delete')->name("delete.article");

Route::post('/article-comments/create', 'ArticleCommentController@create')->name("create.article.comments");

Route::post('/category/create', 'CategoryController@create')->name("create.category");
Route::put('/category/update/{category}', 'CategoryController@update')->name("update.category");
Route::delete('/category/delete/{category}', 'CategoryController@delete')->name("delete.category");

Route::post('/journalist/create', 'JournalistController@create')->name("create.journalist");
Route::put('/journalist/update/{journalist}', 'JournalistController@update')->name("update.journalist");
Route::delete('/journalist/delete/{journalist}', 'JournalistController@delete')->name("delete.journalist");

Route::get('/author/{name}', 'JournalistController@create')->name("journalist.posts");
