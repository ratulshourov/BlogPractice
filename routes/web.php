<?php





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'admin.home'
]);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/create-post', [

        'uses' => 'PostsController@create',
        'as' => 'posts.create',
    ]);
    Route::post('/post-store', [

        'uses' => 'PostsController@store',
        'as' => 'posts.store'

    ]);
});

Route::get('/catgory-create', [
    'uses' => 'CategoryController@create',
    'as' => 'category.create'
]);

Route::post('/catgory-store', [
    'uses' => 'CategoryController@store',
    'as' => 'category.store'
]);

Route::get('/catgory-list', [
    'uses' => 'CategoryController@index',
    'as' => 'category.list'
]);
Route::get('/post-list', [
    'uses' => 'PostsController@index',
    'as' => 'post.list'
]);


Route::get('/contact','ContactController@create')->middleware('contact');
Route::post('/contact-entry','ContactController@store');

Route::get('/event','EventListenerTestController@create');
Route::post('/event-entry','EventListenerTestController@store')->name('event.create');


Route::get('ajax-form-submit', 'AjaxControllerOld@index')->name('ajax-form-submit');
Route::post('save-form', 'AjaxControllerOld@store')->name('ajax.save');
Route::resource('ajax-posts', 'AjaxCrudController');





