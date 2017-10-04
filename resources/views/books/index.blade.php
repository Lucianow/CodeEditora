@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Livros</h3>
            <a href="{{ route('books.create') }}" class="btn btn-info">Inserir Livro</a>

        </div>
        <div class="row">
            {{ $books->links() }}

            <table class="table table-striped table-condensed">
                <thead>
                <tr>
                    <td><h4 style="font-weight: 600">Título</h4></td>
                    <td><h4 style="font-weight: 600">Sub-título</h4></td>
                    <td><h4 style="font-weight: 600">Preço</h4></td>
                    <td><h4 style="font-weight: 600">Ações</h4></td>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{$book->title}}</td>
                        <td>{{$book->subtitle}}</td>
                        <td>{{$book->price}}</td>
                        <td>
                            <ul class="list-inline">
                                <li>
                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-link">Editar</a>
                                </li>
                                <li>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-link">Excluir</button>
                                    </form>
                                </li>

                            </ul>


                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection