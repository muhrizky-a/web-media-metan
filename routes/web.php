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
Route::get('/article', 'HomeController@article')->name("article");
Route::get('/category', 'HomeController@category')->name("category");
Route::get('/category/{name}', 'HomeController@category_list')->name("category.page");
Route::get('/search', 'HomeController@search')->name("search");

Route::get('/admin', 'HomeController@admin')->name("admin");
Route::get('/admin/home', 'HomeController@admin_home')->name("admin.home");
Route::get('/admin/article', 'HomeController@admin_article_list')->name("admin.article.list");
Route::get('/admin/article/insert', 'HomeController@article_insert')->name("admin.article.insert");
Route::get('/admin/category', 'HomeController@admin_category_list')->name("admin.category.list");
Route::get('/admin/category/insert', 'HomeController@category_insert')->name("admin.category.insert");
Route::get('/admin/journalist', 'HomeController@admin_journalist_list')->name("admin.journalist.list");
Route::get('/admin/journalist/insert', 'HomeController@journalist_insert')->name("admin.journalist.insert");

Route::post('/article/create', 'ArticleController@create')->name("create.article");
Route::get('/article/{name}', 'ArticleController@article_detail')->name("article.detail");
Route::get('/article/edit/{id}', 'ArticleController@edit_article')->name("edit.article");
Route::post('/article/update', 'ArticleController@update')->name("update.article");
Route::get('/article/delete', 'ArticleController@delete')->name("delete.article");

Route::post('/category/create', 'CategoryController@create')->name("create.category");

Route::post('/journalist/create', 'JournalistController@create')->name("create.journalist");
Route::post('/author/{name}', 'JournalistController@create')->name("journalist.posts");