<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class booksController extends Controller
{
    
    public function index(){
        $libros = Book::all();
        return view('admin.books.index', compact('libros'));
    }

    public function edit($id){
        $libros = Book::find($id);
        return view('admin.books.edit', compact('libros'));
    }

    public function store(Request $request){
        // dd($request->all());
        $libro = new Book();
        $libro->title = $request->input('titulo');
        $libro->description = $request->input('descripcion');
        $libro->pages = $request->input('paginas');
        $libro->price = $request->input('precio');
        // $product->category_id = 1;
        $libro->save();

        return redirect(Route('admin.books'));
    }

    public function update(Request $request, $id){
        // $product = new Product();
        $libro=Book::find($id);
        $libro->title = $request->input('title');
        $libro->description = $request->input('description');
        $libro->pages = $request->input('pages');
        $libro->price = $request->input('price');;
        // $product->category_id = 1;
        $libro->save();
        echo "<h1>update</h1>";
        return redirect(Route('admin.books'));
    }

    Public function destroy($id){
        $libro = Book::find($id);
        $libro->delete();
        return back()->with('message', 'Producto eliminado',);
    }
}
