@extends('layouts.master')

@section('content')

    <h1>Representantes <a href="{{ url('/representante/create') }}" class="btn btn-primary pull-right btn-sm">Add New Representante</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Nome</th><th>Endereco</th><th>Telefone1</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($representantes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/representante', $item->id) }}">{{ $item->nome }}</a></td><td>{{ $item->endereco }}</td><td>{{ $item->telefone1 }}</td>
                    <td><a href="{{ url('/representante/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['RepresentanteController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection