<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use App\Http\Requests\FactureRequest;

class FactureController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::all();
        return view('facture.index')->with('factures',$factures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FactureRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactureRequest  $request)
    {
        $facture = new Facture();

        $facture->designation = $request->get('designation');
        $facture->description = $request->get('description');
        $facture->price_ht = $request->get('price_ht');

        $facture->save();

        return redirect('/factures');

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
        $facture = Facture::find($id);
        return view('facture.edit')->with('facture',$facture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FactureRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(FactureRequest $request, $id)
    {
        $facture = Facture::find($id);

        $facture->designation = $request->get('designation');
        $facture->description = $request->get('description');
        $facture->price_ht = $request->get('price_ht');

        $facture->save();

        return redirect('/factures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facture = Facture::find($id);
        $facture->delete();
        return redirect('/factures');
    }
}
