<?php

namespace App\Http\Controllers;
use App\Medico;
use App\User;
use App\Consulta;
use DB;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $consultass=Consulta::all();
        // $consultass = DB::table('consultas')->where('user_id', Auth()->user()->id)->get();

        return view('consulta.index', compact('consultass'));

        $users = DB::table('consultas')
            ->join('users', 'consultas.user_id', '=', 'users.id')
            ->join('medicos', 'consultas.medico_id', '=', 'medicos.user_id')
            ->select('users.*', 'medicos.*', 'consultas.*')
            ->get();

            return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $medicos=Medico::all();
        return view('consulta/create', compact('users'),compact('medicos'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Consulta::create($request->all());

        return redirect()->route('consultas.index');
      


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $consulta = Consulta::find($id);
        return view('consulta.update', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consulta = Consulta::find($id);

        $consulta->update($request->all());

     return redirect('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta=Consulta::find($id);
        $consulta->delete();
        return redirect()->back();
    }
}
