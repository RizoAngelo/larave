<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryControllers extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $country = DB::table('countries')
            ->select('id', 'country_code', 'country_name', 'created_at', 'updated_at')
            ->where('country_code', 'LIKE', '%' . $texto . '%')
            ->orWhere('country_name', 'LIKE', '%' . $texto . '%')
            ->orderBy('country_name', 'asc')
            ->paginate(10);
        return view('countrys.index', compact('country', 'texto'));
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('countrys.update', compact('country'));
    }

        public function update(Request $request, $id)
     {
        $request->validate(Country::$rules);

        Country::where('id', $id)->update($request->except('_token', '_method'));

         return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
     }

    public function store(Request $request)
    {
        $request->validate([
            'country_code' => 'required|string|min:2|max:10|unique:countries,country_code',
            'country_name' => 'required|string|min:4|max:50'
        ]);

        Country::create([
            'country_code' => $request->country_code,
            'country_name' => $request->country_name,
        ]);

        return redirect()->back()->with('success', 'País creado correctamente');
    }

    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete($id);
        return redirect('/country')->with('success', 'Usuario eliminado correctamente');
        // return view('destroy.{id}.countrys.index');

    }
}
