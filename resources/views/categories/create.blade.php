@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Nova Categoria</h3>

        </div>
        <div class="row">
            <form class="form-horizontal" method="post" action="{{ route('categories.store') }}">

                {{ csrf_field()}}

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Categoria</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Insira uma categoria">
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