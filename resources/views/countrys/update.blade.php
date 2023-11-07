@extends('layouts.app')

@section('content')

<div class="container w-50 border p-4 mt-4">
  <form action="{{ route('country.update', $country->id) }}" method="POST" novalidate>
   @csrf
   @method("PUT")
   <label for="country_code">Codigo del pais</label>
   <input type="text" name="country_code" value="{{$country->country_code}}">
   <label for="country_name">Nombre del pais</label>
   <input type="text" name="country_name" value="{{$country->country_name}}">
    <button type="submit">Actualizar</button>
</form>

@endsection
{{-- 'country_code' => $request->country_code,
'country_name' => $request->country_name, --}}
