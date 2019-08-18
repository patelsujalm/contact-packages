<?php


Route::group(['namespace'=>'patelsujal\contact\Http\Controllers'],function(){

	Route::get('contact','ContactController@create')->name('contactview');
	Route::post('contact','ContactController@store')->name('contactprocess');

});