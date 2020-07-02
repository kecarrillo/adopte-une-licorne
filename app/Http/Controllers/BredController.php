<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bred;
use App\Models\Company;

class BredController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $breds = Bred::all();

    return view('breds.index', compact('breds'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $companies = Company::all();

    return view('breds.create', compact('companies'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $bred = new bred();
    $current_user = Auth::user();

    
    $bred->company_id = $user['id'];
    $bred->save();

    return redirect()->route('breds.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $bred = bred::with('company')->find($id);
    return view('breds.show', compact('bred'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $bred = bred::find($id);

    return view('breds.edit', compact('bred'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {
    $bred = bred::find($id);
    
    $bred->save();

    return redirect()->route('breds.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    $bred = bred::find($request->get('id'));
    $bred->delete();

    return redirect()->route('breds.index');
  }
  
}

?>