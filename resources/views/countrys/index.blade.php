@extends('layauts.app')

@section('content')
    <div class="container">
        <h4>Gestion de Paises</h4>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>Id</th>
                            <th>Id Paises</th>
                            <th>Nombre Paises</th>
                            <th>creacion del registro</th>
                            <th>actualizacion del registro</th>
                        </tr>
                    
                </thead>
                <tbody>
                @foreach ($country as $country )
                    <tr>
                        <td><a href="{{route('country.edit',$country->country_code)}}" class="btn btn-warning btn-sm">Editar</a> | Eliminar</td>
                        <td>{{$country->id}}</td>
                        <td>{{$country->country_code}}</td>
                        <td>{{$country->country_name}}</td>
                        <td>{{$country->created_at}}</td>
                        <td>{{$country->updated_at}}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection 