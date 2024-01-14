@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($dados as $dado)
    <div class="row">
        <div class="col-md-12">
            Primeiro nome: {{ $dado->first_name }}
        </div>
    </div>
    @endforeach
</div>
@endsection
