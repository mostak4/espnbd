<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/' , 'EspnBDController@home');
Route::get('/about_us' , 'EspnBDController@aboutUs');
Route::get('/notice' , 'EspnBDController@notice');
Route::get('/contact' , 'EspnBDController@contact');
Route::get('/category/2' , 'EspnBDController@category_2');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-user','UseradminController@useradmin');
Route::get('/manage-user','UseradminController@useradmin');


Route::get('/add-category','CategoryController@category');
Route::post('/new-category','CategoryController@saveCategoryInfo');
Route::get('/manage-category','CategoryController@manageCategoryInfo');

Route::get('/category/unpublished{id}', 'CategoryController@unpublushedCategoryInfo');
Route::get('/category/published{id}', 'CategoryController@publushedCategoryInfo');
Route::get('/category/edit{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/delete{id}', 'CategoryController@deleteCategoryInfo');


Route::get('/add-product', 'ProductController@product');
Route::post('/new-product', 'ProductController@saveProductInfo');
Route::get('/manage-product', 'ProductController@manageProductInfo');
Route::get('/product/unpublished{id}', 'ProductController@unpublishedProductInfo');
Route::get('/product/published{id}', 'ProductController@publishedProductInfo');
Route::get('/product/delete{id}', 'ProductController@deleteProductInfo');
Route::get('/product/edit{id}', 'ProductController@editProductInfo');
Route::post('/product/update', 'ProductController@updateProductSaveinfo');


Route::get('/slider/image/add', 'SliderController@sliderImage');
Route::post('/slider/image', 'SliderController@saveSliderImage');
Route::get('/manage/slider/image', 'SliderController@manageSliderImage');

Route::get('/slider/unpublished{id}', 'SliderController@unpublishedSliderInfo');
Route::get('/slider/published{id}', 'SliderController@publishedSliderInfo');
Route::get('/slider/delete{id}', 'SliderController@deleteSliderInfo');


Route::get('/add-features', 'OurFeaturesController@features');
Route::post('/new-features', 'OurFeaturesController@saveFeatureInfo');
Route::get('/manage-features', 'OurFeaturesController@manageFeatureInfo');

Route::get('/feature/unpublished{id}', 'OurFeaturesController@unpublishedFeatureInfo');
Route::get('/feature/published{id}', 'OurFeaturesController@publishedFeatureInfo');
Route::get('/feature/edit{id}', 'OurFeaturesController@editFeatureInfo');
Route::post('/feature/update{id}', 'OurFeaturesController@updateFeatureInfo');
Route::get('/feature/delete{id}', 'OurFeaturesController@deleteFeatureInfo');


Route::get('/add-notice', 'NoticeController@noticeInfo');
Route::post('/new-notice', 'NoticeController@saveNoticeInfo');
Route::get('/manage-notice', 'NoticeController@manageNoticeInfo');
Route::get('/product/details{id}', 'NoticeController@viewNoticeDetailsInfo');
Route::get('/notice/unpublished{id}', 'NoticeController@unpublishedContentInfo');
Route::get('/notice/published{id}', 'NoticeController@publishedContentInfo');
Route::get('/notice/delete{id}', 'NoticeController@deleteNoticeInfo');










