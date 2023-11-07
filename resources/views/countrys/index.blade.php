@extends('layauts.app')

@section('content')
    <div class="container">
        <h4>Gestion de Paises</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('country.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-11">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-11">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                    </div>
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
                @if(count($country)<=0) 
                    <tr>
                        <td colspan="8">No hay resultado</td>
                    </tr>
                @else
                @foreach ($country as $country )
                    <tr>
                        <td><a href="{{route('country.update',$country->id)}}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{route('country.destroy',$country->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                            </form>
                        </td>
                        <td>{{$country->id}}</td>
                        <td>{{$country->country_code}}</td>
                        <td>{{$country->country_name}}</td>
                        <td>{{$country->created_at}}</td>
                        <td>{{$country->updated_at}}</td>
                    </tr>
                @endforeach
                @endif
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
