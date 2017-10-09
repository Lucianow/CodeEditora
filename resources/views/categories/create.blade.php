@extends('layouts.app')

@section('content')
    <div class="container">



        <div class="row">
            <h3>Nova Categoria</h3>
        </div>

        <div class="row">
            <form class="form-horizontal" method="post" action="{{ route('categories.store') }}">

                {{ csrf_field()}}

                @include('categories._form')

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info">Cadastrar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection