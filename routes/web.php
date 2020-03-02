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
// Route::get('/registration', function () {
//     return view('auth/register
// 		');
// });
Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

// Route::get('/', function () {
//     return view('welcome');
 // });
// Route::get('/home', function () {
//     return view('welcome');
// });
//
Auth::routes();

Route::get('/adminhome', 'HomeController@adminindex');

Route::get('/aboutus','HomeController@aboutuspage')->name('aboutus');

Route::get('/contactus','HomeController@contactuspage')->name('contactus');

Route::get('/media','HomeController@mediapage')->name('media');

Route::get('/team','HomeController@teammemberspage')->name('team');

//finance services
Route::get('finance/budgeting','HomeController@budgetingpage');

Route::get('finance/saving','HomeController@savingpage');

Route::get('finance/investing','HomeController@investingpage');

Route::get('finance/insurance','HomeController@insurancepage');

Route::get('finance/retirement','HomeController@retirementpage');

Route::get('finance/debtmanagement','HomeController@debtmanagepage');

Route::get('finance/taxes','HomeController@taxespage');

//training
Route::get('training/personalfinance','HomeController@personalfpage');

Route::get('training/insuranceproducts','HomeController@insuranceprdctpage');

Route::get('training/insurancecourses','HomeController@insurancecoursespage');

Route::get('training/customerservice','HomeController@customerservicepage');
Route::get('training/detectfraud','HomeController@fraudpage');



//talent search
Route::get('talentsearch/careergrowth','HomeController@careergrowthpage');
Route::get('talentsearch/productivity','HomeController@productivitypage');
Route::get('talentsearch/jobloss','HomeController@joblosspage');
Route::get('talentsearch/carrerchoice','HomeController@choosecareerpage');

//sales management
Route::get('salesmanagement/recruiting','HomeController@recruitingtpage');
Route::get('salesmanagement/sellingskills','HomeController@sellingskillspage');
Route::get('salesmanagement/leadership','HomeController@leadershippage');
Route::get('salesmanagement/crossselling','HomeController@crosssellingpage');

//post contact us

Route::post('contactus','ContactController@sendcontactinformation');

//admin operations
Route::get('/admin/viewimages', 'AdminController@viewImages');
Route::get('/admin/addimages', 'AdminController@addImages');

Route::post('admin/thumbnailImagePost', 'AdminController@addthumbnailImages');

Route::get('/admin/editimage/{id}','AdminController@editimage');

Route::post('admin/editimage/thumbnailImagePost/{id}', 'AdminController@updatethumbnailImages');
Route::get('/admin/deleteimage/{id}','AdminController@deleteupload');