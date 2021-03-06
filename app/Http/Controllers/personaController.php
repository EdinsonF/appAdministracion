<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Persona;
use App\User;
use Session;

class personaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index(Request $request)
    {
        $personas=persona::paginate(3);
        $usuarios = User::obtenerRegistrosAll();
        if($request->ajax()){

            return response()->json(array ('vista'=>view('Admin.Slides.listPersonaPaginate',['personas' => $personas])->render(), 'personas' =>$personas));

        }
        

        return view('Admin.Persona.persona',['personas' => $personas, 'usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            Persona::create($request->all());
            return response()->json([
                "mensaje"=>"Creado"
                ]);
        }
 
        
    }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona=Persona::find($id);
        return response()->json(
            $persona->toArray()
        );
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
       
            $persona=Persona::find($id);
            $persona->fill($request->all());
            $persona->save();
            return response()->json([
            "mensaje"=>"listo"
            ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
