<div class="form-group">
    <label for="" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">

        @if(isset($category))
            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
        @else
            <input type="text" class="form-control" name="name" placeholder="Insira o nome da categoria">
        @endif

        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    </div>
</div>