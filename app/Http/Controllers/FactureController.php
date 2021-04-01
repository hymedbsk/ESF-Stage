<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\Centre;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::get();
        return view('facture.list', compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $facture = new Facture;
        $facture->num = $request->input('num');
        $facture->centre_id = $request->input('centre');
        $facture->p_nom = $request->input('nom');
        $facture->p_prenom = $request->input('prenom');
        $facture->p_ddn = $request->input('ddn');
        $facture->p_dossier = $request->input('dossier');
        $facture->save();

        return redirect('facture');
    }

    public function add()
    {
        $centres = Centre::get();
        return view('facture.add',compact('centres'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facture = Facture::FindOrFail($id);
        $centres = Centre::get();

        return view('facture.edit',compact('facture','centres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $facture = Facture::FindOrFail($id);
        $facture->num = $request->input('num');
        $facture->centre_id = $request->input('centre');
        $facture->p_nom = $request->input('nom');
        $facture->p_prenom = $request->input('prenom');
        $facture->p_ddn = $request->input('ddn');
        $facture->p_dossier = $request->input('dossier');
        $facture->save();

        $factures = Facture::get();
        return view('facture.list',compact('factures'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facture = Facture::findOrFail($id);
        $facture->delete();

        return redirect('facture');
    }
}
