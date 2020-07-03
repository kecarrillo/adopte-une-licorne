<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
      $current_user = Auth::user();

      $contact = Contact::create([
          'phone' => $request->get('phone'),
          'email' => $request->get('email'),
          'wording_address' => $request->get('wording_address', null),
          'town' => $request->get('town',null),
          'zip_code' => $request->get('zip_code', null),
          'country' => $request->get('country', null),
      ]);

      $company = Company::create([
          'company_name' => $request->get('company_name'),
          'legal_status' => $request->get('legal_status'),
          'contact_id' => $contact['id'],
          'bred_id' => $request->get('bred_id',null),
          'unicorn_id' => $request->get('unicorn_id', null),
          'breeding_id' => $request->get('breeding_id', null),
      ]);
      $company->save();

      $current_user->company_id = $company['id'];
      $current_user->save();

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
      $contact = Contact::find($request->get('contact_id'));

      $contact->phone = $request->get('phone');
      $contact->email = $request->get('email');
      $contact->wording_address = $request->get('wording_address', null);
      $contact->town = $request->get('town',null);
      $contact->zip_code = $request->get('zip_code', null);
      $contact->country = $request->get('country', null);
      $contact->save();

      $company = Company::find($id);

      $company->company_name = $request->get('company_name');
      $company->legal_status = $request->get('legal_status');
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
