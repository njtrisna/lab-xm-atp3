<?php



Route::get('/', function ()
 {
    return view('index');
})->name('index');

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/customer/registration', 'customerController@add')->name('customer.registration');
Route::post('/customer/registration', 'customerController@create');

Route::group(['middleware'=>['sess']], function(){

		

	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
	Route::post('/home/profile', 'HomeController@upload');
	

	Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
	Route::get('/home/profile/{sid}', 'HomeController@proedit')->name('home.proedit');
	Route::post('/home/profile/{sid}', 'HomeController@prosave');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::post('/home/edit/{sid}', 'HomeController@update');
	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');
	
	Route::get('/customer', 'customerController@index')->name('customer.index');

	Route::group(['middleware'=>['type']], function(){
		Route::get('/home/add', 'HomeController@add')->name('home.add');
		Route::post('/home/add', 'HomeController@create');
		Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{sid}', 'HomeController@destroy');	
	});
});



Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




