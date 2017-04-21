<?php

Route::get('/persons', [
    'uses' => 'CrmPersonsController@index'
]);

