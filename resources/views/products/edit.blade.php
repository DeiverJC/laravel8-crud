@extends('layout')
@section('content')
<div class="col-12">
    <div class="d-flex justify-content-between align-items-center border-bottom">
        <h1>Editar producto</h1>
        <a href="/products" class="btn btn-primary">Volver</a>
    </div>
</div>

<div class="col-6">
    <form class="mt-5" method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection