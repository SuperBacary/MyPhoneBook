<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborateur;
use Illuminate\Support\Facades\Gate;

class CollaborateursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $collaborateur = Collaborateur::all();

        return view('collaborateur.index',[
            'collaborateurs'=> $collaborateur
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
        return view('collaborateur.create');
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
            'civilite' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'rue' => 'required',
            'code_postal' => 'required',
            'ville'  => 'required',
            'numero'  => 'required',
            'email'  => 'required',
            'entreprise'  => 'required',
        ]);

         Collaborateur::create($validate);

         return redirect()->route('collaborateur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collaborateur = Collaborateur::find($id);
        return view('collaborateur.show',[
            'collaborateur'=>$collaborateur
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborateur $collaborateur)
    {
        if (! Gate::allows('access-gestionnaire',)) {
            return "access Denied";
        }
        return view('collaborateur.edit', ['collaborateur' => $collaborateur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collaborateur $collaborateur)
    {
        if (! Gate::allows('access-gestionnaire',)) {
            return "access Denied";
        }
        $validate = $request->validate([
            'civilite' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'rue' => 'required',
            'code_postal' => 'required',
            'ville'  => 'required',
            'numero'  => 'required',
            'email'  => 'required',
            'entreprise'  => 'required',
        ]);
        $collaborateur->prenom = $validate['prenom'];
        $collaborateur->nom = $validate['nom'];
        $collaborateur->rue = $validate['rue'];
        $collaborateur->ville = $validate['ville'];
        $collaborateur->code_postal = $validate['code_postal'];
        $collaborateur->civilite = $validate['civilite'];
        $collaborateur->numero = $validate['numero'];
        $collaborateur->email = $validate['email'];
        $collaborateur->entreprise = $validate['entreprise'];

        $collaborateur->save();

        return redirect()->route('collaborateur.index');
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

        $collaborateur = Collaborateur::find($id);

         $collaborateur->delete();

        return redirect()->route('collaborateur.index');
    }
}
