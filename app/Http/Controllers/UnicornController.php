<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Unicorn;
use App\Models\Company;

class UnicornController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $unicorns = Unicorn::all();

    return view('unicorns.index', compact('unicorns'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $companies = Company::all();

    return view('unicorns.create', compact('companies'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $unicorn = new Unicorn();
    $user = auth()->user();

    $unicorn->age = $request->get('age');
    $unicorn->name = $request->get('name');
    $unicorn->mating_season = $request->get('mating_season');
    $unicorn->date_start_mating_season = $request->get('date_start_mating_season');
    $unicorn->nb_mating = $request->get('nb_mating');
    $unicorn->unit_cost_HT = $request->get('unit_cost_HT');
    $unicorn->company_id = $user->id;
    $unicorn->save();

    return redirect()->route('unicorns.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $unicorn = Unicorn::with('company')->find($id);
    return view('unicorns.show', compact('unicorn'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $unicorn = Unicorn::find($id);

    return view('unicorns.edit', compact('unicorn'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    $unicorn = Unicorn::find($id);
    $unicorn->age = $request->get('age');
    $unicorn->name = $request->get('name');
    $unicorn->mating_season = $request->get('mating_season');
    $unicorn->date_start_mating_season = $request->get('date_start_mating_season');
    $unicorn->nb_mating = $request->get('nb_mating');
    $unicorn->unit_cost_HT = $request->get('unit_cost_HT');
    $unicorn->company_id = $request->get('company_id');
    $unicorn->save();

    return redirect()->route('unicorns.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    $unicorn = Unicorn::find($request->get('id'));
    $unicorn->delete();

    return redirect()->route('unicorns.index');
  }

}

?>
