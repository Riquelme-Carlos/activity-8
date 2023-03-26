@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif


    <a href="{{url('superheroe/create')}}">Registrar nuevo Superheroe</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Fotografia</th>
                <th>Nombre Real</th>
                <th>Nombre Conocido</th>
                <th>Informacion Adicional</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superheroes as $superheroe)
            <tr>
                <td>{{$superheroe ->id}}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$superheroe->Foto }}" width="100" alt="">

                </td>
                <td>{{$superheroe ->NombreReal}}</td>
                <td>{{$superheroe ->NombreConocido}}</td>
                <td>{{$superheroe ->InformacionAdicional}}</td>
                <td>
                    <a href="{{ url('/superheroe/'.$superheroe->id.'/edit') }}">
                        Editar
                    </a>

                    |

                    <form action="{{ url('/superheroe/'.$superheroe->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Deseas realmente borrar este registro?')" value="Eliminar">


                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection