<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// All projects routes
Route::get('/project/all', 'ProjectController@index')->name('project.all');
Route::get('/project/all', 'ProjectController@search')->name('project.all');
Route::get('/project/addNew', 'ProjectController@create')->name('project.addNew');
Route::post('/project/addNew', 'ProjectController@store')->name('project.addNew');
Route::get('/project/edit/{project}', 'ProjectController@edit')->name('project.edit');
Route::post('/project/edit/{project}', 'ProjectController@update')->name('project.edit');
Route::get('/project/delete/{project}', 'ProjectController@destroy')->name('project.delete');
Route::get('/project/show/{project}', 'ProjectController@show')->name('project.show');
Route::get('/project/complete/{project}', 'ProjectController@complete')->name('project.complete');
Route::get('/project/notComplete/{project}', 'ProjectController@notComplete')->name('project.notComplete');

// project tasks routes
Route::get('/project/{project}/tasks', 'TaskController@show')->name('project.tasks');
Route::get('{task}/edit', 'TaskController@edit')->name('task.edit');
Route::post('{task}/edit', 'TaskController@update')->name('task.edit');
Route::get('/project/{project}/tasks/addNewTask', 'TaskController@create')->name('project.addNewTask');
Route::post('/project/{project}/tasks/addNewTask', 'TaskController@store')->name('project.addNewTask');
Route::get('/project/tasks/{task}/delete/', 'TaskController@destroy')->name('task.delete');
Route::get('/project/tasks/{task}/display', 'TaskController@display')->name('task.display');
Route::get('/project/tasks/{task}/complete', 'TaskController@complete')->name('task.complete');
Route::get('/project/tasks/{task}/notComplete', 'TaskController@notComplete')->name('task.notComplete');

// User routes
Route::resource('user', 'UserDetailsController');

// Google Login
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');


// Contact US
Route::get('contact-us', 'ContactController@getContact')->name('emails.contact_us');
Route::post('contact-us', 'ContactController@saveContact')->name('emails.contact_us');;
Route::get('/admin/contacts', 'ContactController@index')->name('contacts')->middleware('admin');
Route::get('/admin/contacts/{contact}/delete/', 'ContactController@destroy')->name('contact.delete')->middleware('admin');

// Admin Dashboard
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin/allusers', 'UserController@index')->name('allusers')->middleware('admin');
Route::get('/admin/allusers', 'UserController@search')->name('allusers')->middleware('admin');
Route::get('/admin/allusers/{user}/delete/', 'UserController@destroy')->name('user.delete')->middleware('admin');
Route::get('/admin/allusers/edit/{user}', 'UserController@edit')->name('user.edit')->middleware('admin');
Route::post('/admin/allusers/edit/{user}', 'UserController@update')->name('user.edit')->middleware('admin');

Route::get('/unauthorized', 'AdminController@unauthorized')->name('user')->middleware('user');

