<?php

Route::get('/persons', [
    'uses' => 'CrmPersonsController@index'
]);

Route::get('/generate-fake-data/persons/{count?}', [
    'uses' => 'CrmFakeDataController@generatePersons'

]);