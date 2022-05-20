@extends('templates.template')
@section('content')

<link href="/css/style.css" rel="stylesheet">

<h1 class="text-center">Visualizar</h1>

<div class="col-8 m-auto">
    <div class="grid-visualizar">
        <!-- 1ªcoluna -->
        <div class="text-right">
            <div class="text-right">
                <label>Codigo do Fundo:</label>
            </div>

            <div class="text-right">
                <label>Nome do Fundo:</label>
            </div>

            <div class="text-right">
                <label>Quantidade de Integrantes:</label>
            </div>

            <div class="text-right">
                <label>Data/Hora de Cadastro:</label>
            </div>

            <div class="text-right">
                <label>Status:</label>
            </div>
        </div>

        <!-- 2ª coluna -->
        <div>
            <div>
                <label class="remove-weight">{{$fundo->codigo_fundo}}</label>
            </div>

            <div>
                <label class="remove-weight">{{$fundo->nome_fundo}}</label>
            </div>

            <div>
                <label class="remove-weight">{{$fundo->qtd_integrantes}}</label>
            </div>

            <div>
                <label class="remove-weight">{{$fundo->data_hora_cadastro}}</label>
            </div>

            <div>
                <label class="remove-weight">{{$fundo->status}}</label>
            </div>
        </div>


    </div>

</div>
@endsection