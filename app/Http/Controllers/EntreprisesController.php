<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Gate;

class EntreprisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprise = Entreprise::all();
        return view('entreprise.index',[
            'entreprise'=>$entreprise
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('access-gestionnaire',)) {
            return "access Denied";
        }
        return view('entreprise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nom' => 'required',
            'rue' => 'required',
            'ville' => 'required',
            'code_postal' => 'required|max:5',
            'numero' => 'required|regex:/(0)[0-9]{9}/',
            'email' => 'required'
        ]);
        //dd($request);
        Entreprise::create($validate);

        return redirect()->route('entreprise.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entreprise = Entreprise::find($id);
        return view('entreprise.show',[
            'entreprise'=>$entreprise
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        if (! Gate::allows('access-gestionnaire',)) {
            return "access Denied";
        }
        return view('entreprise.edit', ['entreprise' => $entreprise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        if (! Gate::allows('access-gestionnaire',)) {
            return "access Denied";
        }
        $validate = $request->validate([
            'nom' => 'required',
            'rue' => 'required',
            'ville' => 'required',
            'code_postal' => 'required|max:5',
            'numero' => 'required|regex:/(0)[0-9]{9}/',
            'email' => 'required'
        ]);

        $entreprise->nom = $validate['nom'];
        $entreprise->rue = $validate['rue'];
        $entreprise->ville = $validate['ville'];
        $entreprise->code_postal = $validate['code_postal'];
        $entreprise->numero = $validate['numero'];
        $entreprise->email = $validate['email'];

        $entreprise->save();

        return redirect()->route('entreprise.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('access-admin',)) {
            return "access Denied";
        }
        $entreprise = Entreprise::find($id);

         $entreprise->delete();

        return redirect()->route('entreprise.index');
    }
}
