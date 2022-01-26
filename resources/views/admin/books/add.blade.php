@extends('admin.layout')

@section('content')
    <h1>Nuevo libro</h1>
    <form action="{{ route('admin.books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Titulo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo" name="titulo">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descripcion" name="descripcion">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Paginas</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Paginas" name="paginas">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Precio</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Precio" name="precio">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop

@section('aside')
    @include('admin.partials.aside')
@stop
