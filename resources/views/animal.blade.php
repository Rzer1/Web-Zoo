@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <p class="text-center header">{{ $animal->name }} - {{ $animal->kind }}</p>
        <div class="col-md-6">
            <img class="img-fluid" src="{{ asset('/storage'.$animal->img) }}">
        </div>
        <div class="col-md-6">
            <p class="text-center header">Описание</p>
            <p class="text">{{ $animal->description }}</p>
        </div>
    </div>
</div>
@endsection
