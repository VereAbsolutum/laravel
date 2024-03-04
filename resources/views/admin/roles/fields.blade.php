<!-- Nome Field -->
<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-font"></i></span>
            </div>
            <input id="name" class="form-control" name="name" type="text">
            @if($errors->has('nome'))
                <div class="error text-danger"><strong>{{ $errors->first('nome') }}</strong></div>
            @endif
        </div>
    </div>
</div>
