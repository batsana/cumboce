<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
        $user = Auth()->user();
      $nivel =$user->nivel;
      $id_user = $user->id;
      //return $nivel;
       $consultas = DB::table('consultas')->where('user_id', $id_user)->get();

      if ($nivel == 'paciente') {
          return view('home', compact('user', 'consultas'));
      }else{
        if ($nivel == 'medico') {
          return view('consulta.index', compact('user'));
      }else{
        if($nivel == 'admin'){
            return view('medico.create',compact('user'));
        }
      }

      }

      
       // return view('home');
    }
}
