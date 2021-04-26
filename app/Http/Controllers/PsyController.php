<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Models\Psy;

class PsyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psys = Psy::get();
        return view('psy.list', compact('psys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('photo');
        $filename = uniqid('esf_');
        $extension = $img->getClientOriginalExtension();
        $img->storeAs('public', $filename.'.'.$extension);
        $input['photo'] = $filename;

        $psy = new Psy();
        $psy->nom = $request->input('nom');
        $psy->prenom = $request->input('prenom');
        $psy->specialite = $request->input('specialite');
        $psy->photo = $filename. '.' .$extension;
        $psy->save();

        return redirect('psy');


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
        $psy = Psy::findOrFail($id);
        return view('psy.edit', compact('psy'));
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
        $psy = Psy::findOrFail($id);
        $psy->nom = $request->input('nom');
        $psy->prenom = $request->input('prenom');
        $psy->specialite = $request->input('specialite');
        $img = $request->file('photo');
        $filename = uniqid('esf_');
        $extension = $img->getClientOriginalExtension();
        $img->storeAs('public', $filename.'.'.$extension);
        $input['photo'] = $filename;


        $psy->photo = $filename. '.' .$extension;
        $psy->save();

        return redirect('psy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psy = Psy::findOrFail($id);
        $psy->delete();

        return redirect('psy');
    }
}
