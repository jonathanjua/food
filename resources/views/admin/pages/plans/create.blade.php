@extends('adminlte::page')

@section('title', 'Cadastrar novo plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')

    <div class="card">

        <div class="body">

            <form class="form" action="" method="post">
                @csrf

                <div class="form-group">
                    <label for=""> Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="NOME: ">
                </div>
                <div class="form-group">
                    <label for=""> Preço:</label>
                    <input type="text" name="price" class="form-control" placeholder="PREÇO: ">
                </div>
                <div class="form-group">
                    <label for=""> Descrição:</label>
                    <input type="text" name="description" class="form-control" placeholder="DESCRIÇÃO: ">
                </div>
            </form>

        </div>

    </div>



@stop
