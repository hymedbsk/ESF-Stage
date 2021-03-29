<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use PDF;
use Carbon\Carbon;

use App\Models\Prestation;
use App\Models\Centre;

class PrestationController extends Controller
{
    private $tot = 0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $facture =  Facture::FindOrFail($id);
        $prestations = Prestation::all()->where('fact_id','=',$id);

        return view('prestation.list',compact('prestations','facture'));
    }

    public function pdf($id){

        $facture =  Facture::FindOrFail($id);
        $prestations = Prestation::all()->where('fact_id','=',$id);
        $centre = Centre::FindOrFail($facture->centre_id);

        foreach($prestations as $prestation){

            $this->tot += $prestation->frais;

        }
        return view('pdf');
    }

    public function createPDF($id) {

        $facture =  Facture::FindOrFail($id);
        $prestations = Prestation::all()->where('fact_id','=',$id);
        $centre = Centre::FindOrFail($facture->centre_id);

        foreach($prestations as $prestation){

            $this->tot += $prestation->frais;

        }
        $date = Carbon::now()->format('d-m-yy');
        $pdf = PDF::loadView('pdf',compact('prestations','facture','centre','date'),['tot'=>$this->tot]);

        return $pdf->download('facture.pdf');
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $facture = Facture::FindOrFail($id);

        $prestation = new Prestation;
        $prestation->fact_id = $id;
        $prestation->interprete = $request->input('interprete');
        $prestation->requi = $request->input('requi');
        $prestation->frais = $request->input('frais');
        $prestation->save();

        return redirect('facture/'.$id.'/prestation');

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
        //
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
        $prestation = Prestation::findOrFail($id);
        $fact_id = $prestation->fact_id;
        $prestation->delete();

        return redirect('facture/'.$fact_id.'/prestation');
    }
}
