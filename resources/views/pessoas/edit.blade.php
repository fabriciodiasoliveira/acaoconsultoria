@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Nova Pessoa</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('pessoas.update', $pessoa->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PUT" />
                <div class="row">
                    <div class="col-md -12">
                        <label for="nome">Nome</label>
                    </div>


                    <div class="col-md -12">
                        <input id="nome" type="text" name='nome' class="form-control" value="{{ $pessoa->nome }}" required autofocus>

                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md -12">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="col-md -12">
                        <input id="email" type="text" name='email' class="form-control" value="{{ $pessoa->email }}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md -12">
                        <label for="cpf" >CPF</label>
                    </div>

                    <div class="col-md -12">
                        <input id="cpf" type="text" name='cpf' class="form-control" value="{{ $pessoa->cpf }}" required/>

                        @error('cpf')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md -12">
                        <input type="submit" class="btn btn-primary" value="Alterar pessoa"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
