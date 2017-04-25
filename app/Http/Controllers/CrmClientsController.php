<?php namespace App\Http\Controllers;

use App\model\CrmClients;
use App\model\CrmClientsPersonsPositionConnections;
use Illuminate\Routing\Controller;

class CrmClientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmclients
	 *
	 * @return Response
	 */
    public function index()
    {
        return CrmClients::with(['projects'])->get();

        $configuration = [
            "example" => 'completeData',
            "clients" => CrmClients::with(['projects'])->get(),
            // "personal" => CrmClientsPersonsPositionConnections::
        ];

        return view('data', $configuration);

    }

	/**
	 * Show the form for creating a new resource.
	 * GET /crmclients/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmclients
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmclients/{id}
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
	 * GET /crmclients/{id}/edit
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
	 * PUT /crmclients/{id}
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
	 * DELETE /crmclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}