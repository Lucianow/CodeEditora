@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo Livro</h3>

        </div>
        <div class="row">
            <form class="form-horizontal" method="post" action="{{ route('books.store') }}">

                {{ csrf_field()}}

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Insira um título">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Sub-título</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="subtitle" placeholder="Insira um sub-título">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Preço</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" placeholder="Insira um preço">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Cadastrar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection