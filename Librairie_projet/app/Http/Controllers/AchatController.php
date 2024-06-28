<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use App\Models\Employer;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
            'achats'=>Achat::all()
        ];
        return view('achats.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=[
            'employers'=>Employer::all(),
            'fournisseurs'=>Fournisseur::all()
        ];
       return view('achats.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $val= $request->validate(
            [ 
            'montant_achat'=>'Required',
            'etat'=>'Required',
            'employer_id'=>'Required',
           'fournisseur_id'=>'Required'
            ]
            );
            Achat::create($val);
            return redirect()->route('achats.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Achat $achat)
    {
        return view('achats.show',compact('achat'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achat $achat)
    {
        return view('achats.edit',compact('achat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achat $achat)
    {
        //
        $val= $request->validate(
            [ 
            'montant_achat'=>'Required',
            'etat'=>'Required',
            'employer_id'=>'Required',
           'fournisseur_id'=>'Required'
            ]
            );
            $achat->update($val);
            return redirect()->route('achats.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achat $achat)
    {
        $achat->delete();
            return redirect()->route('achats.index');
    }
}
