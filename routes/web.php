  
<?php





//Route::get('/', 'HomeController@index');


Route::get('/', function(){
	return view('home');
});

Route::get('/article', 'Home1Controller@index');

//Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/fact', 'FactController@index');

Route::get('/galery', 'GaleryController@index');


Auth::routes();

Route::get('/home', 'Home1Controller@index')->name('home');

Route::get('/manage', 'ArticleController@manage')->name('manage');

Route::get('/manage/add','ArticleController@add');

Route::post('/manage/create','ArticleController@create');

Route::get('/manage/edit/{id}','ArticleController@edit');

Route::post('/manage/update/{id}','ArticleController@update');

Route::get('/manage/delete/{id}','ArticleController@delete');

Route::get('/about', 'AboutController@comment');

Route::get('/comment/{id}', 'CommentController@comment');

Route::get('/mKomen', 'CommentController@manage')->name('manage');

Route::get('/mKomen/add','CommentController@add');

Route::post('/mKomen/create','CommentController@create');

Route::get('/mKomen/edit/{id}','CommentController@edit');

Route::post('/mKomen/update/{id}','CommentController@update');

Route::get('/mKomen/delete/{id}','CommentController@delete');

Route::get('/user/{id}', 'UserController@user');

Route::get('/mUser', 'UserController@manage')->name('manage');

Route::get('/mUser/edit/{id}','UserController@edit');

Route::post('/mUser/update/{id}','UserController@update');

Route::get('/mUser/delete/{id}','UserController@delete');
