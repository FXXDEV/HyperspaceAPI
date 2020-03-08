<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* Planet routes */
Route::get('planets/all','PlanetController@list')->name('planets.index');
Route::get('planets/name/{name}','PlanetController@planetInfoByName')->name('planets.byName');
Route::get('planets/id/{id}','PlanetController@planetInfoByid')->name('planets.byId');


/*Visits routes */
Route::post('visits','VisitController@storeVisitors')->name('visits.index');
Route::get('visits/ranking','VisitController@rankingVisitors')->name('visits.ranking');
Route::get('visits/list','VisitController@listVisits')->name('visits.list');

/*People routes */
Route::get('people/all','PeopleController@list')->name('people.index');
Route::get('people/name/{name}','PeopleController@peopleInfoByName')->name('people.byName');
Route::get('people/id/{id}','PeopleController@peopleInfoById')->name('people.byId');
