@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos</h1> <a href="{{ route('plans.create') }}" class="btn btn-dark">ADD</a>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            #Filtros
        </div>
        <div class="body">
            <table class="table  table-condensed">
                <thead>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th style="width: 50px">Ações</th>
                </thead>

                <tbody>
                    @foreach ( $plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td> {{ $plan->price }}</td>
                            <td> <a href="" class="btn btn-warning"> ações</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $plans->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>



@stop


