<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index(){
        $notas = Notas::all();
    
        return view('notas', ['notas' => $notas]);
    }

    public function agregar(){
        return view('agregar');
    }

    public function store(Request $request){
        Notas::create([
            'titulo' => $request->input('title'),
            'contenido' =>$request->input('content'),
        ]);
    
        return redirect('/notas');
    
    }

    public function edit($id){
        $notas = Notas::find($id);
        
        return view('editar', ['notas' => $notas]);
    }

    public function update(Notas $notas, Request $requestid){

        $notas->update([
            'titulo' => $requets->input('title'),
            'contenido' => $request->input('content'),
        ]);

        return redirect('/notas');
    }

    public function destroy($id)
    {
        $notas = Notas::find($id);

        $notas->delete();

        return redirect('/');
    }

}
