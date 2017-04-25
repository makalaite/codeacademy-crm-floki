<?php

use App\model\CrmClientsPersonsPositionConnections;

Route::get('/', function (){

    return CrmClientsPersonsPositionConnections::with(['personalData', 'clientData', 'positionData'])->get();

    return view('welcome');
});

Route::get('/persons', [
    'uses' => 'CrmPersonsController@index'
]);

Route::get('/generate-fake-data/persons/{count?}', [
    'uses' => 'CrmFakeDataController@generatePersons'
]);


Route::get('/clients', [
    'uses' => 'CrmClientsController@index'
]);

Route::get('/generate-fake-data/clients/{count?}', [
    'uses' => 'CrmFakeDataController@generateClients'
]);


Route::get('/clientsPositions', [
    'uses' => 'CrmClientsPositionsController@index'
]);

Route::get('/generate-fake-data/clientsPositions/{count?}', [
    'uses' => 'CrmFakeDataController@generateClientsPositions'
]);


Route::get('/personTypes', [
    'uses' => 'CrmPersonTypesController@index'
]);

Route::get('/generate-fake-data/personTypes/{count?}', [
    'uses' => 'CrmFakeDataController@generatePersonTypes'
]);


Route::get('/clientsPersonsPositionConnections', [
    'uses' => 'CrmClientsPersonsPositionConnectionsController@index'
]);

Route::get('/generate-fake-data/clientsPersonsPositionConnections/{count?}', [
    'uses' => 'CrmFakeDataController@generateClientsPersonsPositionConnections'
]);


Route::get('/crmProjectTypes', [
    'uses' => 'CrmProjectTypesController@index'
]);

Route::get('/generate-fake-data/crmProjectTypes/{count?}', [
    'uses' => 'CrmFakeDataController@generateProjectTypes'
]);


Route::get('/crmProjects', [
    'uses' => 'CrmProjectsController@index'
]);

Route::get('/generate-fake-data/crmProjects/{count?}', [
    'uses' => 'CrmFakeDataController@generateProjects'
]);


Route::get('/crmProjectLoginTypes', [
    'uses' => 'CrmProjectLoginTypesController@index'
]);

Route::get('/generate-fake-data/crmProjectLoginTypes/{count?}', [
    'uses' => 'CrmFakeDataController@generateProjectLoginTypes'
]);


Route::get('/crmProjectLogins', [
    'uses' => 'CrmProjectLoginsController@index'
]);

Route::get('/generate-fake-data/crmProjectLogins/{count?}', [
    'uses' => 'CrmFakeDataController@generateProjectLogins'
]);


Route::get('/crmProjectsPersonConnection', [
    'uses' => 'CrmProjectsPersonConnectionController@index'
]);

Route::get('/generate-fake-data/crmProjectsPersonConnection/{count?}', [
    'uses' => 'CrmFakeDataController@generateProjectsPersonConnection'
]);


Route::get('/crmProjectsLoginsConnections', [
    'uses' => 'CrmProjectsLoginsConnectionsController@index'
]);

Route::get('/generate-fake-data/crmProjectsLoginsConnections/{count?}', [
    'uses' => 'CrmFakeDataController@generateProjectsLoginsConnections'
]);
