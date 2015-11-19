@extends('layouts.master')

@section('content')

    <h1>Representante</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nome</th><th>Endereco</th><th>Telefone1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $representante->id }}</td> <td> {{ $representante->nome }} </td><td> {{ $representante->endereco }} </td><td> {{ $representante->telefone1 }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection