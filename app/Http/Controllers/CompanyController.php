<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $companies = Company::all();

      return view('companies.index', compact('companies'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('companies.create');
  }

  /**
   * Store a newly created resource in storage.
   * @param Request $request: HTTP request
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $company = new Company();
      $company->name = $request->get('name');
      $company->is_breeder = $request->get('is_breeder');
      $company->legal_status = $request->get('legal_status');
      $company->customer_id = $request->get('customer_id', null);
      $company->entity_id = $request->get('entity_id');
      $company->bred_id = $request->get('bred_id',null);
      $company->unicorn_id = $request->get('unicorn_id', null);
      $company->breeding_id = $request->get('breeding_id', null);
      $company->save();

      return redirect()->route('companies.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      $entity = Company::with('entities')->find($id);
      $clientele = Company::with('customers')->get($id);
      $unicorn = Company::with('unicorns')->get($id);
      $breeding = Company::with('breedings')->get($id);
      $bred = Company::with('breds')->get($id);

      return view('companies.show', compact('entity', 'clientele', 'unicorn', 'bred', 'breeding'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
      $company = Company::find($id);

      return view('companies.edit', compact('company'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @param Request $request: HTTP request
   * @return Response
   */
  public function update(Request $request, $id)
  {
      $company = Company::find($id);
      $company->name = $request->get('name');
      $company->is_breeder = $request->get('is_breeder');
      $company->legal_status = $request->get('legal_status');
      $company->customer_id = $request->get('customer_id');
      $company->entity_id = $request->get('entity_id');
      $company->bred_id = $request->get('bred_id');
      $company->unicorn_id = $request->get('unicorn_id');
      $company->breeding_id = $request->get('breeding_id');
      $company->save();

      return redirect()->route('companies.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
      $company = Company::find($request->get('id'));
      $company->delete();

      return redirect()->route('companies.index');
  }

}

?>
