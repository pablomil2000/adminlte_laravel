@extends('admin.layout')

@section('content')
    <h1>Todos los libros</h1>
    <a href="books/add"><button class="btn btn-success">Nuevo libro</button></a>

    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Description</th>
                <th>Paginas</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->title }}</td>
                    <td>{{ $libro->description }}</td>
                    <td>{{ $libro->pages }}</td>
                    <td> {{ $libro->price }}</td>
                    <td><a href="books/{{ $libro->id }}/edit"><button class="btn btn-primary btn-xs"><i class="fas fa-pencil-alt"></i></button></a>
                        <form action="{{ url('admin/books/'.$libro->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('aside')
    @include('admin.partials.aside')
@stop
