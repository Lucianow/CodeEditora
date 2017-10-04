@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row">
           <h3>Listagem de Categorias</h3>
           <a href="{{ route('categories.create') }}" class="btn btn-info">Nova Categoria</a>

       </div>
        <div class="row">
            {{ $categories->links() }}

            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <td><h4 style="font-weight: 600">ID</h4></td>
                        <td><h4 style="font-weight: 600">Nome</h4></td>
                        <td><h4 style="font-weight: 600">Ações</h4></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <ul class="list-inline">
                                <li>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-link">Editar</a>
                                </li>
                                <li>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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