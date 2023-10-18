@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="header text-center">Виртуальный зоопарк</h2>
        @foreach($animals as $elem)
            <div class="col-md-auto">
                <div class="card background" style="width: 18rem;">
                    <div class="card-header">
                        <img class="img-fluid" src="{{ asset('/storage'.$elem->img) }}"><br>
                        <p class="text-center">{{ $elem->name }}</p>
                    </div>
                    <div class="card-body">
                        <p>Вид: {{ $elem->kind }}</p>
                        <p>Возраст: {{ $elem->age }}</p>
                        <p class="text-start"><a class="button" href="/public/animal/{{ $elem->id }}">Перейти</a></p>
                        @auth
                        <p class="text-end"><a class="button" href="/public/deleteanimal/{{ $elem->id }}">Удалить</a></p>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
        @auth
        <h2 class="header text-center">Добавьте своё животное!</h2>
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputKind" class="form-label">Вид</label>
                <input type="text" class="form-control" id="exampleInputKind" name="exampleInputKind" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Имя</label>
                <input type="text" class="form-control" id="exampleInputName" name="exampleInputName" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputAge" class="form-label">Возраст</label>
                <input type="text" class="form-control" id="exampleInputAge" name="exampleInputAge" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Описание</label>
                <textarea class="form-control" id="exampleInputDescription" name="exampleInputDescription" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputImg" class="form-label">Картинка</label>
                <input type="file" class="form-control" id="exampleInputImg" name="exampleInputImg">
            </div>
            <button type="submit" class="btn btn-primary" name="addanimal">Добавить</button>
        </form>
        @endauth
    </div>
</div>
@endsection
