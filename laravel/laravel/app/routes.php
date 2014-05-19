<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function()
{
    /*$valor=Helpers::doMessage();
    return $valor;*/
	return View::make('hello');
    //$values=__::each(array(1, 2, 3), function($num) { echo $num . ','; }); // 1,2,3,1,2,3,

    //return "This a test";
    //return $values;
});


Route::get('test', 'HomeController@test');


/*Route::get('user/{id}', function($id)
{
    return 'User '.$id;
});

Route::get('user/{name?}', function($name = null)
{
    return $name;
});

Route::get('user/{name?}', function($name = 'John')
{
    return $name;
});
*/
Route::get('user/{name}', function($name)
{
    if(empty($name))
    {
    	App::abort(404);
    }
})
->where('name', '[A-Za-z]+');

Route::controller('list', 'ListController');

Route::resource('list', 'ListController');
Route::resource('list.tasks', 'ListTaskController');
