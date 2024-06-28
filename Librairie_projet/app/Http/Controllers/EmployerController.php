<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[
           "employes"=>Employer::all()
           ];
           return view('employers.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
       $data=[

        "employes"=>User::all()->where('role','employer')
       ];
       //dd($data);
       return view('employers.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val=$request->validate(
            [
                 'statut'=>'required',
                'user_id'=>'required'
            ]
            );
            Employer::create($val);
            return redirect()->route('employers.index');
   }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        $data=[

            "employes"=>User::all()->where('role','employer'),
            'employer'=> $employer
           ];
       return view('employers.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $employer)
    {
        $val=$request->validate(
            [
                 'statut'=>'required',
                'user_id'=>'required'
            ]
            );
           $employer->update($val);
            return redirect()->route('employers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return redirect()->route('employers.index');
    }
}
