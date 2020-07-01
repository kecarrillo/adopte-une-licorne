<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
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
      $contact = new Contact();

//      $contact_id = Company::find(1)->contacts->where('id', $contact->id)->first();
//      echo "<script>alert('id contact: " . $contact_id . "' );</script>";
//      echo "<script>alert('Contact: " . $contact . "' );</script>";

      $company->company_name = $request->get('company_name');
      $company->legal_status = $request->get('legal_status');
      $company->customer_id = $request->get('customer_id', null);
      $company->bred_id = $request->get('bred_id',null);
      $company->unicorn_id = $request->get('unicorn_id', null);
      $company->breeding_id = $request->get('breeding_id', null);
      $company->save();

      $contact->phone = $request->get('phone');
      $contact->email = $request->get('email');
      $contact->wording_address = $request->get('wording_address');
      $contact->town = $request->get('town');
      $contact->zip_code = $request->get('zip_code');
      $contact->country = $request->get('country');
      $contact->company_id = $request->get('company_id');
      $contact->save();

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
      $company = Company::with('contacts')->find($id);

      return view('companies.show', compact('company'));

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
      $company->legal_status = $request->get('legal_status');
      $company->customer_id = $request->get('customer_id');
      $company->contact_id = $request->get('contact_id');
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
