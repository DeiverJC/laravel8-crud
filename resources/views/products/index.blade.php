@extends('layout')

@section('content')
<div class="col-12">
    <div class="d-flex justify-content-between align-items-center border-bottom">
        <h1>Listado de productos</h1>
        <a href="/products/create" class="btn btn-primary">Nuevo producto</a>
    </div>
</div>
<table class="table table-bordered table-striped mt-5">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>${{ number_format($product->price) }}</td>
            <td class="d-flex gap-1">
                <a href="/products/{{ $product->id }}/edit" class="btn btn-sm btn-info pl-3">
                    Editar
                </a>
                <form method="POST" action="/products/{{ $product->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection