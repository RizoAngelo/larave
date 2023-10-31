<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryControllers extends Controller
{
    public function index()
    {
        $country=Country::all();
        return view('countrys.index',compact('country'));
    }

    public function edit($country_code)
    {
        $country = Country::where('country_code', $country_code)->firstOrFail();
        return view('countrys.edit',compact('country'));
    }

    public function update(Request $request , $country_code)
    {
        $country=Country::findOrFail($country_code);
        $country->country_code=$request->input('country_code');
        $country->country_name=$request->input('country_name');
        $country->save();
        return redirect()->route('select');
    }


    public function store(Request $request){
        $request->validate([
            'country_code'=>'required|string|min:2|max:10|unique:countries,country_code',
            'country_name'=> 'required|string|min:4|max:50'
        ]);

        Country::create([
            'country_code'=>$request->country_code,
            'country_name'=>$request->country_name,
        ]);

        return redirect()->back()
        ->with('success','Pais crado correctamente');
    }
}
