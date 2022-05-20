@extends('templates.template')
@section('content')
<h1 class="text-center">Fundo</h1>
<hr>

<div class="text-center mt-3 mb-4">
    <a href="{{url('fundo/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    <a href="{{route('excel')}}">
        <button class="btn">Exportar</button>
    </a>
    @csrf
    <table class="table text-center" id="table-fundo">
        <thead class="thead-dark">
            <tr>
                <th class="text-center" scope="col">Codigo</th>
                <th class="text-center" scope="col">Nome</th>
                <th class="text-center" scope="col">Quantidade de Integrantes</th>
                <th class="text-center" scope="col">Status</th>
                <th class="text-center" scope="col">Opcoes</th>
            </tr>
        </thead>
        <tbody>

            @foreach($fundo as $fundos)
            <tr>
                <th class="text-center" scope="row">{{$fundos->codigo_fundo}}</th>
                <td class="text-center">{{$fundos->nome_fundo}}</td>
                <td class="text-center">{{$fundos->qtd_integrantes}}</td>
                <?php if ($fundos->status) { ?>
                    <td class="text-center">Ativo</td>
                <?php } else { ?>
                    <td class="text-center">Inativo</td>
                <?php } ?>
                <td>
                    <a href="{{url("fundo/$fundos->codigo_fundo")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>

                    <a href="{{url("fundo/$fundos->codigo_fundo/edit")}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>

                    <a href="{{url("fundo/$fundos->codigo_fundo")}}" class="js-del">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('script')
    $(document).ready( function () {
        $('#table-fundo').DataTable();
    } );
@endsection