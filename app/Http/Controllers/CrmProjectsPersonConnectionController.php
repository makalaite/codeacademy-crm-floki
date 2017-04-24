<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class CrmProjectsPersonConnectionController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmprojectspersonconnection
	 *
	 * @return Response
	 */
	public function index()
	{
        return CrmProjectsPersonConnectionController::orderBy('created_at','asc')->get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmprojectspersonconnection/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmprojectspersonconnection
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmprojectspersonconnection/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /crmprojectspersonconnection/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /crmprojectspersonconnection/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /crmprojectspersonconnection/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}