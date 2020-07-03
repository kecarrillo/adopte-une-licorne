<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Breeding;
use App\Models\Company;

class BreedingController extends Controller {

 /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $breedings = Breeding::all();

    return view('breedings.index', compact('breedings'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $companies = Company::all();

    return view('breedings.create', compact('companies'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $current_user = auth()->user();
    $breeding = new breeding();

    $breeding->name = $request->get('name');
    $breeding->nb_unicorn = $request->get('nb_unicorn');
    $breeding->unit_cost_HT = $request->get('unit_cost_HT');
    $breeding->gender = $request->get('gender');
    $breeding->company_id = $current_user->company_id;
    $breeding->save();

    return redirect()->route('breedings.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $breeding = breeding::with('company')->find($id);
    return view('breedings.show', compact('breeding'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $breeding = breeding::find($id);

    return view('breedings.edit', compact('breeding'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    $breeding = breeding::find($id);
    $breeding->name = $request->get('name');
    $breeding->nb_unicorn = $request->get('nb_unicorn');
    $breeding->unit_cost_HT = $request->get('unit_cost_HT');
    $breeding->gender = $request->get('gender');
    $breeding->company_id = $request->get('company_id');
    $breeding->save();

    return redirect()->route('breedings.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    $breeding = breeding::find($request->get('id'));
    $breeding->delete();

    return redirect()->route('breedings.index');
  }

}

?>
