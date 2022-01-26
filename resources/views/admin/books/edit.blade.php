@extends('admin.layout')

@section('content')
    <h1>Editar libro</h1>
    <form action="{{ url('admin/books/'.$libros->id.'/edit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre" value="{{ $libros->title }}" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <input type="text" class="form-control" placeholder="Descripcion" value="{{ $libros->description }}" name="description">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Paginas</label>
            <input type="text" class="form-control" placeholder="Paginas" value="{{ $libros->pages}}" name="pages">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Precio</label>
            <input type="text" class="form-control" placeholder="Precio" value="{{ $libros->price}}" name="price">
        </div>
{{-- @dd($libros) --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop

@section('aside')
    @include('admin.partials.aside')
@stop
