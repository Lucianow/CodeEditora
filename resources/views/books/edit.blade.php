@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Livro</h3>

        </div>
        <div class="row">
            <form class="form-horizontal" method="post" action="{{route('books.update', $book->id)}}">

                {{ csrf_field()}}

                {{ method_field('PUT') }}

                <div class="form-group has-warning">
                    <label for="" class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="{{ $book->title }}">
                    </div>
                </div>

                <div class="form-group has-warning">
                    <label for="" class="col-sm-2 control-label">Sub-título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="subtitle" value="{{ $book->subtitle }}">
                    </div>
                </div>

                <div class="form-group has-warning">
                    <label for="" class="col-sm-2 control-label">Preço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" value="{{ $book->price }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Salvar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection