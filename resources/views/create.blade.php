@extends('templates.template')
@section('content')
<h1 class="text-center">@if(isset($fundo)) Editar Fundo @else Cadastrar Fundo @endif</h1> <hr>

<div class="container">
    <div class="row">
        <div class="col-12">

            @if(isset($errors) && count($errors)>0)
                <div class="text-center mt-4 mb-4 p-2 alert-danger">
                    @foreach($errors->all() as $erro)
                        {{$erro}}<br>
                    @endforeach
                </div>
            @endif

            @if(isset($fundo)) 
            <form name="formEdit" id="formEdit" method="post" action="{{url("fundo/$fundo->codigo_fundo")}}">
                @method('PUT')
            @else 
                <form name="formCad" id="formCad" method="post" action="{{url('fundo')}}">
            @endif
                @csrf
                <input class="form-control" type="text" name="nome_fundo" id="nome_fundo" placeholder="Nome do Fundo:" value="{{$fundo->nome_fundo ?? ''}}" required><br>
                <input class="form-control" type="number" min="0" name="qtd_integrantes" id="qtd_integrantes" placeholder="Quantidade de Integrantes:" value="{{$fundo->qtd_integrantes ?? ''}}" required><br>
                <select class="form-control" name="status" id="status" required>
                    <option value="1" @if(isset($fundo)) {{ $fundo->status == 1 ? 'selected' : '' }}@endif>Ativo</option>
                    <option value="0" @if(isset($fundo)) {{ $fundo->status == 0 ? 'selected' : '' }}@endif>Inativo</option>
                </select><br>
                <div class="text-center">
                    <input class="btn btn-primary" type="submit" value="@if(isset($fundo)) Editar @else Cadastrar @endif">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection