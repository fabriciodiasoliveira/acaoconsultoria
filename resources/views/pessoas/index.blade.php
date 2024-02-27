@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Pessoas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="/pessoas/create">Criar pessoa</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h2>Nome</h2>
        </div>
        <div class="col-md-3">
            <h2>CPF</h2>
        </div>
        <div class="col-md-3">
            <h2>E-mail</h2>
        </div>
        <div class="col-md-3">

        </div>

    </div>
    @foreach($pessoas as $pessoa)
    <div class="row">
        <div class="col-md-3">
            {{ $pessoa->nome }}
        </div>
        <div class="col-md-3">
            {{ $pessoa->cpf }}
        </div>
        <div class="col-md-3">
            {{ $pessoa->email }}
        </div>
        <div class="col-md-3">
            <a class="btn btn-primary" href="/pessoas/edit/{{ $pessoa->id }}">Editar</a>
            <input type="button" class="btn btn-danger" onclick="deletar({{ $pessoa->id }})" value="Deletar"</a>
        </div>
        <form id="{{ $pessoa->id }}" action="{{ route ('pessoas.destroy', $pessoa->id) }}" method="POST">
            {{ csrf_field() }}
            <input type='hidden' name='_method' value='DELETE' />
        </form>
    </div>
    @endforeach
</div>
@endsection
<script>
    function deletar(id){
        form = document.getElementById(id);
        form.submit();
    }
</script>
