<?php namespace App\Http\Controllers;

use App\model\CrmProjects;
use Illuminate\Routing\Controller;

class CrmProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /crmprojects
	 *
	 * @return Response
	 */
    public function index()
    {
        $configuration = [];

        $configuration['project'] = CrmProjects::with(['client', 'type', 'personal'])->get()->toArray();
        $configuration['totalCount'] = sizeof($configuration['project']);


        dd($configuration);

        return view('content.projects', $configuration);
        //CrmClients::with(['projects'])->get();


        return view('data', $configuration);

    }

	/**
	 * Show the form for creating a new resource.
	 * GET /crmprojects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /crmprojects
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /crmprojects/{id}
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
	 * GET /crmprojects/{id}/edit
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
	 * PUT /crmprojects/{id}
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
	 * DELETE /crmprojects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}