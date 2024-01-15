@extends('layouts.app')

@section('content')
@php
    $cabecalho = 'col-md-2';
    $corpo = 'col-md-10';
@endphp
<div class="container">
    @foreach ($dados as $dado)
    <div class="row">
        <div class="col-md-12 text-center">
            <img class="solid" src="{{ $dado->avatar }}" alt=" Foto do {{ $dado->first_name }}"/>
        </div>
        <div class="col-md-12">
            <div class="col-md-1">
                <button class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#sensíveis-{{ $dado->id }}">Dados Sensíveis</button>
            </div>
        </div>
        <div id="sensíveis-{{ $dado->id }}" class="collapse">
            <div class="solid">
                <div><h3>Dados sensíveis</h3></div>
                <div class="{{ $cabecalho }} texto_cabecalho">id:</div>
                <div class="{{ $corpo }}">{{ $dado->id }}</div>

                <div class="{{ $cabecalho }} texto_cabecalho">uid:</div>
                <div class="{{ $corpo }}">{{ $dado->uid }}</div>

                <div class="{{ $cabecalho }} texto_cabecalho">Senha:</div>
                <div class="{{ $corpo }}">{{ $dado->password }}</div>
            </div>
        </div>
        
        <div class="solid">
            <div><h3>Dados pessoais</h3></div>
            <div class="{{ $cabecalho }} texto_cabecalho">Nome completo:</div>
            <div class="{{ $corpo }}">{{ $dado->first_name }} {{ $dado->last_name }}</div>

            <div class="{{ $cabecalho }} texto_cabecalho">E-mail:</div>
            <div class="{{ $corpo }}">{{ $dado->email }}</div>

            <div class="{{ $cabecalho }} texto_cabecalho">Sexo:</div>
            <div class="{{ $corpo }}">{{ $dado->gender }}</div>

            <div class="{{ $cabecalho }} texto_cabecalho">Telefone:</div>
            <div class="{{ $corpo }}">{{ $dado->phone_number }}</div>

            <div class="{{ $cabecalho }} texto_cabecalho">Número do seguro social:</div>
            <div class="{{ $corpo }}">{{ $dado->social_insurance_number }}</div>

            <div class="{{ $cabecalho }} texto_cabecalho">Data de nascimento:</div>
            <div class="{{ $corpo }}">{{ $dado->date_of_birth }}</div>
        </div>
        <div class="solid">
            <div><h3>Ocupação</h3></div>
            <div class="{{ $cabecalho }} texto_cabecalho">Cargo:</div>
            <div class="{{ $corpo }}">{{ $dado->employment->title }}</div>

            <div class="{{ $cabecalho }} texto_cabecalho">Habilidade principal:</div>
            <div class="{{ $corpo }}">{{ $dado->employment->key_skill }}</div>
        </div>
        <div class="solid">
            <div><h3>Endereço</h3></div>
            <div class="{{ $cabecalho }} texto_cabecalho">Cidade:</div>
            <div class="{{ $corpo }}">{{ $dado->address->city }}</div>

            <div class="{{ $cabecalho }} texto_cabecalho">Nome da rua:</div>
            <div class="{{ $corpo }}">{{ $dado->address->street_name }}</div>
            
            <div class="{{ $cabecalho }} texto_cabecalho">Endereço da rua:</div>
            <div class="{{ $corpo }}">{{ $dado->address->street_address }}</div>
            
            <div class="{{ $cabecalho }} texto_cabecalho">Código postal:</div>
            <div class="{{ $corpo }}">{{ $dado->address->zip_code }}</div>
            
            <div class="{{ $cabecalho }} texto_cabecalho">Estado:</div>
            <div class="{{ $corpo }}">{{ $dado->address->state }}</div>
            
            <div class="{{ $cabecalho }} texto_cabecalho">País:</div>
            <div class="{{ $corpo }}">{{ $dado->address->country }}</div>
            
            <div class="solid">
                <div><h3>Coordenadas</h3></div>
                    <div class="{{ $cabecalho }} texto_cabecalho">Latitude:</div>
                    <div class="{{ $corpo }}">{{ $dado->address->coordinates->lat }}</div>
                    
                    <div class="{{ $cabecalho }} texto_cabecalho">Longitude:</div>
                    <div class="{{ $corpo }}">{{ $dado->address->coordinates->lng }}</div>
            
            </div>
        </div>
        <div class="solid">
            <div><h3>Cartão de crédito</h3></div>
            <div class="{{ $cabecalho }} texto_cabecalho">Número:</div>
            <div class="{{ $corpo }}">{{ $dado->credit_card->cc_number }}</div>
        </div>
        <div class="solid">
            <div><h3>Dados da Inscrição</h3></div>
            <div class="{{ $cabecalho }} texto_cabecalho">Plano:</div>
            <div class="{{ $corpo }}">{{ $dado->subscription->plan }}</div>
            
            <div class="{{ $cabecalho }} texto_cabecalho">Status:</div>
            <div class="{{ $corpo }}">{{ $dado->subscription->status }}</div>
            
            <div class="{{ $cabecalho }} texto_cabecalho">Método de Pagamento:</div>
            <div class="{{ $corpo }}">{{ $dado->subscription->payment_method }}</div>
            
            <div class="{{ $cabecalho }} texto_cabecalho">Termos:</div>
            <div class="{{ $corpo }}">{{ $dado->subscription->term }}</div>
        </div>
        
    </div>
    @endforeach
</div>
@endsection
