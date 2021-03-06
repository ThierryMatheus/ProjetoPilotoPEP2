<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('denuncia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        denuncia::create([
            'titulo' => $request->titulo,
            'coment' => $request->coment,
            'user_id' => Auth::user()->id
            ]);

            return Redirect::route('dashboard')
        ->with('success', 'Denuncia Criada com sucesso');


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
        $denuncia = Denuncia::find($id);
        return view('denuncia.edit')->with('denuncia', $denuncia);
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
        $denuncia = Denuncia::where('id', $id)->update([
            'titulo' => $request->input('titulo'),
            'coment' => $request->input('coment')
        ]);

        return redirect('/suas-denuncias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $denuncia = Denuncia::find($id);
        $denuncia->delete();

        return redirect('/suas-denuncias');
    }
}
