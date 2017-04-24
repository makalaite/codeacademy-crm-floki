<?php namespace App\Http\Controllers;

use App\model\CrmClientsPositions;
use Illuminate\Routing\Controller;

class CrmClientsPositionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmclientspositions
	 *
	 * @return Response
	 */
	public function index()
	{
        return CrmClientsPositions::orderBy('created_at','asc')->get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /crmclientspositions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmclientspositions
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmclientspositions/{id}
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
	 * GET /crmclientspositions/{id}/edit
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
	 * PUT /crmclientspositions/{id}
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
	 * DELETE /crmclientspositions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}