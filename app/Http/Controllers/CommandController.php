<?php 

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\Breeding;


use Illuminate\Http\Request;
use Illuminate\Http\Response;


class CommandController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $commands = Command::all();

    return view('commands.index', compact('commands'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('commands.create');
  }

  /**
   * Store a newly created resource in storage.
   *@param Request $request: HTTP request
   * 
   * @return Response
   */
  public function store(Request $request)
  {
    // Retrieve the clicked breeding
    //$current_breeding = 
    $command = new Command();

    $command->quantity = $request->get('quantity');
    $command->breeding_id = $current_breeding['id'];
    $command->save();

    return redirect()->route('commands.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $command = command::with('breeding')->find($id);

    return view('commands.show', compact('command'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $command = Command::find($id);

    return view('commands.edit', compact('command'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @param Request $request: HTTP request
   * @return Response
   */
  public function update($id)
  {
    $breeding = Breeding::find($request->get('breeding_id'));

    $command = command::find($id);

    $command->quantity = $request->get('quantity');
    $command->save();

    return redirect()->route('commands.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    $command = Command::find($request->get('id'));
    $command->delete();

    return redirect()->route('commands.index');
  }
  
}

?>